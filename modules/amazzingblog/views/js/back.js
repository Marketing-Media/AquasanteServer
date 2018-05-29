/**
*  @author    Amazzing
*  @copyright Amazzing
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)*
*/

var ajax_action_path = window.location.href.split('#')[0]+'&ajax=1',
	blockAjax = false,
	postIds = [],
	postIdsTotal = 0;

$(document).ready(function() {

	$(document).on('click', '.btn:not([type="submit"]), .act, a[href="#"]', function(e){
		e.preventDefault();
	}).on('click', '.list-group-item', function(e){
		e.preventDefault();
		if ($(this).data('sub')) {
			$(this).siblings('.sub-item.'+$(this).data('sub')).toggleClass('hidden');
		} else {
			$(this).addClass('active').siblings().removeClass('active');
			$('.tab-content'+$(this).attr('href')).addClass('active').siblings().removeClass('active');
		}
	}).on('click', '.add', function(){
		var $btn = $(this),
			resource = $btn.closest('.tab-content').data('resource');
		if (resource == 'Category') {
			$('.addChild').first().click();
			return;
		}
		$btn.addClass('loading');
		$.ajax({
			type: 'POST',
			url: ajax_action_path+'&action=Call'+resource+'Form',
			dataType : 'json',
			success: function(r) {
				var $item = $(utf8_decode(r.form));
				if (resource == 'Post') {
					$btn.removeClass('loading').closest('.tab-content').find('.list').prepend($item);
				} else {
					$btn.removeClass('loading').closest('.tab-content').find('.list').append($item);
				}

				$item.addClass('new-item').find('.edit').click();
			},
			error: function(r) {
				console.warn(r.responseText);
			}
		});
	}).on('click', '.saveSettings', function(){
		var $form = $(this).closest('form'),
			data = $form.serialize(),
			type = $(this).data('type');
		$form.find('.thrown-errors').remove();
		$.ajax({
			type: 'POST',
			url: ajax_action_path+'&action=SaveSettings&type='+type,
			data: {
				data: data,
			},
			dataType : 'json',
			success: function(r) {
				if ('errors' in r) {
					$form.prepend(utf8_decode(r.errors));
					$('html, body').animate({scrollTop: $form.offset().top - 150}, 300);
				} else {
					$.growl.notice({ title: '', message: savedTxt});
					if (type == 'general') {
						$form.closest('.amazzingblog').toggleClass('no-comments', $('#user_comments_0').prop('checked'));
					}
				}
			},
			error: function(r) {
				console.warn(r.responseText);
			}
		});
	}).on('click', '.btn.save', function(){
		var $form = $(this).closest('form');
		$form.find('textarea.mce-activated').each(function(){
			var html_content = tinymce.get($(this).attr('id')).getContent();
			$(this).val(html_content);
		});
		$form.find('.tagify').each(function(){ // loop is required for multiple serializing
			$(this).tagify('serialize');
		});
		var data = $form.serialize(),
			resource = $(this).closest('[data-resource]').data('resource'),
			scrollUp = !$(this).hasClass('dont-scroll-up');
		$form.find('.thrown-errors').remove();
		$.ajax({
			type: 'POST',
			url: ajax_action_path+'&action=Save&resource='+resource,
			data: {
				data: data,
			},
			dataType : 'json',
			success: function(r) {
				// console.dir(r);
				if ('errors' in r){
					$form.prepend(utf8_decode(r.errors));
					$('html, body').animate({scrollTop: $form.offset().top - 150}, 300);
				}
				else {
					var $item = $form.closest('.item');
					$.growl.notice({ title: '', message: savedTxt});
					if (resource == 'Block' && !$item.data('id') && r.id){
						var hook_name = $('.hookSelector option:selected').val(),
							total = $item.siblings('.item.'+hook_name).length + 1
						$('.hookSelector option:selected').text(hook_name+' ('+total+')');
						if (!scrollUp) {
							$item.attr('data-id', r.id).find('[name="id_block"]').val(r.id);
							var newTitle = $item.find('.multilang.lang-'+id_lang_current).find('.title').val();
							$item.find('label.title').find('.text').html(newTitle);
						}
					}
					if (scrollUp && ('form' in r)){
						$('.focus-on-item').removeClass('focus-on-item');
						$form.find('.details').slideUp(function(){
							$item.replaceWith(utf8_decode(r.form))
						});
					}
					if (resource == 'Category' && 'tree' in r){
						$('.cat-level.root').replaceWith(utf8_decode(r.tree));
						$('#dynamic-popup button.close').click();
					} else if (resource == 'GeneralSettings') {
						$('.bootstrap.amazzingblog').toggleClass('no-comments', !r.saved_settings.user_comments);
					}
					if ('total' in r) {
						$('.tab-content[data-resource="'+resource+'"]').find('.panel-title').find('.badge.total').html(r.total);
					}
				}

			},
			error: function(r) {
				console.warn($(r.responseText).text() || r.responseText);
			}
		});
	}).on('click', '.toggleMetaFields', function(){
		var $showSpan = $(this).find('.show-fields');
		if ($showSpan.hasClass('hidden')) {
			$('.meta-field').addClass('hidden');
			$showSpan.removeClass('hidden').siblings().addClass('hidden');
		} else {
			$('.meta-field').removeClass('hidden');
			$showSpan.addClass('hidden').siblings().removeClass('hidden');
		}
	}).on('click', '.category-inline-data', function(){
		// currently not required
		return;
		var $i = $(this).find('.toggleIndicator'),
			iClass = $i.attr('class')
		if ($i.hasClass('icon-angle-down')) {
			$i.attr('class', iClass.replace('angle-down', 'angle-up')).closest('.post-categories').addClass('open');
		} else {
			$i.attr('class', iClass.replace('angle-up', 'angle-down')).closest('.post-categories').removeClass('open');
		}
	}).on('change', '[name="cat_ids[]"]', function(){
		var $parent = $(this).closest('.cat-item');
		if ($(this).prop('checked')) {
			$parent.addClass('checked');
		} else {
			if ($parent.hasClass('is-default')) {
				$('.cat-level.root').find('[name="cat_ids[]"]:checked').first().closest('.cat-item').find('.makeDefault').click();
			}
			$parent.removeClass('checked is-default');
		}
		if (!$parent.closest('.post-categories').find('.cat-item.is-default').length) {
			$parent.find('.makeDefault').click();
		}
		fillInlineCategoryNames();
	}).on('click', '.makeDefault', function(){
		$('.is-default').removeClass('is-default');
		var $parent = $(this).closest('.cat-item'),
			$checkbox = $parent.find('[name="cat_ids[]"]'),
			id_cat = $checkbox.val(),
			cat_name = $parent.find('.cat-name').text();
		$parent.addClass('is-default');
		$('#id_category_default').val(id_cat);
		$('.default-cat-name').html(cat_name);
		if (!$checkbox.prop('checked')) {
			// fillInlineCategoryNames will be executed on click
			$checkbox.click();
		} else {
			fillInlineCategoryNames();
		}
	}).on('click', '.scrollUp', function(){
		$('.focus-on-item').removeClass('focus-on-item');
		$('.post-item.open, .item.open').removeClass('open').find('.post-details, .details').slideUp(function(){
			$el = $(this);
			setTimeout(function(){
				$el.html('');
			}, 100);
		});
	}).on('click', 'a.delete', function(){
		if (!confirm(areYouSureTxt))
			return;
		var $parent = $(this).closest('.item'),
			$tabContent =  $parent.closest('.tab-content'),
			resource = $tabContent.data('resource');
		var id = $parent.find('input[name="id_'+resource.toLowerCase()+'"]').val();
		$.ajax({
			type: 'POST',
			url: ajax_action_path+'&action=Delete&resource='+resource+'&id='+id,
			dataType : 'json',
			success: function(r) {
				if ('errors' in r) {
					$parent.prepend(utf8_decode(r.errors));
				} else if (!r.deleted) {
					$.growl.error({title: '', message: failedTxt});
				} else {
					if (resource == 'Block') {
						var hook_name = $('.hookSelector option:selected').val();
						var total = $parent.siblings('.item.'+hook_name).length
						$('.hookSelector option:selected').text(hook_name+' ('+total+')');
						$parent.fadeOut(function(){$(this).remove()});
					} else {
						if (resource == 'Comment' && $parent.find('a.approve-comment').length) {
							updateCounter($('a[href="#comments"]').find('.badge'), '-1', true);
						}
						$parent.closest('.tab-content').removeClass('focus-on-item').
						find('select.filter-by').first().change();
					}
				}
			},
			error: function(r) {
				console.warn(r.responseText);
			}
		});
	}).on('click', '.avatar-img', function(){
		if ($(this).closest('.being-edited').length) {
			$(this).closest('.user-avatar').find('input[type="file"]').click();
		}
	}).on('change', '.avatar-file', function(e){
		var $el = $(this);
		var files = !!this.files ? this.files : [];
		if (!files.length || !window.FileReader)
			return;
		if (/^image/.test( files[0].type)){
			var reader = new FileReader();
			reader.readAsDataURL(files[0]);
			reader.onloadend = function(){
				$el.closest('.user-avatar').find('.avatar-img').css('background-image', 'url('+this.result+')');
			}
		}
	}).on('click', '.editCategory, .addChild', function(){
		$('.scrollUp').click();
		var params = $(this).hasClass('editCategory') ? 'id_category='+$(this).data('id') : 'id_parent='+$(this).data('parent'),
			title = $(this).attr('title');
		$.ajax({
			type: 'POST',
			url: ajax_action_path+'&action=CallCategoryForm&'+params,
			dataType : 'json',
			success: function(r)
			{
				if ('category_form' in r){
					$('#dynamic-popup .dynamic-content').html(utf8_decode(r.category_form)).tooltip({selector: '.label-tooltip'});
					if ($('#dynamic-popup').find('.autofill').find('.multilang.empty').length) {
						$('#dynamic-popup').find('input.title').addClass('autofill-required');
					}
					$('#dynamic-popup .modal-title').html(title);
					$('#dynamic-popup').find('textarea.mce:visible').not('.mce-activated').each(function(){
						prepareMCE($(this));
					});
				}
				else
					$.growl.error({title: '', message: failedTxt});
			},
			error: function(r)
			{
				console.warn(r.responseText);
			}
		});
	}).on('click', '.deleteCategory', function(){
		if (!confirm(areYouSureTxt))
			return;
		var $parent = $(this).closest('.cat-level'),
			$tabContent = $parent.closest('.tab-content'),
			id_category = $(this).data('id');
		$.ajax({
			type: 'POST',
			url: ajax_action_path+'&action=DeleteCategory&id_category='+id_category,
			dataType : 'json',
			success: function(r) {
				if (r.deleted) {
					$parent.fadeOut(function(){$(this).remove()});
					$tabContent.find('.panel-title').find('.badge.total').html(r.total);
				} else {
					$.growl.error({title: '', message: failedTxt});
				}
			},
			error: function(r) {
				console.warn(r.responseText);
			}
		});
	}).on('keyup', '.multilang input.title.autofill-required', function(){
		var $autofill_containers = $(this).closest('form').find('.autofill').find('.multilang.empty').not('.hidden'),
			translit = str2url($(this).val(), 'UTF-8');
		$autofill_containers.find('input.link_rewrite').val(translit);
		$autofill_containers.find('input.meta_title').val($(this).val());
	}).on('click', '.generateFieldValue', function(){
		var name = $(this).data('name'),
			$visible_containers = $(this).closest('form').find('.multilang').not('.hidden');
			value = $visible_containers.find('input.title').val();
		if (name == 'link_rewrite') {
			value = str2url(value, 'UTF-8');
		}
		$visible_containers.find('input.'+name).val(value);
	}).on('click', 'button.close[data-dismiss="modal"]', function(){
		$('#dynamic-popup .dynamic-content').html('');
	}).on('change', '.hookSelector', function(){
		var hook_name = $(this).val(),
			$hook_note = $(this).closest('.tab-content').find('.hook-note');
		$(this).closest('.tab-content').find('.item').addClass('hidden');
		$(this).closest('.tab-content').find('.item.'+hook_name).removeClass('hidden');
		if (hook_name.substring(0, 16) == 'displayBlogPosts') {
			$hook_note.removeClass('hidden').find('strong').html('{hook h=\''+hook_name+'\'}');
		} else if (!$hook_note.hasClass('hidden')){
			$hook_note.addClass('hidden').find('strong').html('');
		}
		$('#settings-content').hide().html('');
		$('.callHookSettings').removeClass('active');
	}).on('click', '.callHookSettings', function(e){
		$el = $(this),
			settings_type = $el.data('settings'),
			hook_name = $el.closest('form').find('.hookSelector').val();;
		if ($el.hasClass('active')) {
			$('#settings-content').slideUp(function(){
				$(this).html('');
				$('.callHookSettings').removeClass('active');
			});
			return;
		}
		$('#settings-content').hide().html('');
		$('.callHookSettings').removeClass('active');
		$.ajax({
			type: 'POST',
			url: ajax_action_path+'&action=CallHookSettingsForm&settings_type='+settings_type+'&hook_name='+hook_name,
			dataType : 'json',
			success: function(r) {
				console.dir(r);
				if ('form_html' in r){
					$('#settings-content').html(utf8_decode(r.form_html)).slideDown().tooltip({selector: '.label-tooltip'});
					$el.addClass('active');
				}
			},
			error: function(r) {
				$('#settings-content').hide().html('');
				$('.callHookSettings').removeClass('active');
				console.warn(r.responseText);
			}
		});
	}).on('click', '.chk-action', function(e){
		e.preventDefault();
		var $checkboxes = $(this).closest('#settings-content').find('input[type="checkbox"]');
		if ($(this).hasClass('checkall')){
			$checkboxes.each(function(){
				$(this).prop('checked', true);
			});
		}
		else if ($(this).hasClass('uncheckall')){
			$checkboxes.each(function(){
				$(this).prop('checked', false);
			});
		}
		else if ($(this).hasClass('invert')){
			$checkboxes.each(function(){
				$(this).prop('checked', !$(this).prop('checked'));
			});
		}
	}).on('click', '.hide-settings', function(){
		$('.callHookSettings.active').click();
	}).on('click', '.saveHookSettings', function(e){
		var hook_name = $(this).attr('data-hook');
		var data = $(this).closest('form').serialize();
		$.ajax({
			type: 'POST',
			url: ajax_action_path+'&action=SaveHookSettings&'+data,
			dataType : 'json',
			success: function(r) {
				console.dir(r);
				if (r.saved){
					$('#settings-content').slideUp(function(){
						$('.callHookSettings').removeClass('active');
						$(this).html('');
						$.growl.notice({ title: '', message: savedTxt});
					});
				}
			},
			error: function(r) {
				console.warn(r.responseText);
			}
		});
	}).on('click', '.edit', function(){
		$('.open .scrollUp, .callHookSettings.active').click();
		var $tab = $(this).closest('.tab-content'),
			resource = $tab.data('resource'),
			$parent = $(this).closest('.item');

		var id = $parent.find('input[name="id_'+resource.toLowerCase()+'"]').val();
		var additionalParams = '';
		if (resource == 'Block')
			additionalParams += '&hook_name='+$('.hookSelector').val();
		$.ajax({
			type: 'POST',
			url: ajax_action_path+'&action=Call'+resource+'Form&id='+id+'&full=1'+additionalParams,
			dataType : 'json',
			success: function(r) {
				// console.dir(r);
				var $form = $(utf8_decode(r.form)).find('form');
				$parent.html($form);
				if (resource == 'Post') {
					$parent.find('.icon-folder-open.toggleChildren').click();
					$('.is-default').first().find('.makeDefault').click();
					if ($parent.hasClass('new-item')) {
						$parent.find('.autofill').find('.multilang').addClass('empty').find('input').val('');
					}
					if ($parent.find('.autofill').find('.multilang.empty').length) {
						$parent.find('input.title').addClass('autofill-required');
					}
					activateTagify();
					activateDatePicker();
				}
				$parent.find('.details').slideDown(function(){
					if (resource == 'Post') {
						$parent.find('textarea.mce:visible').not('.mce-activated').each(function(){
							prepareMCE($(this));
						});
						$tab.addClass('focus-on-item');
					} else if (resource == 'Block') {
						if (id == '0') {
							$parent.find('select.type').on('change', function(){
								$parent.find('input.title').val($(this).find('option:selected').text());
							});
						}
						$parent.find('select, input[type="radio"]:checked').change();
					}
					$parent.addClass('open');
				});
				$form.tooltip({selector: '.label-tooltip'});
			},
			error: function(r) {
				console.warn(r.responseText);
			}
		});
	}).on('click', '.tab-trigger', function(e){
		e.preventDefault();
		$('.tab-trigger, .post-tab').removeClass('current');
		$(this).addClass('current');
		$($(this).attr('href')).addClass('current');
	}).on('click', '.horizontal-tab', function(e){
		e.preventDefault();
		$(this).addClass('active').siblings().removeClass('active');
		$($(this).attr('href')).addClass('active').siblings().removeClass('active');
	}).on('click', '.activate', function(e){
		e.preventDefault();
		$checkbox = $(this).find('input[type="checkbox"]');
		$checkbox.prop('checked', !$checkbox.prop('checked')).change();
		if ($(this).closest('.item').attr('data-id') == 0)
			$(this).toggleClass('action-enabled action-disabled');
	}).on('change', '.toggleable_param', function(e){
		var resource = $(this).closest('.tab-content').data('resource');
		var $parent = $(this).closest('.item');
		var id = $parent.data('id');
		if (blockAjax || id == 0)
			return;
		var param_name = $(this).attr('name');
		var param_value = $(this).prop('checked') ? 1 : 0;
		$.ajax({
			type: 'POST',
			url: ajax_action_path+'&action=ToggleParam&resource='+resource+'&param_name='+param_name+'&param_value='+param_value+'&id='+id,
			dataType : 'json',
			success: function(r) {
				if(r.success) {
					$.growl.notice({ title: '', message: savedTxt});
					if (param_name == 'active') {
						$parent.find('.activate').toggleClass('action-enabled action-disabled');
					}
				} else {
					$.growl.error({title: '', message: failedTxt});
				}

			},
			error: function(r) {
				console.warn(r.responseText);
			}
		});
	}).on('click', '.approve-comment, .show-comment, .hide-comment', function(e){
		var $form = $(this).closest('form')
		var id = $form.find('input[name="id_comment"]').val();
		var param_name = $(this).hasClass('approve-comment') ? 'approved_by' : 'active';
		var param_value = $(this).hasClass('approve-comment') ? 0 : ($(this).hasClass('show-comment') ? 1 : 0);
		$.ajax({
			type: 'POST',
			url: ajax_action_path+'&action=ToggleParam&resource=comment&param_name='+param_name+'&param_value='+param_value+'&id='+id,
			dataType : 'json',
			success: function(r) {
				console.dir(r);
				if(r.success) {
					$.growl.notice({ title: '', message: savedTxt});
					$form.replaceWith(utf8_decode(r.updated_html));
					if (param_name == 'approved_by')
						updateCounter($('a[href="#comments"]').find('.badge'), '-1', true);
				} else {
					$.growl.error({title: '', message: failedTxt});
				}

			},
			error: function(r) {
				console.warn(r.responseText);
			}
		});
	}).on('click', '.edit-comment', function(e){
		var $form = $(this).closest('form'),
			id = $form.find('textarea').attr('id');
		$form.addClass('being-edited');
		tinymce.init({
			selector: '#'+id,
			plugins: 'bbcode paste emoticons',
			toolbar1: 'bold italic underline emoticons',
			menubar: false,
			statusbar: false,
			paste_as_text: true,
			forced_root_block: false,
		});
	}).on('click', '.save-comment', function(e){
		var $form = $(this).closest('form'),
			$textarea = $form.find('textarea');
		$textarea.val(tinymce.get($textarea.attr('id')).getContent());
		var formData = new FormData($form[0]);
		$form.find('.red-border').removeClass('red-border');
		$form.find('.ajax-error, .thrown-errors').remove();
		$.ajax({
			type: 'POST',
			url: ajax_action_path+'&action=EditComment',
			dataType : 'json',
			data: formData,
			contentType: false,
			processData: false,
			cache: false,
			success: function(r) {
				console.dir(r);
				if ('errors' in r){
					if (typeof r.errors === 'object'){
						for (var i in r.errors){
							$form.find('[name="'+i+'"]').parent().prepend('<div class="ajax-error">'+utf8_decode(r.errors[i])+'</div>').children('input, .mce-tinymce').addClass('red-border');
						}
					}
					else
						$form.prepend(utf8_decode(r.errors));
				}
				else if (r.updated_html){
					$form.replaceWith(utf8_decode(r.updated_html));
					$.growl.notice({ title: '', message: savedTxt});
				} else
					$.growl.error({title: '', message: failedTxt});
			},
			error: function(r) {
				console.warn(r.responseText);
			}
		});
	}).on('change', 'select[name="settings[type]"]', function(){
		var $form = $(this).closest('form'),
			type = $(this).val(),
			resourceType = type.split('_')[0];
		$form.find('.type-exc').removeClass('hidden');
		$form.find('.type-option, .resource-type-option').addClass('hidden');
		$form.find('.type-option.'+type+', .resource-type-option.'+resourceType).removeClass('hidden');
		$form.find('.type-exc.exc-'+type).addClass('hidden');
	}).on('change', 'select[name="settings[display_type]"], select[name="display_type"]', function(){
		$('.display-type-option').addClass('hidden');
		$('.display-type-option.'+$(this).val()).removeClass('hidden');
	}).on('change', '.has-additional-settings', function(){
		var name = $(this).attr('name').replace('settings[', '').replace(']', ''),
			value = $(this).val(),
			showSettings = !!$('.field-group.'+value).length;
		$('.field-group.related-to-'+name).addClass('hidden');
		$('.toggleSettings[data-settings="'+name+'"]').removeClass('active');
		$(this).closest('.field-value').toggleClass('show-settings', showSettings);
	}).on('click', '.toggleSettings', function(){
		$(this).toggleClass('active');
		var $settingsGroup = $('.field-group.'+$(this).siblings('select').val()),
			showSettings = $(this).hasClass('active');
		$settingsGroup.toggleClass('hidden', !showSettings);
	}).on('change', '.exceptions_page_type', function(){
		var val = $(this).val(),
			showIDs = val != '0' && val.indexOf('_all') < 0;
		$('.exc-option.page').toggleClass('hidden', !showIDs);
	}).on('change', '.exceptions_customer_type', function(){
		$('.exc-option.customer').toggleClass('hidden', $(this).val() == '0');
	}).on('click', '.go-to-page', function(){
		var resource = $(this).closest('.tab-content').data('resource'),
			p = $(this).data('page');
		ajaxLoadItems(resource, p);
	}).on('click', '.order-way-label', function(){
		if ($('.order-by').val() != 'position' || $(this).data('way') != 'DESC') {
			$('.order-way-label').toggleClass('active');
			$('input.order-way').val($('.order-way-label.active').data('way'));
			$('.order-by').change();
		}
	}).on('change', '.order-by', function(){
		var isPositionOption = $(this).val() == 'position';
		$(this).closest('.tab-content').toggleClass('show-sortable', isPositionOption);
		if (isPositionOption && $('input.order-way').val() == 'ASC') {
			$('.order-way[data-way="ASC"].active').click();
		} else {
			var resource = $(this).closest('.tab-content').data('resource');
			ajaxLoadItems(resource, 1);
		}
	}).on('change', 'select.npp, select.filter-by', function(){
		if ($(this).attr('name') == 'id_category'){
			$('.position-option').toggleClass('hidden', $(this).val() == '-');
			if ($('.position-option.hidden').is(':selected')) {
				$('.order-by').val('publish_from').change();
				return;
			}
		}
		var resource = $(this).closest('.tab-content').data('resource');
		ajaxLoadItems(resource, 1);
	}).on('click', '.post-author', function(){
		var id_author = $(this).data('author');
		$('select.filter-by.author').val(id_author).change();
	}).on('click', '.post-category', function(){
		var id_category = $(this).data('category');
		$('select.filter-by.category').val(id_category).change();
	}).on('click', '.post-comments', function(){
		var id_post = $(this).closest('.item').data('id');
		if ($('[name="id_post"]').find('option[value="'+id_post+'"]').length) {
			$('.list-group-item.user-comments').click();
			$('[name="id_post"]').val(id_post).change();
		}
	}).on('click', '.importData', function(e){
		$('input[name="zipped_data"]').click();
	}).on('change', 'input[name="zipped_data"]', function(e){
		if (blockAjax) {
			return false;
		}
		blockAjax = true;
		var fd = new FormData();
		if ($(this).prop('files').length) {
			fd.append($(this).attr('name'), $(this).prop('files')[0]);
		}

		var include_comments = $(this).closest('.import-block').find('[name="include_comments"]').prop('checked') ? 1 : 0,
			include_related_products = $(this).closest('.import-block').find('[name="include_related_products"]').prop('checked') ? 1 : 0;

		fd.append('action', 'ImportData');
		fd.append('include_comments', include_comments);
		fd.append('include_related_products', include_related_products);

		$('.tab-content#import .alert').remove();
		$('.progress-notification').removeClass('hidden');
		$.ajax({
			type: 'POST',
			url: ajax_action_path,
			dataType : 'json',
			processData: false,
			contentType: false,
			data: fd,
			success: function(r) {
				// console.dir(r);
				$('.progress-notification').addClass('hidden');
				if ('errors' in r) {
					$('.tab-content#import form').before(utf8_decode(r.errors));
				} else {
					$('.bootstrap.amazzingblog').replaceWith(utf8_decode(r.upd_html));
					$('.hookSelector').change();
					activateSortable();
				}
				blockAjax = false;
			},
			error: function(r) {
				console.warn($(r.responseText).text() || r.responseText);
				blockAjax = false;
				$('.progress-notification').addClass('hidden');
			}
		});
	}).on('click', '.toggleChildren', function(){
		var total = $(this).closest('.cat-level').toggleClass('closed').find('.cat-level').find('[name="cat_ids[]"]:checked').length;
		if (total > 0) {
			$(this).closest('.cat-item').find('.checked-num').removeClass('hidden').find('.dynamic-num').html(total);
		} else {
			$(this).closest('.cat-item').find('.checked-num').addClass('hidden').find('.dynamic-num').html('');
		}
	});

	$('.table.img-types').on('keydown', 'input.numeric', function(e){
		var code = e.keyCode;
		// allow: delete, backspace, tab, escape, enter, end, home, left, right
		if ($.inArray(code, [46,8,9,27,13,35,36,37,39]) !== -1) {
			return;
		}
		// Stop keypress if it is not number (48-57+shift, 96-105)
		if ((e.shiftKey || (code < 48 || code > 57)) && (code < 96 || code > 105)) {
			e.preventDefault();
		}
	}).on('keyup', 'input[type="text"]', function(){
		var changed = $(this).val() != $(this).data('initial');
		$(this).toggleClass('changed', changed);
		toggleSaveBtn($(this).closest('tr'));
	}).on('change', 'input[type="checkbox"]', function(){
		var changed = $(this).prop('checked') !== !!$(this).data('initial');
		$(this).toggleClass('changed', changed);
		toggleSaveBtn($(this).closest('tr'));
	}).on('click', '.saveImgType', function(){
		$('.thrown-errors').remove();
		var $tr = $(this).closest('tr'),
			params = {
				action: 'SaveImgType',
				values: {},
			},
			response = function(r) {
				if ('errors' in r) {
					$('.table.img-types').before(utf8_decode(r.errors));
				} else if ('field_errors' in r) {
					$.growl.error({title: '', message: failedTxt});
					for (var name in r.field_errors) {
						$tr.find('input[name="'+name+'"]').addClass('has-error');
					}
				} else {
					$tr.find('input').each(function(){
						if ($(this).attr('name') != 'id_img_type') {
							var initial = getInputValue($(this));
							$(this).removeClass('changed').removeClass('has-error').
							data('initial', initial).attr('data-initial', initial);
						}
					});
					toggleSaveBtn($tr);
					$.growl.notice({ title: '', message: savedTxt});
					if (!$tr.data('id')) {
						$tr.removeClass('new').data('id', r.id).attr('data-id', r.id);
						$tr.find('input[name="id_img_type"]').val(r.id);
						$tr.find('input[name="dir"]').addClass('readonly').attr('readonly', true);
					}
					updateImgTypeOptions();
				}
			};
		$tr.find('input').each(function(){
			params.values[$(this).attr('name')] = getInputValue($(this));
		});
		ajaxRequest(params, response);
	}).on('click', '.showDeleteWarning', function(){
		var $tr = $(this).closest('tr')
			name = $tr.find('input[name="name"]').val(),
			id = $tr.data('id');
		$('.img-delete-warning').removeClass('hidden').find('.deleteImgType').attr('data-id', id).find('.type-name').html(name);
	});

	function getInputValue($el) {
		return $el.attr('type') == 'checkbox' ? ($el.prop('checked') ? 1 : 0) : $el.val();
	}

	$('.img-delete-warning').on('click', '.hideDeleteWarning', function(){
		$('.img-delete-warning').addClass('hidden').find('.deleteImgType').attr('data-id', '0').find('.type-name').html('');
	}).on('click', '.deleteImgType', function(){
		if ($('.regenerateThumbnails').hasClass('blocked')) {
			alert('Please wait'); return;
		}
		var id = $(this).attr('data-id'),
			params = 'action=DeleteImgtype&id='+id,
			response = function(r) {
				if (r.deleted) {
					$('.table.img-types').find('tr[data-id="'+id+'"]').remove();
					updateImgTypeOptions();
					$('.hideDeleteWarning').click();
				}
			};
		ajaxRequest(params, response);
	});

	$('.addNewImgType').on('click', function(){
		var params = 'action=CallImgTypeRow',
			response = function(r) {
				if ('row_html' in r) {
					$(utf8_decode(r.row_html)).addClass('new').appendTo($('.table.img-types').find('tbody'));
				}
			};
		ajaxRequest(params, response);
	});

	function updateImgTypeOptions()
	{
		var $select = $('.img-type-actions').find('select[name="id"]'),
			optionsHTML = '';
		$('.table.img-types').find('tbody').find('tr').each(function(){
			var id = $(this).data('id'),
				name = $(this).find('input[name="name"]').val();
			optionsHTML += '<option value="'+id+'">'+name+'</option>';
		});
		$select.find('option').first().nextAll().remove();
		$select.append(optionsHTML);

	}

	function toggleSaveBtn($tr) {
		var showBtn = $tr.find('.changed').length;
		$tr.find('.saveImgType').toggleClass('hidden', !showBtn);
	}

	var forcedTab = getUrlParam('tab'),
		forcedHook = getUrlParam('hook');
	if (forcedTab) {
		$('.list-group-item[href="#'+forcedTab).click();
	}
	if (forcedHook) {
		$('.hookSelector').val(forcedHook);
	}

	$('.hookSelector, select[name="display_type"]').change();

	function fillInlineCategoryNames(){
		var defaultName = '',
			otherNames = '';
		$('.cat-item').each(function(i){
			if ($(this).find('[name="cat_ids[]"]').prop('checked')) {
				var name = $(this).find('.cat-name').text();
				if ($(this).hasClass('is-default')) {
					defaultName = name;
				} else {
					otherNames += ', '+name;
				}
			}
		});
		$('.default-cat-name').html(defaultName);
		$('.other-cat-names').html(otherNames);
	}

	var selectedBars = [],
		resourceIds = [],
		totalResources = 0;

	$('.regenerateThumbnails').on('click', function(){
		if ($(this).hasClass('blocked')) {
			alert('Please wait'); return;
		}
		if ($('.saveImgType').not('.hidden').length) {
			var unsavedSizes = [];
			$('.saveImgType').not('.hidden').each(function(){
				unsavedSizes.push('"'+$(this).closest('tr').find('input[name="name"]').val()+'"');
			})
			alert('Please, save the following sizes: '+unsavedSizes.join(', ')); return;
		}
		selectedBars = [];
		var id = $('select[name="id"]').val(),
			scope = $('select[name="scope"]').val();
		$('.table.img-types').find('tr').each(function(){
			if (id == '0' || $(this).data('id') == id) {
				$(this).find('input[type="checkbox"]:checked').each(function(){
					if (scope == '0' || $(this).attr('name') == scope) {
						selectedBars.push($(this).prev());
						$(this).addClass('hidden').prev().removeClass('hidden');
					}
				})
			}
		});
		if (selectedBars.length) {
			$(this).addClass('blocked');
			regenerateThumbnails(selectedBars.shift(), 0);
		}
	});

	function regenerateThumbnails($bar, idResource) {
		var id_img_type = $bar.closest('tr').data('id'),
			scope = $bar.next().attr('name'),
			w = totalResources ? Math.round(100 - (resourceIds.length/totalResources) * 100) : 0,
			params = 'action=RegenerateThumbnails&id_img_type='+id_img_type+'&resource_type='+scope+'&id_resource='+idResource,
			response = function(r) {
				if (!idResource && 'resource_ids' in r) {
					resourceIds = r.resource_ids;
					totalResources = resourceIds.length;
				}
				if (resourceIds.length) {
					regenerateThumbnails($bar, resourceIds.shift());
				} else {
					totalResources = 0;
					if (selectedBars.length) {
						regenerateThumbnails(selectedBars.shift(), 0);
					} else {
						$('.regenerateThumbnails').removeClass('blocked');
						$('.table.img-types').find('.progress').addClass('hidden').next().removeClass('hidden');
						$.growl.notice({ title: '', message: savedTxt});
						$bar.find('.progress-bar').css('width', '0%').attr('aria-valuenow', '0');
					}
				}
			};
		$bar.find('.progress-bar').css('width', w+'%').attr('aria-valuenow', w);
		ajaxRequest(params, response);
	}

	toggleCaptchaOptions();
	$('input[name="captcha"]').on('change', function(){
		toggleCaptchaOptions();
	});
	function toggleCaptchaOptions() {
		$('.captcha-option').toggleClass('hidden', !$('#captcha_comment').prop('checked'));
	}
});

function getUrlParam(name) {
	return (location.search.split(name+'=')[1] || '').split('&')[0];
}

function updateCounter($badge, modifier, hideZero) {
	var total = parseInt($badge.text()) + parseInt(modifier);
	$badge.html(total);
	if (hideZero && !total)
		$badge.addClass('hidden');
};

function ajaxRequest(params, response){
	$.ajax({
		type: 'POST',
		url: ajax_action_path,
		data: params,
		dataType : 'json',
		success: function(r) {
			console.dir(r);
			response(r);
		},
		error: function(r) {
			console.warn($(r.responseText).text() || r.responseText);
		}
	});
}

function ajaxLoadItems(resource, p) {
	resource = resource.toLowerCase();
	var $currentPageSpan = $('#'+resource+'s span.current-page');
	var p = typeof p !== 'undefined' ? p : $currentPageSpan.length ? $currentPageSpan.data('page') : 1;
	$('#'+resource+'s .list').addClass('loading');
	var data = {
		action: 'DisplayListItems',
		resource: resource,
		p: p,
		npp: $('#'+resource+'s .npp').val(),
		filters: $('#'+resource+'s').find('form.filtering').serialize(),
	};
	if (resource == 'post'){
		data.order_by = $('.order-by').val();
		data.order_way = $('.order-way').val();
	}
	$.ajax({
		type: 'POST',
		url: ajax_action_path,
		data: data,
		dataType : 'json',
		success: function(r)
		{
			console.dir(r);
			if ('items_html' in r && 'pagination_html' in r){
				$('#'+resource+'s .list').html(utf8_decode(r.items_html)).removeClass('loading');
				$('#'+resource+'s .pagination').replaceWith(utf8_decode(r.pagination_html));
				$('#'+resource+'s .badge.total').html(r.total);
				// TODO: optimize id_category param sending and processing
				if (resource == 'post' && $('select.filter_by[name="id_category"]').val() != '-')
					activateSortable();
			}
		},
		error: function(r)
		{
			console.warn(r.responseText);
		}
	});
}

function activateDatePicker(){
	$('.datepicker').datetimepicker({
		dateFormat: 'yy-mm-dd',
		timeFormat: 'hh:mm:00'
	});
}

function activateTagify(){
	$('.tagify').tagify({
		delimiters: [13, 44],
	});
}

function activateSortable(){
	$('#posts .list').sortable({
		placeholder: 'new-position-placeholder',
		handle: '.dragger.ready',
		start: function(e, ui) {
			ui.item.startIndex = ui.item.index();
			$('.dragger').removeClass('ready');
		},
		stop: function(e, ui) {
			if (ui.item.startIndex == ui.item.index())
				$('.dragger').addClass('ready');
		},
		update: function(event, ui) {
			var data = {
				id_post : ui.item.closest('.item').data('id'),
				id_cat : $('select.cat-selector').val(),
				new_position : ui.item.index() + 1,
				p: $('span.current-page').length ? $('span.current-page').data('page') : 1,
				npp : $('.npp').val(),
				order_way: $('.order-way.active').data('way'),
			};
			$.ajax({
				type: 'POST',
				url: ajax_action_path+'&action=UpdatePostPositions',
				dataType : 'json',
				data: data,
				success: function(r)
				{
					// console.dir(r);
					if(r.saved)
						$.growl.notice({ title: '', message: savedTxt});
					else
						$.growl.error({title: '', message: failedTxt});
					$('.dragger').addClass('ready');
				},
				error: function(r)
				{
					console.warn(r.responseText);
					$('.dragger').addClass('ready');
				}
			});
		}
	});
}

$(window).load(function(){
	if ($(window).width() < 1281 && !$('body').hasClass('page-sidebar-closed')) {
		$('#nav-sidebar').find('.menu-collapse').click();
	}
});

function prepareMCE($el)
{
	// if there is # in URL, page scrolls to top after activating MCE
	if (window.location.href.indexOf('#') >= 0) {
		window.history.pushState(null, null, window.location.href.split('#')[0]);
	}
	var toolbar = ',code,|,formatselect,|,bold,italic,underline,strikethrough,|,bullist,numlist,|';
	toolbar += ',alignleft,aligncenter,alignright,alignjustify,|,media,|,link,unlink,';
	tinymce.init({
	    selector: '#'+$el.attr('id'),
		content_css: mce_additional_css_files,
		autoresize_max_height: 350,
		convert_urls: false,
		auto_focus: false,
		paste_as_text: true,
		plugins : 'link lists paste pagebreak table code autoresize media',
		browser_spellcheck : true,
		toolbar1: toolbar,
		block_formats: [
    		'Paragraph=p',
    		'Header 1=h1',
    		'Header 2=h2',
    		'Header 3=h3',
    		'Header 4=h4',
    		'Preformatted=pre',
    		'Quote=blockquote',
    		'Code=code',
    	].join(';'),
		formats: {
    		alignleft: {selector: 'img', classes : 'ab-image-left'},
    		alignright: {selector: 'img', classes : 'ab-image-right'},
    		aligncenter: {selector: 'img', classes : 'ab-image-center'},
    	},
    	paste_postprocess: function(plugin, args) {
            args.node.innerHTML = args.node.innerHTML.replace(/&nbsp;/g, ' '); // remove &nbsp
        },
		setup: function(editor) {
			editor.on('loadContent', function (e) {
				$el.addClass('mce-activated');
			});
		},
	});
	// temporary fix for editing mce source code in modal popup
	if ($el.closest('.modal-dialog').length) {
		$(document).off('focusin').on('focusin', function(e) {
			if ($(e.target).closest('.mce-window').length) {
				e.stopImmediatePropagation();
			}
		});
	}
}

function selectLanguage($el, id){
	$el.closest('.details').find('.multilang').addClass('hidden');
	$el.closest('.details').find('.multilang.lang-'+id).removeClass('hidden')
	.find('textarea.mce:visible').not('.mce-activated').each(function(){
		prepareMCE($(this));
	});
}

function onClickOutSide($el, action) {
	$(document).off('click.outside').on('click.outside', function(e) {
		if (!$el.is(e.target) && $el.has(e.target).length === 0) {
			action();
			$(document).off('click.outside');
		}
	});
}

function onClickAnywhere(action) {
	$(document).off('click.anywhere').on('click.anywhere', function(e) {
		action();
		$(document).off('click.anywhere');
	});
}

function utf8_decode (utfstr) {
	var res = '';
	for (var i = 0; i < utfstr.length;) {
		var c = utfstr.charCodeAt(i);
		if (c < 128) {
			res += String.fromCharCode(c);
			i++;
		} else if((c > 191) && (c < 224)) {
			var c1 = utfstr.charCodeAt(i+1);
			res += String.fromCharCode(((c & 31) << 6) | (c1 & 63));
			i += 2;
		} else {
			var c1 = utfstr.charCodeAt(i+1);
			var c2 = utfstr.charCodeAt(i+2);
			res += String.fromCharCode(((c & 15) << 12) | ((c1 & 63) << 6) | (c2 & 63));
			i += 3;
		}
	}
	return res;
}
/* since 1.5.0 */
