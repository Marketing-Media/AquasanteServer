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

{if !$blog->is_17}{include file = $blog->getTemplatePath('breadcrumbs.tpl') parents = $ab_cat_parents current_item = $not_available_txt}{/if}
<div class="alert alert-warning">{l s='This item is not available' mod='amazzingblog'}</div>
{* since 1.5.0 *}
