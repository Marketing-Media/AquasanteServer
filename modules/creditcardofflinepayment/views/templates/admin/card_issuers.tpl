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

<table cellpadding="0" cellspacing="0" class="table">
	<thead>
		<tr>
			<th class="center">{l s='Enabled' mod='creditcardofflinepayment'}</th>
			<th>{l s='Issuer' mod='creditcardofflinepayment'}</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$issuers item=issuer}
		<tr>
			<td class="center"><input type="checkbox" name="CCOFFLINE_DATA_ISSUERS[]" value="{$issuer.id|escape:'htmlall':'UTF-8'}" {if $issuer.authorized}checked="checked"{/if} /></td>
			<td>{$issuer.name|escape:'htmlall':'UTF-8'}</td>
			<td><img src="{$this_path|escape:'htmlall':'UTF-8'}views/img/{$issuer.imgName|escape:'htmlall':'UTF-8'}" /></td>
		</tr>
		{/foreach}
	</tbody>
</table>
