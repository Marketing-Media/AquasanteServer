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

<div class="category-form details tab-content clearfix" data-resource="Category">
	<form method="post" action="" class="form-horizontal">
		{if $category.id_category == $root_id}
			<div class="alert alert-info col-lg-offset-2">
				{l s='NOTE: [1]Title[/1], [1]friendly-url[/1] and [1]meta fields[/1] of this category are used for main blog page' mod='amazzingblog' tags=['<u>']}
			</div>
		{/if}
		<input type="hidden" name="id_category" value="{$category.id_category|intval}">
		{foreach $category.editable_fields as $k => $field}
			{if $category.id_category == $root_id && ($k == 'active' || $k == 'id_parent') ||
			(!$category.id_category && $k == 'images')}{continue}{/if}
			{if $k == 'meta_title'}
				<a href="#" class="toggleMetaFields">
					<span class="show-fields">{l s='Show meta fields (SEO)' mod='amazzingblog'} <i class="icon-angle-down"></i></span>
					<span class="hide-fields hidden">{l s='Hide meta fields' mod='amazzingblog'} <i class="icon-angle-up"></i></span>
				</a>
			{/if}
			<div class="form-group {if !empty($field.class)}{$field.class|escape:'html':'UTF-8'}{/if}">
				<label class="control-label col-lg-2">
					<span{if !empty($field.tooltip)} class="label-tooltip" data-toggle="tooltip" title="{$field.tooltip|escape:'html':'UTF-8'}"{/if}>
						{$field.display_name|escape:'html':'UTF-8'}
					</span>
					{if $field.class|strstr:'autofill'}
						<a href="#" class="icon-repeat act generateFieldValue" title="{l s='Generate' mod='amazzingblog'}" data-name="{$k|escape:'html':'UTF-8'}"></a>
					{/if}
				</label>
				<div class="col-lg-10">
				{if $k == 'id_parent'}
					{include file="./category-tree.tpl" type = 'select' name = 'id_parent' checked = $field.value}
				{else if $k == 'images'}
					{include file="./available-images.tpl"
						images=$field.value
						cover=$category.cover
						main_img=$category.main_img
						resource_id=$category.id_category
						resource_type='category'
					}
				{else if empty($field.multilang)}
					{include file="./field.tpl" field=$field k=$k}
				{else}
					{include file="./multilang-field.tpl" field=$field k=$k}
				{/if}
				</div>
			</div>
		{/foreach}
		<div class="col-lg-offset-2">
			<button class="btn btn-default save"><i class="icon-save"></i> {l s='Save' mod='amazzingblog'}</button>
		</div>
	</form>
</div>
{* since 1.5.0 *}
