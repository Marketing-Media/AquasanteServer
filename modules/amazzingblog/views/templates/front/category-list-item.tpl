{**
*
* @author    Amazzing <mail@amazzing.ru>
* @copyright 2007-2018 Amazzing
* @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*
* NOTE: this file is extendable. You can override only selected blocks in your template.
* Path for extending: 'modules/amazzingblog/views/templates/hook/category-list-item.tpl'
*
**}

{block name='category_item'}
	<div class="category-item{if !empty($item.class)} {$item.class|escape:'html':'UTF-8'}{/if}">
	{if !empty($item.url)}<a href="{$item.url|escape:'html':'UTF-8'}">{/if}
		{if !empty($item.img_src)}<img class="cat-img" src="{$item.img_src|escape:'html':'UTF-8'}">{/if}
		<span class="inline-block">
			<span class="category-title inline-block">{$item.title|escape:'html':'UTF-8'}</span>
			{if isset($item.posts_num)}
				<br><span class="posts-num inline-block">{l s='%d posts' mod='amazzingblog' sprintf=[$cat.posts_num]}</span>
			{/if}
		</span>
	{if !empty($item.url)}</a>{/if}
	</div>
{/block}
{* since 1.5.0 *}
