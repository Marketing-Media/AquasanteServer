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
  <nav class="header-nav">
    <div class="container-fluid">
      <div class="d-none d-md-block"> 
        <div class="row">
          
          <div class="col-md-12 right-nav">
              {hook h='displayNav2'}
          </div>
        </div>
      </div>
    </div>
  </nav>
{/block}

{block name='header_logo'}
  <div id="logorow" class="logo row align-items-center justify-content-space-between py-4">
    <div class="col-xs-12 col-sm-6">
      <a class="logo" href="{$urls.base_url}" title="{$shop.name}">
        <img src="{$urls.img_url}logo.svg" alt="{$shop.name}" width="320px">
      </a>
    </div>
    <div class="col-sm-6 col-12 col align-items-center">
      <div class="row">
        <div class="freeshipping col-md-6 col-12 align-items-center d-flex align-self-start justify-content-end ">
          <div class="row pr-4">
            <div class="icon"><img src="{$urls.img_url}ship.svg" alt="{$shop.name}" ></div>
            <div class="text">
              <div class="title text-uppercase bfirst">{l s='Free Shipping' d='Shop.Theme.Global'}</div>
              <div class="subtitle bthird">{l s='on Berkey® Systems' d='Shop.Theme.Global'}</div>
            </div>
          </div>
        </div>
        <div class="experts col-md-6 col-12 align-self-baseline d-flex justify-content-center flex-column text-center pl-5 pr-0">
          <div class="text-uppercase bthird title">{l s='Call the water experts toll free' d='Shop.Theme.Global'}</div>
          <div class="text-uppercase bsecundary subtitle"><i class="fas fa-phone" data-fa-transform="flip-h"></i> {l s='[1]844-4-BERKEY[/1]  (1-844-423-7539)' d='Shop.Theme.Global' tags=['<strong>']}</div>
          <div class="contact">
            <ul class="d-flex justify-content-center contactus">
              <li class="bthird"><i class="icon fal fa-envelope"></i><a href="">{l s='Email Us' d='Shop.Theme.Global'}</a></li>
              <li class="bthird"><i class="icon fab fa-facebook-messenger"></i><a href="">{l s='Messenger' d='Shop.Theme.Global'}</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
{/block} 

{block name='header_top'}
  
  
    <div class="menu-top row navbar navbar-expand-md navbar-dark bg-third">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbarSupportedContent" class="collapse navbar-collapse">
        {hook h='displayNavFullWidth'}
      </div>
    </div>


{/block}

