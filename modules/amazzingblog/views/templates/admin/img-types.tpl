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

<div class="alert alert-warning img-delete-warning hidden">
	{l s='WARNING: This action will erase existing thumbnails' mod='amazzingblog'}.
	{l s='It can not be undone' mod='amazzingblog'}.
	<button type="button" class="btn btn-default deleteImgType" data-id="">
		<i class="icon-trash"></i> {l s='Delete "[1][/1]" thumbnails' mod='amazzingblog' tags=['<span class="type-name">']}
	</button>
	<button type="button" class="btn btn-default hideDeleteWarning"><i class="icon-times"></i> {l s='Cancel' mod='amazzingblog'}</button>
</div>
<table class="table img-types">
	<thead>
		<tr>
			<th class="first">{l s='Descriptive name' mod='amazzingblog'}</th>
			<th>
				{l s='Folder name' mod='amazzingblog'}
				<i class="icon-info-circle label-tooltip" data-toggle="tooltip" title="
				{l s='Name of directory that is used for saving thumbnails' mod='amazzingblog'}
				({l s='can not be changed' mod='amazzingblog'})"></i>
			</th>
			<th>{l s='Width (px)' mod='amazzingblog'}</th>
			<th>{l s='Height (px)' mod='amazzingblog'}</th>
			<th class="scope">{l s='Posts' mod='amazzingblog'}</th>
			<th class="scope">{l s='Categories' mod='amazzingblog'}</th>
			<th class="last"> </th>
		</tr>
	</thead>
	<tbody>
	<!-- rows -->
	{foreach $img_types as $t}
		<tr data-id="{$t.id_img_type|intval}">
			<td class="first">
				<input type="hidden" name="id_img_type" value="{$t.id_img_type|intval}">
				<input type="text" name="name" data-initial="{$t.name|escape:'html':'UTF-8'}" value="{$t.name|escape:'html':'UTF-8'}">
			</td>
			<td><input type="text" name="dir" value="{$t.dir|escape:'html':'UTF-8'}"{if $t.dir} class="readonly" readonly{/if}></td>
			{* don't use intval for width/height because new rows should have empty values *}
			<td><input type="text" name="width" class="numeric" data-initial="{$t.width|escape:'html':'UTF-8'}" value="{$t.width|escape:'html':'UTF-8'}"></td>
			<td><input type="text" name="height" class="numeric" data-initial="{$t.height|escape:'html':'UTF-8'}" value="{$t.height|escape:'html':'UTF-8'}"></td>
			<td>
				<div class="progress hidden"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0"
				aria-valuemin="0" aria-valuemax="100" style="width:0%"></div></div>
				<input type="checkbox" name="post" data-initial="{$t.post|intval}"{if !empty($t.post)} checked{/if}>
			</td>
			<td>
				<div class="progress hidden"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0"
				aria-valuemin="0" aria-valuemax="100" style="width:0%"></div></div>
				<input type="checkbox" name="category" data-initial="{$t.category|intval}"{if !empty($t.category)} checked{/if}>
			</td>
			<td class="last">
				<button type="button" class="btn btn-primary saveImgType hidden" title="{l s='Save' mod='amazzingblog'}"><i class="icon-save"></i></button>
				<button type="button" class="btn btn-default showDeleteWarning" title="{l s='Delete' mod='amazzingblog'}"><i class="icon-trash"></i></button>
			</td>
		</tr>
	{/foreach}
	<!-- /rows -->
	</tbody>
</table>
<div class="img-type-actions">
	<button class="btn btn-primary pull-left addNewImgType"><i class="icon-plus"></i> {l s='Add new thumbnail size' mod='amazzingblog'}</button>
	<div class="pull-right clearfix">
		<div class="inline-block">
			<select name="id" class="inline-block">
				<option value="0">{l s='All sizes' mod='amazzingblog'}</option>
				{foreach $img_types as $t}<option value="{$t.id_img_type|escape:'html':'UTF-8'}">{$t.name|escape:'html':'UTF-8'}</option>{/foreach}
			</select>
		</div>
		<div class="inline-block">
			<select name="scope" class="inline-block">
				<option value="0">{l s='All resources' mod='amazzingblog'}</option>
				<option value="post">{l s='Posts' mod='amazzingblog'}</option>
				<option value="category">{l s='Categories' mod='amazzingblog'}</option>
			</select>
		</div>
		<button class="btn btn-default inline-block regenerateThumbnails"><i class="icon-cogs"></i> {l s='Regenerate thumbnails' mod='amazzingblog'}</button>
	</div>
</div>
{* since 1.5.0 *}
