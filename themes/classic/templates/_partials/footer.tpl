{**
  * 2007-2017 PrestaShop
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
  * @copyright 2007-2017 PrestaShop SA
  * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
  * International Registered Trademark & Property of PrestaShop SA
  *}
  {block name='hook_footer_before'}
  <div class="whyus grid">
    <div class="title">
      <h2>{l s='Why shop [1]with us?[/1]' d='Shop.Theme.Global' tags=['<strong>']}</h2>
      </div>
      <div class="reasons">
        <div class="ico"><img src="{$urls.img_url}ship.svg"  height="48px" alt=""></div>
        <h3>{l s='FREE SHIPPING' d='Shop.Theme.Global'}</h3>
        <p>{l s='We offer free shipping on all new Berkey Systems' d='Shop.Theme.Global'}</p>
        <a href="#" class="btn btn-outline-secondary btn-lg">{l s='Learn More' d='Shop.Theme.Global'}</a>
      </div>
      <div class="reasons">
        <div class="ico">
          <img src="{$urls.img_url}reason2.svg" height="48px"  alt="">
        </div>
        <h3>{l s='WE ARE CANADIAN' d='Shop.Theme.Global'}</h3>
        <p>{l s='Orders ship from Canada.[1] No hidden shipping or import fees' tags=['<br>'] d='Shop.Theme.Global'}</p>
        <a href="#" class="btn btn-outline-secondary btn-lg">{l s='Learn More' d='Shop.Theme.Global'}</a>
      </div>
      <div class="reasons">
        <div class="ico">
          <img src="{$urls.img_url}reason3.svg" height="48px"  alt="">
        </div> 
        <h3>{l s='WE ARE WATER EXPERTS' d='Shop.Theme.Global'}</h3>
        <p>{l s='We have been providing healthy water solutions to Canadians since 2010' d='Shop.Theme.Global'}</p>
        <a href="#" class="btn btn-outline-secondary btn-lg">{l s='About Us' d='Shop.Theme.Global'}</a>
      </div>
      <div class="reasons">
        <div class="ico">
          <img src="{$urls.img_url}reason4.svg" height="48px"  alt="">
        </div>
        <h3>{l s='SOCIAL RESPONSIBILITY' d='Shop.Theme.Global'}</h3>
        <p>{l s='We donate a portion of our annual proceeds to water-conservation efforts' d='Shop.Theme.Global'}</p>
        <a href="#" class="btn btn-outline-secondary btn-lg">{l s='Learn More' d='Shop.Theme.Global'}</a>
      </div>
    </div>
    {hook h='displayFooterBefore'}
    {/block}
    
    {block name='hook_footer'}
    <!-- hook h='displayFooter'} -->
    <div id="footer-links" class="grid">
      <div class="link-list">
        <h2 class="title">{l s='Products' d='Shop.Theme.Global'}</h2>
        <ul>
          <li><a href="#">{l s='Berkey Water Filters' d='Shop.Theme.Global'}</a></li>
          <li><a href="#">{l s='Multi-Use Berkey Systems' d='Shop.Theme.Global'}</a></li>
          <li><a href="#">{l s='Portable Berkey Systems' d='Shop.Theme.Global'}</a></li>
          <li><a href="#">{l s='Fluoride Removal Filters' d='Shop.Theme.Global'}</a></li>
          <li><a href="#">{l s='Replacement Filters' d='Shop.Theme.Global'}</a></li>
          <li><a href="#">{l s='Berkey Accessories' d='Shop.Theme.Global'}</a></li>
          <li><a href="#">{l s='Vortex Water Revitalizer' d='Shop.Theme.Global'}</a></li>
        </ul>
      </div>
      <div class="link-list">
        <h2 class="title">{l s='Learning Center' d='Shop.Theme.Global'}</h2>
        <ul>
          <li><a href="#">{l s='How Berkey Systems Work' d='Shop.Theme.Global'}</a></li>
          <li><a href="#">{l s='Berkey Test Results' d='Shop.Theme.Global'}</a></li>
          <li><a href="#">{l s='FAQ' d='Shop.Theme.Global'}</a></li>
          <li><a href="#">{l s='Videos' d='Shop.Theme.Global'}</a></li>
          <li><a href="#">{l s='User Instructions' d='Shop.Theme.Global'}</a></li>
          <li><a href="#">{l s='Tips & Troubleshooting' d='Shop.Theme.Global'}</a></li>
          <li><a href="#">{l s='Berkey Warranty' d='Shop.Theme.Global'}</a></li>
          <li><a href="#">{l s='History of Berkey' d='Shop.Theme.Global'}</a></li>
        </ul>
      </div>
      <div class="link-list">
        <h2 class="title">{l s='Why Choose Berkey' d='Shop.Theme.Global'}</h2>
        <ul>
          <li><a href="#">{l s='Features & Benefits' d='Shop.Theme.Global'}</a></li>
          <li><a href="#">{l s='Cleanable Filters' d='Shop.Theme.Global'}</a></li>
          <li><a href="#">{l s='Water is Important!' d='Shop.Theme.Global'}</a></li>
          <li><a href="#">{l s='Cost Comparison' d='Shop.Theme.Global'}</a></li>
          <li><a href="#">{l s='Performance Comparison' d='Shop.Theme.Global'}</a></li>
          <li><a href="#">{l s='Testimonials' d='Shop.Theme.Global'}</a></li>
        </ul>
      </div>
      <div class="link-list">
        <h2 class="title">{l s='Information' d='Shop.Theme.Global'}</h2>
        <ul>
          <li>
            <a href="#">{l s='Contact us' d='Shop.Theme.Global'}</a>
          </li>
          <li>
            <a href="#">{l s='About us' d='Shop.Theme.Global'}</a>
          </li>
          <li>
            <a href="#">{l s='Blog' d='Shop.Theme.Global'}</a>
          </li>
          <li>
            <a href="#">{l s='Delivery' d='Shop.Theme.Global'}</a>
          </li>
          <li>
            <a href="#">{l s='Legal Notice' d='Shop.Theme.Global'}</a>
          </li>
          <li>
            <a href="#">{l s='Terms & Conditions' d='Shop.Theme.Global'}</a>
          </li>
          <li>
            <a href="#">{l s='Secure payment' d='Shop.Theme.Global'}</a>
          </li>
          <li>
            <a href="#">{l s='Sitemap' d='Shop.Theme.Global'}</a>
          </li>
        </ul>
      </div>
      <div class="authorized">
        <img src="{$urls.img_url}authorized.jpg" alt="">
      </div>
    </div>
    {/block}
    
    {block name='hook_footer_after'}
    {* hook h='displayFooterAfter'} *}
    <div class="pageend">
      <div class="follow">
        <h2>{l s="Follow Us" d='Shop.Theme.Global'}</h2>
        <ul>
          <li><a href="#"><img src="{$urls.img_url}youtube.svg" alt=""></a></li>
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        </ul>
      </div>
      <div class="cards">
        <h2>{l s="We Accept" d="Shop.Theme.Global"}</h2>
        <img src="{$urls.img_url}cards.svg" alt="">
      </div>
      <div class="copyrights">
        <div class="left">aquasante.com © All rights reserved</div>
        <div class="rigth">E-commerce Development Agency: <img src="{$urls.img_url}mm.svg" alt=""></div>
      </div>
    </div>
    {/block}
    
    