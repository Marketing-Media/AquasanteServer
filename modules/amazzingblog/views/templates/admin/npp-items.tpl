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
	.npp-selected-option {
		background: #f6f8f9;
	    border: 1px solid #c7d6db;
	    border-radius: 4px;
	    padding: 6px;
	    cursor: pointer;
	}
	.npp-selected-option .icon-caret-down {
		color: #555;
	}
	.available-npp-options {
		border: 1px solid #c7d6db;
	    border-radius: 4px;
	    position: absolute;
	    z-index: 100;
	    background: #FFF;
	    left: 0px;
	    right: 0;
	    overflow: hidden;
	}
	.npp-option {
		padding: 5px 10px;
		cursor: pointer;
	}
	.npp-option:hover {
		background: #FAFAFA;
	}
	.npp-option.selected {
		background: #E9F9EA;
	}
	.npp-option .icon-trash {
		color: #DDD;
	}
	.npp-option .icon-check,
	.npp-option.selected .removeNppOption {
		display: none;
	}
	.npp-option.selected .icon-check {
		display: inline-block;
		color: #72C279;
	}
	.available-npp-options-footer {
		padding: 5px 40px 5px 5px;
		position: relative;
	}
	.addNppOption {
		position: absolute;
		right: 5px;
		top: 5px;
	}
</style>
{/literal}
<div class="npp-items">
	<div class="npp-selected-option"><span class="value">{$field.value|intval}</span><a href="#" class="icon-caret-down pull-right"></a></div>
	<div class="available-npp-options hidden">
		<div class="available-npp-options-footer text-right">
			<input type="text" class="new-npp-value" placeholder="{l s='new option' mod='amazzingblog'}"></input>
			<button type="button" class="btn btn-default addNppOption inline-block"><i class="icon-plus"></i></button>
		</div>
	</div>
	<input type="hidden" name="npp" value="{$field.value|intval}">
</div>
{literal}
<script type="text/javascript">
	$(document).ready(function(){
		var $nppInput = $('.npp-items').find('input[name="npp"]'),
			$nppOptionsInput = $('.npp-items').closest('form').find('input[name="npp_options"]');
		// build available options dynamically
		$.each($nppOptionsInput.val().split(','), function(i, number){
			var selected = number == $nppInput.val();
			$('.available-npp-options-footer').before(renderNppOption(number, selected));
		});

		function renderNppOption(number, selected) {
			var html = '<div class="npp-option'+(selected ? ' selected' : '')+'">'+number;
			html += '<span class="pull-right"><i class="icon-check"></i>';
			html += '<a href="#" class="icon-trash removeNppOption"></a>';
			html += '</span></div>';
			return html;
		}

		function updateNppOptionsInput() {
			var nppOptions = [];
			$('.available-npp-options').find('.npp-option').each(function(){
				var number = parseInt($(this).html()) || 0;
				nppOptions.push(number);
			});
			$nppOptionsInput.val(nppOptions.join(','));
		}

		$('.npp-items').on('click', '.npp-selected-option', function(e){
			var $options = $('.available-npp-options');
			$options.toggleClass('hidden');
			if (!$options.hasClass('hidden')) {
				onClickOutSide($options, function() {$options.addClass('hidden')});
				e.stopPropagation();
			}
		}).on('click', '.npp-option', function(){
			$(this).addClass('selected').siblings().removeClass('selected');
			$('.npp-items').click();
			var npp = parseInt($(this).html());
			$('.npp-selected-option').find('.value').html(npp);
			$nppInput.val(npp);
		}).on('click', '.removeNppOption', function(e){
			e.preventDefault();
			e.stopPropagation();
			if (confirm(areYouSureTxt)) {
				$(this).closest('.npp-option').remove();
				updateNppOptionsInput();
			}
		}).on('keydown', 'input.new-npp-value', function(e){
			if (e.keyCode == 13) {
				$('.addNppOption').click();
				e.preventDefault();
				e.stopPropagation();
				return;
			}
		}).on('click', '.addNppOption', function(){
			var $input = $(this).prev(),
				newNppNumber = parseInt($input.val()) || 0,
				optionHTML = renderNppOption(newNppNumber, false);
			if (newNppNumber > 0) {
				var positioned = false;
				$('.available-npp-options').find('.npp-option').each(function(){
					var number = parseInt($(this).html()) || 0;
					if (newNppNumber == number) {
						positioned = true;
					}
					if (!positioned && number > newNppNumber) {
						$(this).before(optionHTML);
						positioned = true;
					}
				});
				if (!positioned) {
					$('.available-npp-options-footer').before(optionHTML);
				}
				updateNppOptionsInput();
			}
			$input.val('');
		});
	});
</script>
{/literal}
{* since 1.5.0 *}
