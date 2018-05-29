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

<div class="block_newsletter grid">
  
    <i class="fas fa-paper-plane"></i><p id="block-newsletter-label"> {l s='[1] SIGN UP TO OUR MAILING LIST[/1] to receive exclusive offers, testimonials, health information, and more...' tags=['<strong>'] d='Shop.Theme.Global'}</p>
    <div class="Form">
      <form action="{$urls.pages.index}#footer" method="post">
        
          
            <button
              class="newsletterbut"
              name="submitNewsletter"
              type="submit"             
            ><i class="fal fa-envelope fa-lg"></i></button>
           
            <div class="input-wrapper">
              <input
                name="email"
                type="text"
                value="{$value}"
                placeholder="{l s='Your email address' d='Shop.Forms.Labels'}"
                aria-labelledby="block-newsletter-label"
              >
            </div>
            <input type="hidden" name="action" value="0">         
      </form>
      
    </div>
 {if $msg}
                <p class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
                  {$msg}
                </p>
      {/if}  
</div>
