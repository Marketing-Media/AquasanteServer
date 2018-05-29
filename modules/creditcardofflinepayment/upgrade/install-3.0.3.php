<?php
/**
* Quantity Discount Pro
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
*/

function upgrade_module_3_0_3()
{
    $result = true;

    $result &= Db::getInstance()->execute(
        "ALTER TABLE `"._DB_PREFIX_."ccofflinepayment_order`
        CHANGE `card_expiry_year` `card_expiry_year` int(2) NULL AFTER `card_expiry_month`;"
    );

    $result &= Db::getInstance()->execute(
        "ALTER TABLE `"._DB_PREFIX_."ccofflinepayment_order`
        CHANGE `currency_sign` `currency` int NOT NULL AFTER `amount`;"
    );

    return $result;
}
