{*
* 2007-2018 Amazzing
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
*
*  @author    Amazzing <mail@amazzing.ru>
*  @copyright 2007-2018 Amazzing
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*
*}

{literal}
<style type="text/css">
	.available-images {
		margin-bottom: -5px;
	}
	.img-list {
		margin: 0 -5px;
	}
	.img-set {
		position: relative;
		float: left;
		padding: 5px;
		text-align: center;
		width: 10%;
	}
	.modal-lg .img-set {
		width: 14.25%;
	}
	@media (max-width: 1280px) {
		.img-set{
			width: 14.25%;
		}
	}
	.img-holder {
		border: 1px solid #DDD;
		padding: 3px;
	}
	.img-wrapper {
		position: relative;
		padding-top: 100%;
		background-position: 50% 50%;
		background-size: cover;
		font-size: 0;
		height: 0;
	}
	.img-set .img-types {
		position: absolute;
		left: 5px;
		right: 5px;
		bottom: 5px;
	}
	.img-types .available-types {
		position: absolute;
		margin-top: 5px;
	    z-index: 999;
	    background: #FFF;
	    min-width: 100%;
	    border: 1px solid #00AFF0;
	    white-space: nowrap;
	    display: none;
	}
	.show-types .img-types .available-types {
		display: block;
	}
	.img-set .showImgTypes {
		display: block;
		padding-bottom: 1px;
		border: 1px solid #DDD;
		background: #FFF;
	}
	.img-set:hover .showImgTypes,
	.img-set.show-types .showImgTypes {
		border: 1px solid #00AFF0;
		background: #00AFF0;
		color: #FFF;
	}
	.img-set a.img-type {
		display: block;
	    padding: 2px 0;
	    color: #777;
	}
	.img-set a.img-type.odd {
		background: #F5F5F5;
	}
	.img-set a.img-type:hover {
		color: #00AFF0;
	}

	/* image actions */
	.add-new .img-holder {
		border-style: dashed;
		border-width: 2px;
	}
	.img-holder.ondragover {
		border-color: #71B238;
	}
	.add-img {
		font: bold 35px/1 arial;
		position: absolute;
		top: 50%;
		margin-top: -17px;
		left: 0;
		right: 0;
		display: block;
	}
	.img-actions {
		position: absolute;
		right: 0;
		top: 2px;
		text-align: center;
		text-transform: lowercase;
	}
	.img-actions  .act {
		color: #CCC;
		border: 1px solid #DDD;
		background: #FFF;
		position: relative;
		display: block;
		padding: 0 3px;
		opacity: 0;
		z-index: 998;
		margin-bottom: 3px;
	}
	.cover .act.set-cover, .cover .act.set-cover:hover,
	.main_img .act.set-main, .main_img .act.set-main:hover {
		opacity: 1;
		color: #00AFF0;
		border-color: #00AFF0;
	}
	.cover .img-holder, .main_img .img-holder,
	.cover .showImgTypes, .main_img .showImgTypes {
		border-color: #00AFF0;
	}
	.img-holder:hover .img-actions .act {
		opacity: 1;
	}
	.upload-progress .spinner {
		font-size: 21px;
		top: 50%;
		position: absolute;
		margin-top: -11px;
		left: 0;
		right: 0;
	}
</style>
{/literal}

{$cover = basename($cover)}
{$main_img = basename($main_img)}
<div class="available-images clearfix" data-resource="{$resource_type|escape:'html':'UTF-8'}" data-id="{$resource_id|intval}">
	<div class="img-list">
		{foreach $images as $img}
			{$basename = basename($img)}
			{$basepath = dirname($img)}
			<div class="img-set{if $basename == $cover} cover{/if}{if $basename == $main_img} main_img{/if}" data-img="{$basename|escape:'html':'UTF-8'}">
				<div class="img-holder">
					<div class="img-actions">
						{if !empty($image_types)}
							<a href="#" class="set-cover act">{l s='Cover' mod='amazzingblog'}</a>
							<a href="#" class="set-main act">{l s='Main' mod='amazzingblog'}</a>
						{/if}
						<a href="#" class="delete-img act">{l s='Delete' mod='amazzingblog'}</a>
					</div>
					{$size = $blog->getClosestSize(100, 100, $resource_type)}
					<div class="img-wrapper" style="background-image:url('{$blog->getImgSrc($resource_type, $resource_id, $size, $basename)|escape:'html':'UTF-8'}')"></div>
				</div>
				<div class="img-types">
					<a href="#" class="showImgTypes">{l s='Add to text' mod='amazzingblog'}</a>
					<div class="available-types">
						<div class="caret-t blue"></div>
						{foreach $image_types as $i => $t}
							<a href="#" data-src="{$basepath|escape:'html':'UTF-8'}/{$t.dir|escape:'html':'UTF-8'}/{$basename|escape:'html':'UTF-8'}" class="img-type addImgToText{if $i is odd} odd{/if}">
								{$t.width|escape:'html':'UTF-8'}*{$t.height|escape:'html':'UTF-8'} px
							</a>
						{/foreach}
						<a href="#" data-src="{$img|escape:'html':'UTF-8'}" class="img-type addImgToText{if $i is not odd} odd{/if}">
							{l s='Original' mod='amazzingblog'}
						</a>
					</div>
				</div>
			</div>
		{/foreach}
		<div class="img-set add-new">
			<div class="hidden">
				<div class="img-set upload-progress"><div class="img-holder"><div class="img-wrapper"><i class="icon-refresh icon-spin act spinner"></i></div></div></div>
				<input type="file" class="available-img" multiple>
			</div>
			<div class="img-holder">
				<div class="img-wrapper"><a href="#" class="add-img act" title="{l s='Browse or drag' mod='amazzingblog'}">+</a></div>
			</div>
		</div>
	</div>
</div>

{literal}
<script type="text/javascript">
	$('.available-images').on('click', '.add-img', function(){
		$(this).closest('.img-set').find('.available-img').removeProp('dropped_files').click();
	}).on('dragover', '.add-img', function(e){
		e.preventDefault();
		e.stopPropagation();
		$(this).closest('.img-holder').addClass('ondragover');
	}).on('dragend dragleave', '.add-img', function(e){
		$(this).closest('.img-holder').removeClass('ondragover');
	}).on('drop', '.add-img', function(e){
		e.preventDefault();
		// most browsers dont support modifying prop('files'), so we create an additional prop 'dropped_files'
		$(this).closest('.img-set').find('.available-img').prop('dropped_files', e.originalEvent.dataTransfer.files).change();
		$(this).closest('.img-holder').removeClass('ondragover');
	}).on('change', 'input.available-img', function(){
		var files = ('dropped_files' in this) ? this.dropped_files : this.files,
			fd = new FormData(),
			$addBtn = $(this).closest('.img-set'),
			$parent = $addBtn.closest('.available-images'),
			$imgList = $parent.find('.img-list');
		fd.append('resource_type', $parent.data('resource'));
		fd.append('resource_id', $parent.data('id'));
		for (var i in files) {
			if (/^image/.test(files[i].type)) {
				$(this).prev().clone().insertBefore($addBtn);
				fd.append('image_'+i, files[i]);
			}
		}
		$.ajax({
			type: 'POST',
			url: ajax_action_path+'&action=UploadImages',
			dataType : 'json',
			processData: false,
			contentType: false,
			data: fd,
			success: function(r) {
				// console.dir(r);
				$imgList.find('.upload-progress:visible').remove();
				if ('saved_images_html' in r) {
					var $newHTML = $(utf8_decode(r.saved_images_html));
					$($newHTML.find('.add-new').prevAll().get().reverse()).each(function(){
						$addBtn.before($(this));
					});
				}
			},
			error: function(r) {
				console.warn(r.responseText);
			}
		});
	}).on('click', '.set-cover, .set-main, .delete-img', function(){
		var $imgSet = $(this).closest('.img-set'),
			$parent = $imgSet.closest('.available-images'),
			action = $(this).hasClass('delete-img') ? 'DeleteImg' : 'SetImg',
			special_type = $(this).hasClass('set-main') ? 'main_img' : 'cover',
			img_name = (action == 'DeleteImg' || !$imgSet.hasClass(special_type)) ? $imgSet.data('img') : '',
			resource_type = $parent.data('resource'),
			resource_id = $parent.data('id'),
			params = 'action='+action+'&img_name='+img_name+'&resource_type='+resource_type+
			'&resource_id='+resource_id+(action != 'DeleteImg' ? '&img_type='+special_type : ''),
			response = function(r) {
				if (r.success){
					$.growl.notice({title: '', message: savedTxt});
					for (var i in specialTypes)
						if (specialTypes[i] in r) {
							var img_type = specialTypes[i],
								img = r[img_type];
							$imgSet.parent().children().removeClass(img_type);
							$('.img-set[data-img="'+img+'"]').addClass(img_type);
						}
					if (action == 'DeleteImg') {
						$imgSet.remove();
					}
				} else if ('errors' in r){
					$imgSet.closest('.available-images').before(utf8_decode(r.errors));
				} else {
					$.growl.error({title: '', message: failedTxt});
				};
			};
		if (action != 'DeleteImg' || confirm(areYouSureTxt)) {
			ajaxRequest(params, response);
		}
	}).on('click', '.showImgTypes', function(e){
		var $imgSet = $(this).closest('.img-set');
		$imgSet.toggleClass('show-types').siblings('.img-set').removeClass('show-types');
		if ($imgSet.hasClass('show-types')) {
			onClickAnywhere(function(){$imgSet.removeClass('show-types')});
			e.stopPropagation();
		}
	}).on('click', '.addImgToText', function(){
		var html = '<img src="'+$(this).data('src')+'" class="ab-image-left">';
		tinymce.activeEditor.execCommand('mceInsertContent', false, html);
	});
</script>
{/literal}
{* since 1.5.0 *}
