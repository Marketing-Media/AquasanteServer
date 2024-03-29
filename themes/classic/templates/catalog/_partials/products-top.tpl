{**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div id="js-product-list-top" class="row products-selection">
  <div class="total-products">
    {if $listing.pagination.total_items > 1}
      {l s='There are %product_count% products.' d='Shop.Theme.Catalog' sprintf=['%product_count%' => $listing.pagination.total_items]}
    {else if $listing.pagination.total_items > 0}
      {l s='There is 1 product.' d='Shop.Theme.Catalog'}
    {/if}
  </div>

  <div class="sort-by-row">

    {block name='sort_by'}
      {include file='catalog/_partials/sort-orders.tpl' sort_orders=$listing.sort_orders}
    {/block}

    
  </div>

</div>
