{**
  * 2007-2018 PrestaShop
  *
  * NOTICE OF LICENSE
  *
  * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
  * that is bundled with this package in the file LICENSE.txt.
  * It is  available through the world-wide-web at this URL:
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
  {extends file=$layout}
  
  {block name='head_seo' prepend}
  <link rel="canonical" href="{$product.canonical_url}">
  {/block}
  
  {block name='head' append}
  <meta property="og:type" content="product">
  <meta property="og:url" content="{$urls.current_url}">
  <meta property="og:title" content="{$page.meta.title}">
  <meta property="og:site_name" content="{$shop.name}">
  <meta property="og:description" content="{$page.meta.description}">
  <meta property="og:image" content="{$product.cover.large.url}">
  <meta property="product:pretax_price:amount" content="{$product.price_tax_exc}">
  <meta property="product:pretax_price:currency" content="{$currency.iso_code}">
  <meta property="product:price:amount" content="{$product.price_amount}">
  <meta property="product:price:currency" content="{$currency.iso_code}">
  {if isset($product.weight) && ($product.weight != 0)}
  <meta property="product:weight:value" content="{$product.weight}">
  <meta property="product:weight:units" content="{$product.weight_unit}">
  {/if}
  {/block}
  
  {block name='content'}
  
  <section id="main" class="grid" itemscope itemtype="https://schema.org/Product">
    <meta itemprop="url" content="{$product.url}">
    
    
    <div class="ProductPhoto">
      {block name='page_content_container'}
      <section class="page-content" id="content">
        {block name='page_content'}
        {block name='product_flags'}
        <ul class="product-flags">
          {foreach from=$product.flags item=flag}
          <li class="product-flag {$flag.type}">{$flag.label}</li>
          {/foreach}
        </ul>
        {/block}
        
        {block name='product_cover_thumbnails'}
        {include file='catalog/_partials/product-cover-thumbnails.tpl'}
        {/block}
        <div class="scroll-box-arrows">
          <i class="material-icons left">&#xE314;</i>
          <i class="material-icons right">&#xE315;</i>
        </div>
        
        {/block}
      </section>
      {/block}
    </div>
    
    <div class="ProductInformationBasic">
      {block name='page_header_container'}
      {block name='page_header'}
      <div class="brand"><a href="{url entity='manufacturer' id=$product_manufacturer->id}">{$product_manufacturer->name}</a></div>
      <h1 class="h1" itemprop="name">{block name='page_title'}{$product.name}{/block}</h1>
      {/block}
      {/block}
      {block name='product_prices'}
      {include file='catalog/_partials/product-prices.tpl'}
      {/block}
      {block name='product_additional_info'} {include file='catalog/_partials/product-additional-info.tpl'} {/block}
      <div class="product-information">
        {block name='product_description_short'}
        <div id="product-description-short-{$product.id}" class="prod-description" itemprop="description">{$product.description_short nofilter}</div>
        {/block}
        
        {if $product.is_customizable && count($product.customizations.fields)}
        {block name='product_customization'}
        {include file="catalog/_partials/product-customization.tpl" customizations=$product.customizations}
        {/block}
        {/if}
        
        <div class="product-actions">
          {block name='product_buy'}
          <form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
            <input type="hidden" name="token" value="{$static_token}">
            <input type="hidden" name="id_product" value="{$product.id}" id="product_page_product_id">
            <input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id">
            
            {block name='product_variants'}
            {include file='catalog/_partials/product-variants.tpl'}
            {hook h='displayMultiAccessoriesProduct'}
            {/block}
            
            {block name='product_pack'}
            {if $packItems}
            <section class="product-pack">
              <p class="h4">{l s='This pack contains' d='Shop.Theme.Catalog'}</p>
              {foreach from=$packItems item="product_pack"}
              {block name='product_miniature'}
              {include file='catalog/_partials/miniatures/pack-product.tpl' product=$product_pack}
              {/block}
              {/foreach}
            </section>
            {/if}
            {/block}
            
            {block name='product_discounts'}
            {include file='catalog/_partials/product-discounts.tpl'}
            {/block}
            
            {block name='product_add_to_cart'}
            {include file='catalog/_partials/product-add-to-cart.tpl'}
            {/block}
            
            
            
            {block name='product_refresh'}
            <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="{l s='Refresh' d='Shop.Theme.Actions'}">
            {/block}
          </form>
          {/block}
          
        </div>
        
      </div>
    </div>
    {block name='product_tabs'}
    <div class="tabs">
      <ul class="nav nav-tabs" role="tablist">
        {if $product.description}
        <li class="nav-item">
          <a class="nav-link{if $product.description} active{/if}" data-toggle="tab" href="#description" role="tab" aria-controls="description"
          {if $product.description} aria-selected="true" {/if}>{l s='Description' d='Shop.Theme.Catalog'}</a>
        </li>
        {/if}
        <li class="nav-item">
          <a class="nav-link{if !$product.description} active{/if}" data-toggle="tab" href="#product-details" role="tab" aria-controls="product-details"
          {if !$product.description} aria-selected="true" {/if}>{l s='Product Details' d='Shop.Theme.Catalog'}</a>
        </li>
        {if $product.attachments}
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#attachments" role="tab" aria-controls="attachments">{l s='Attachments' d='Shop.Theme.Catalog'}</a>
        </li>
        {/if} {foreach from=$product.extraContent item=extra key=extraKey}
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#extra-{$extraKey}" role="tab" aria-controls="extra-{$extraKey}">{$extra.title}</a>
        </li>
        {/foreach}
      </ul>
      
      <div class="tab-content" id="tab-content">
        <div class="tab-pane fade in{if $product.description} show active{/if}" id="description" role="tabpanel">
          {block name='product_description'}
          <div class="product-description">{$product.description nofilter}</div>
          {/block}
        </div>
        
        {block name='product_details'} {include file='catalog/_partials/product-details.tpl'} {/block} {block name='product_attachments'}
        {if $product.attachments}
        <div class="tab-pane fade in" id="attachments" role="tabpanel">
          <section class="product-attachments">
            <p class="h5 text-uppercase">{l s='Download' d='Shop.Theme.Actions'}</p>
            {foreach from=$product.attachments item=attachment}
            <div class="attachment">
              <h4>
                <a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">{$attachment.name}</a>
              </h4>
              <p>{$attachment.description}</p <a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">
                {l s='Download' d='Shop.Theme.Actions'} ({$attachment.file_size_formatted})
              </a>
            </div>
            {/foreach}
          </section>
        </div>
        {/if} {/block} {foreach from=$product.extraContent item=extra key=extraKey}
        <div class="tab-pane fade in {$extra.attr.class}" id="extra-{$extraKey}" role="tabpanel" {foreach $extra.attr as $key=> $val} {$key}="{$val}"{/foreach}> {$extra.content nofilter}
        </div>
        {/foreach}
      </div>
    </div>
    {/block}      
    {block name='product_footer'}
    <div class="tabs">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#videos" role="tab" aria-controls="videos">{l s='Videos' d='Shop.Theme.Catalog'}</a>
        </li>
        <li class="nav-item">       
          <a class="nav-link" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews">{l s='Reviews' d='Shop.Theme.Catalog'}</a>
        </li>
      </ul>
      <div class="tab-content" id="tab-content">
        <div class="tab-pane fade in show active" id="videos" role="tabpanel">
          
          <div class="product-video grid">{$product.video nofilter}</div>
          
        </div>
        {hook h='displayFooterProduct' product=$product category=$category}
      </div>
    </div>
    {if $product.id_category_default == 3}
    <div class="didyouknow">
      <h1>{l s="Do You Know What’s In Your Water?" d='Shop.Theme.Catalog'} </h1>
      <div class="subtitle">
       {l s="Depending on where you live and where your tap water comes from, you may have some or most of these contaminants in your drinking water." d='Shop.Theme.Catalog'}<br>
        <strong>{l s="Find out how Berkey Systems can eliminate up to 99.9999[1] of harmful contaminants found in water." sprintf=['[1]' => '%'] d='Shop.Theme.Catalog'}</strong>
      </div>
      <ul>
        <li>
          <div class="card">
            <img src="{$urls.img_url}know1.jpg" alt="">
            <div class="title">{l s="Chlorine" d='Shop.Theme.Catalog'}</div>
          </div>
        </li>
        <li>
          <div class="card">
            <img src="{$urls.img_url}know2.jpg" alt="">
            <div class="title">{l s="Fluoride" d='Shop.Theme.Catalog'}</div>
          </div>
        </li>
        <li>
          <div class="card">
            <img src="{$urls.img_url}know3.jpg" alt="">
            <div class="title">{l s="Bacteria" d='Shop.Theme.Catalog'}</div>
          </div>
        </li>
        <li>
          <div class="card">
            <img src="{$urls.img_url}know4.jpg" alt="">
            <div class="title">{l s="Parasites" d='Shop.Theme.Catalog'}</div>
          </div>
        </li>
        <li>
          <div class="card">
            <img src="{$urls.img_url}know5.jpg" alt="">
            <div class="title">{l s="Viruses" d='Shop.Theme.Catalog'}</div>
          </div>
        </li>
        <li>
          <div class="card">
            <img src="{$urls.img_url}know6.jpg" alt="">
            <div class="title">{l s="Heavy Metals" d='Shop.Theme.Catalog'}</div>
          </div>
        </li>
        <li>
          <div class="card">
            <img src="{$urls.img_url}know7.jpg" alt="">
            <div class="title">{l s="Bad Taste & Odours" d='Shop.Theme.Catalog'}</div>
          </div>
        </li>
        <li>
          <div class="card">
            <img src="{$urls.img_url}know8.jpg" alt="">
            <div class="title">{l s="Pesticides" d='Shop.Theme.Catalog'}</div>
          </div>
        </li>
        <li>
          <div class="card">
            <img src="{$urls.img_url}know9.jpg" alt="">
            <div class="title">{l s="Pharmaceuticals" d='Shop.Theme.Catalog'}</div>
          </div>
        </li>
        <li>
          <div class="card">
            <img src="{$urls.img_url}know10.jpg" alt="">
            <div class="title">{l s="VOC’s" d='Shop.Theme.Catalog'}</div>
          </div>
        </li>
        <li>
          <div class="card">
            <img src="{$urls.img_url}know11.jpg" alt="">
            <div class="title">{l s="Chemicals" d='Shop.Theme.Catalog'}</div>
          </div>
        </li>
        <li>
          <div class="card">
            <img src="{$urls.img_url}know12.jpg" alt="">
            <div class="title">{l s="Petroleum Products" d='Shop.Theme.Catalog'}</div>
          </div>
        </li>
      </ul>
      <div class="butcont">
        
        <a href="{url entity='category' id=$category->id}" class="btn btn-outline-secondary btn-sm">{l s='SHOP NOW'
          d='Shop.Theme.Catalog'}
          <i class="far fa-chevron-right"></i>
        </a>
        <a href="{url entity='category' id=$category->id}" class="btn btn-secondary btn-sm">{l s='LEARN MORE' d='Shop.Theme.Catalog'}
          <i class="far fa-chevron-right"></i>
        </a>
        
      </div>	
    </div> 
    {/if}
    {/block}
     {block name='product_accessories'} {if $accessories}
    <section class="product-accessories clearfix">
      <div class="title">
        <h5 class="h5">{l s='OTHER BERKEY ACCESSORIES' d='Shop.Theme.Catalog'}</h5>
      </div>
      <div class="products">
        {foreach from=$accessories item="product_accessory"} {block name='product_miniature'} {include file='catalog/_partials/miniatures/product.tpl'
        product=$product_accessory} {/block} {/foreach}
        <a href="{url entity='category' id=$category->id}" class="btn btn-outline-secondary btn-sm">{l s='SEE ALL OUR BERKEY ACCESSORIES' d='Shop.Theme.Catalog'}
          <i class="far fa-chevron-right"></i>
        </a>
      </div>
    </section>
    {/if} {hook h='displayFooterAccesories' product=$product category=$category} {/block}
        {block name='product_images_modal'}
      {include file='catalog/_partials/product-images-modal.tpl'}
    {/block}
    
    
  </section>
  
  {/block}
  