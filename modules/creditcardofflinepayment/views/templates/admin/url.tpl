{**
* Credit Card Offline Payment Module.
*
* Allows currently running stores to accept card information through their online store.
* Card number is verified and the information is stored masked at database.
* It can then be decrypted, together with the information received by email,
* at a later time for charges through an existing gateway (ie. a creditcard machine).
*
* NOTICE OF LICENSE
*
* This product is licensed for one customer to use on one installation (test stores and multishop included).
* Site developer has the right to modify this module to suit their needs, but can not redistribute the module in
* whole or in part. Any other use of this module constitues a violation of the user agreement.
*
* DISCLAIMER
*
* NO WARRANTIES OF DATA SAFETY OR MODULE SECURITY
* ARE EXPRESSED OR IMPLIED. USE THIS MODULE IN ACCORDANCE
* WITH YOUR MERCHANT AGREEMENT, KNOWING THAT VIOLATIONS OF
* PCI COMPLIANCY OR A DATA BREACH CAN COST THOUSANDS OF DOLLARS
* IN FINES AND DAMAGE A STORES REPUTATION. USE AT YOUR OWN RISK.
*
*  @author    idnovate.com <info@idnovate.com>
*  @copyright 2017 idnovate.com
*  @license   See above
*}

<style>
	div.panel.url {
		font-size: 13px;
	}
</style>

<div class="panel url">
	<div class="panel-heading">
		<i class="icon-external-link"></i> {l s='URLs' mod='creditcardofflinepayment'}
	</div>
	<div class="form-wrapper">
		<div class="form-group">
			<p>
				{l s='The card form will be accessed through these URLs:' mod='creditcardofflinepayment'}<br/>
				<em><a href="{$paymentLink|escape:'htmlall':'UTF-8'}" target="_blank">{$paymentLink|escape:'htmlall':'UTF-8'}</a></em><br/>
				<em><a href="{$validationLink|escape:'htmlall':'UTF-8'}" target="_blank">{$validationLink|escape:'htmlall':'UTF-8'}</a></em><br/>
			</p>
			<p>
				{l s='You can set the URLs at' mod='creditcardofflinepayment'} <a href="{$metaLink|escape:'htmlall':'UTF-8'}">{l s='Preferences -> SEO + URLs' mod='creditcardofflinepayment'}</a>.
			</p>
		</div>
	</div>
</div>