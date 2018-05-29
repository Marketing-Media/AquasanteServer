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
<section class="featured-products clearfix mt-3">
 <div class="title">
    <h5>{l s='BERKEY SYSTEMS' d='Modules.Categoryproducts.Shop'}</h5>
  </div>
  <div class="products">
      {foreach from=$products item="product"}
          {include file="catalog/_partials/miniatures/product.tpl" product=$product}
      {/foreach}
<a href="{url entity='category' id=$category->id}" class="btn btn-outline-secondary btn-sm">{l s='SEE ALL OUR BERKEY SYSTEMS' d='Shop.Theme.Catalog'} <i class="far fa-chevron-right"></i></a>
      
  </div>
  
</section>
