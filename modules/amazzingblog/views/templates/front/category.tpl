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
*}

{$category = $ab_category}
<div class="amazzingblog category-page">
{if $category && $category.active}
	{if !$blog->is_17}{include file = $blog->getTemplatePath('breadcrumbs.tpl') parents = $ab_cat_parents current_item = $category.title}{/if}
	<h2>{$category.title|escape:'html':'UTF-8'}</h2>
	{if !empty($ab_category_settings.main_img)}
		{$main_src = $blog->getImgSrc('category', $category.id_category, $ab_category_settings.main_img, $category.main_img)}
		{if !empty($main_src)}
			<div class="category-main-image"><img src="{$main_src|escape:'html':'UTF-8'}"></div>
		{/if}
	{/if}
	{if !empty($category.description)}
		<div class="category-description">
			{$category.description nofilter} {* can not be escaped *}
		</div>
	{/if}
	{if !empty($ab_subcategories)}
		<div class="blog-subcategories">
		{$item_tpl_path = $blog->getListItemTplPath('category')}
		{foreach $ab_subcategories as $cat}
			{$cat.class = 'blog-subcategory'}
			{$cat.img_src = $blog->getImgSrc('category', $cat.id_category, $ab_category_settings.subcat_cover, $cat.cover)}
			{include file = $item_tpl_path item = $cat}
		{/foreach}
		</div>
	{/if}
	{if $ab_posts}
		<div class="dynamic-posts">
			{include file = $blog->getTemplatePath('post-list.tpl') posts = $ab_posts settings = $ab_post_list_settings}
		</div>
	{/if}
	<form action="" class="additional-filters hidden">
		{foreach $ab_additional_filters as $name => $value}
			{if $name == 'active'}{continue}{/if}{* no need for this filter here *}
			<input type="hidden" name="{$name|escape:'html':'UTF-8'}" value="{implode(',', $value)|escape:'html':'UTF-8'}">
		{/foreach}
	</form>
{/if}
</div>
{* since 1.5.0 *}
