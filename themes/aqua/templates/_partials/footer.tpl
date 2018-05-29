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
  * Do not edit or add to this file if you wish to upgrade PrestaShop to newer AQUA BERKEY FILTERS


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
      <h2>{l s='Why shop [1]with us?[/1]' d='Shop.Theme.Global' sprintf=['[1]' => '<strong>','[/1]' => '</strong>']}</h2>
      </div>
      <div class="reasons">
        <div class="ico"><img src="{$urls.img_url}ship.svg"  height="48px" alt=""></div>
        <h3>{l s='Free Shipping' d='Shop.Theme.Global'}</h3>
        <p>{l s='We offer free shipping on all new[1] Berkey® Systems' sprintf=['[1]' => '<br>'] d='Shop.Theme.Global'}</p>
        <a href="{url entity='cms' id='1'}" class="btn btn-outline-secondary btn-lg">{l s='Learn More' d='Shop.Theme.Global'}</a>
      </div>
      <div class="reasons">
        <div class="ico">
          <img src="{$urls.img_url}reason2.svg" height="48px"  alt="">
        </div>
        <h3>{l s='WE ARE CANADIAN' d='Shop.Theme.Global'}</h3>
        <p>{l s='Orders ship from Canada. [1] No hidden shipping or import fees' sprintf=['[1]' => '<br>']  d='Shop.Theme.Global'}</p>
        <a href="{url entity='cms' id='4'}" class="btn btn-outline-secondary btn-lg">{l s='Learn More' d='Shop.Theme.Global'}</a>
      </div>
      <div class="reasons">
        <div class="ico">
          <img src="{$urls.img_url}reason3.svg" height="48px"  alt="">
        </div> 
        <h3>{l s='WE ARE WATER EXPERTS' d='Shop.Theme.Global'}</h3>
        <p>{l s='We have been providing healthy water[1] solutions to Canadians since 2010' sprintf=['[1]' => '<br>'] d='Shop.Theme.Global'}</p>
        <a href="{url entity='cms' id='4'}" class="btn btn-outline-secondary btn-lg">{l s='About Us' d='Shop.Theme.Global'}</a>
      </div>
      <div class="reasons">
        <div class="ico">
          <img src="{$urls.img_url}reason4.svg" height="48px"  alt="">
        </div>
        <h3>{l s='SOCIAL RESPONSIBILITY' d='Shop.Theme.Global'}</h3>
        <p>{l s='We donate a portion of our annual[1] proceeds to water-conservation efforts' sprintf=['[1]' => '<br>'] d='Shop.Theme.Global'}</p>
        <a href="{url entity='cms' id='4'}" class="btn btn-outline-secondary btn-lg">{l s='Learn More' d='Shop.Theme.Global'}</a>
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
          <li><a href="{url entity='cms' id='20'}">{l s='How to choose my Berkey?' d='Shop.Theme.Global'}</a></li>
          <li><a href="{url entity='category' id='4'}">{l s='Multi-Use Systems' d='Shop.Theme.Global'}</a></li>
          <li><a href="{url entity='category' id='5'}">{l s='Portable Systems' d='Shop.Theme.Global'}</a></li>
          <li><a href="{url entity='category' id='11'}">{l s='Replacement Filters' d='Shop.Theme.Global'}</a></li>
          <li><a href="{url entity='category' id='12'}">{l s='Berkey Accessories' d='Shop.Theme.Global'}</a></li>
          <li><a href="{url entity='category' id='13'}">{l s='Vortex Water Revitalizers' d='Shop.Theme.Global'}</a></li>
        </ul>
      </div>
       <div class="link-list">
        <h2 class="title">{l s='Why Choose Berkey' d='Shop.Theme.Global'}</h2>
        <ul>
          <li><a href="{url entity='cms' id='13'}">{l s='Features and Benefits' d='Shop.Theme.Global'}</a></li>
          <li><a href="{url entity='cms' id='14'}">{l s='Cleanable Filters' d='Shop.Theme.Global'}</a></li>
          <li><a href="{url entity='cms' id='16'}">{l s='Cost Comparison' d='Shop.Theme.Global'}</a></li>
          <li><a href="{url entity='cms' id='17'}">{l s='Performance Comparison' d='Shop.Theme.Global'}</a></li>
          <li><a href="{url entity='cms' id='21'}">{l s='Water Types Comparison' d='Shop.Theme.Global'}</a></li>
          <li><a href="{url entity='cms' id='22'}">{l s='Environmentally Friendly' d='Shop.Theme.Global'}</a></li>
          <li><a href="{url entity='cms' id='23'}">{l s='pH Balanced Healthful Water' d='Shop.Theme.Global'}</a></li>
          <li><a href="{url entity='cms' id='24'}">{l s='Travel & Emergency Preparedness' d='Shop.Theme.Global'}</a></li>
        </ul>
      </div>
      <div class="link-list">
        <h2 class="title">{l s='Learning Center' d='Shop.Theme.Global'}</h2>
        <ul>
          <li><a href="{url entity='cms' id='6'}">{l s='How Do Berkey Systems Work?' d='Shop.Theme.Global'}</a></li>
          <li><a href="{url entity='cms' id='7'}">{l s='Independent Lab Test Results' d='Shop.Theme.Global'}</a></li>
          <li><a href="{url entity='cms' id='8'}">{l s='FAQ & Troubleshooting' d='Shop.Theme.Global'}</a></li>
          <li><a href="{url entity='cms' id='9'}">{l s='Videos' d='Shop.Theme.Global'}</a></li>
          <li><a href="{url entity='cms' id='10'}">{l s='User Instructions' d='Shop.Theme.Global'}</a></li>
          <li><a href="{url entity='cms' id='19'}">{l s='Warranty Information' d='Shop.Theme.Global'}</a></li>
          <li><a href="{url entity='cms' id='18'}">{l s='Testimonials' d='Shop.Theme.Global'}</a></li>

          <li>
            <a href="{$language.iso_code}/blog">{l s='Blog' d='Shop.Theme.Global'}</a>
          </li>
        </ul>
      </div>
     
      <div class="link-list">
        <h2 class="title">{l s='Information' d='Shop.Theme.Global'}</h2>
        <ul>
          <li>
            <a href="{$urls.pages.contact}">{l s='Contact Us' d='Shop.Theme.Global'}</a>
          </li>
          <li>
            <a href="{url entity='cms' id='4'}">{l s='About Us' d='Shop.Theme.Global'}</a>
          </li>
          <li>
            <a href="{url entity='cms' id='3'}">{l s='Terms & Conditions of Sale' d='Shop.Theme.Global'}</a>
          </li>
          
          <li>
            <a href="{url entity='cms' id='1'}">{l s='Shipping & Returns' d='Shop.Theme.Global'}</a>
          </li>
           <li>
            <a href="{url entity='cms' id='5'}">{l s='Secure Payment' d='Shop.Theme.Global'}</a>
          </li>
           <li>
            <a href="{url entity='cms' id='25'}">{l s='Privacy Policy' d='Shop.Theme.Global'}</a>
          </li>
          <li>
            <a href="{url entity='cms' id='2'}">{l s='Legal Notice' d='Shop.Theme.Global'}</a>
          </li>
          
         
          <li>
            <a href="{$urls.pages.sitemap} ">{l s='Sitemap' d='Shop.Theme.Global'}</a>
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
          <li><a href="https://www.facebook.com/aquaberkeyfilters/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
        <li class="instagram"><a href="https://www.instagram.com/aquaberkeyfilters/" target="_blank"><i class="fab fa-instagram"></i></a></li>
          
          <li class="youtube"><a href="https://www.youtube.com/channel/UCSad12V3KZIdFiYr2MNYhFA" target="_blank"><img src="{$urls.img_url}youtube.svg" alt=""></a></li>
        </ul>
      </div>
      <div class="cards">
        <h2>{l s="We Accept" d="Shop.Theme.Global"}</h2>
        <img src="{$urls.img_url}cards.svg" alt="">
      </div>
      <div class="copyrights">
        <div class="left">{l s="Aqua Health Products Inc." d='Shop.Theme.Global'} © {l s="All rights reserved" d='Shop.Theme.Global'}</div>
        <div class="rigth"><a target="_blank" href="{if $language.iso_code == en}https://marketingmedia.ca/services/website/website-creation/e-commerce-development/{else}https://marketingmedia.ca/fr/services/site-internet/conception-de-sites-internet/commerce-electronique/{/if}">{l s="E-commerce Development Agency:" d='Shop.Theme.Global'}</a> <a href="{if $language.iso_code == en}https://marketingmedia.ca{else}https://marketingmedia.ca/fr{/if}"><img src="{$urls.img_url}mm.svg" alt=""></a></div>
      </div>
    </div>
    {/block}
    
    