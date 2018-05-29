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
{block name='header_banner'}
  <div class="header-banner">
    {hook h='displayBanner'}
  </div>
{/block}

{block name='header_nav'}
  <nav class="header-nav ">  
    <div class="right-nav">
       <ul class="follow">
        <li><a href="https://www.facebook.com/aquaberkeyfilters/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
        <li class="instagram"><a href="https://www.instagram.com/aquaberkeyfilters/" target="_blank"><i class="fab fa-instagram"></i></a></li> 
        <li class="youtube"><a href="https://www.youtube.com/channel/UCSad12V3KZIdFiYr2MNYhFA" target="_blank"><img src="{$urls.img_url}youtube.svg" alt=""></a></li>
      </ul>
            {hook h='displayNav2'}
    </div>
  </nav>
{/block}

{block name='header_logo'}
  <div id="logorow" class="logo grid">
    
      <a class="" href="{$urls.base_url}" title="{$shop.name}">
        <img src="{$urls.img_url}logo{if $language.iso_code == qc}qc{/if}.svg" alt="{$shop.name}" width="560px">
      </a>
  
    
      
        <div class="freeshipping">
          
            <div class="icon"><img src="{$urls.img_url}ship.svg" alt="{$shop.name}" ></div>
            <div class="text">
              <div class="title text-uppercase bfirst">{l s='Free Shipping' d='Shop.Theme.Global'}</div>
              <div class="subtitle bthird">{l s='on Berkey® Systems' d='Shop.Theme.Global'}</div>
            </div>
          
        </div>
        <div class="experts">
          <div class="text-uppercase bthird title">{l s='Call the water experts toll free' d='Shop.Theme.Global'}</div>
          <a href="tel:18444237539"><div class="text-uppercase bsecundary subtitle"><i class="fas fa-phone" data-fa-transform="flip-h"></i> {l s='[1]844-4-BERKEY[/1]  (1-844-423-7539)' d='Shop.Theme.Global' sprintf=['[1]' => '<strong>','[/1]' => '</strong>']}</div></a>
          <div class="contact">
            <ul class="d-flex justify-content-center contactus">
              <li class="bthird"><i class="icon fal fa-envelope"></i><a href="{$urls.pages.contact}">{l s='Email Us' d='Shop.Theme.Global'}</a></li>
              <li class="bthird"><i class="icon fab fa-facebook-messenger"></i><a href="">{l s='Messenger' d='Shop.Theme.Global'}</a></li>
            </ul>
          </div>
        </div>
      
    
  </div>
{/block} 

{block name='header_top'}
  
  
    <div class="menu-top row navbar navbar-expand-lg navbar-dark bg-third">
     <div><i class="far fa-bars bfirst"></i> 
      <a class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       {l s="Menu" d='Shop.Theme.Global'}
      </a></div>
      <div id="navbarSupportedContent" class="collapse navbar-collapse">
        {hook h='displayNavFullWidth'}
      </div>
    </div>


{/block}

