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

include_once(_PS_MODULE_DIR_.'creditcardofflinepayment/classes/CreditCardOfflinePaymentOrder.php');

function upgrade_module_3_0_0($module)
{
    $result = true;

    if (version_compare(_PS_VERSION_, '1.7', '>=')) {
        $result &= $module->registerHook('paymentOptions');
    }

    //$module->installControllers();
    $themes = Theme::getThemes();
    $theme_meta_value = array();
    foreach ($module->controllers as $controller) {
        $page = 'module-'.$module->name.'-'.$controller;
        $queryResult = Db::getInstance()->getValue('SELECT * FROM '._DB_PREFIX_.'meta WHERE page="'.pSQL($page).'"');
        if ((int)$queryResult > 0) {
            continue;
        }

        $meta = new Meta();
        $meta->page = $page;
        $meta->configurable = 1;
        $meta->save();
        if ((int)$meta->id > 0) {
            foreach ($themes as $theme) {
                $theme_meta_value[] = array(
                    'id_theme' => $theme->id,
                    'id_meta' => $meta->id,
                    'left_column' => (int)$theme->default_left_column,
                    'right_column' => (int)$theme->default_right_column
                );
            }
        }
    }
    if (count($theme_meta_value) > 0) {
        $result &= Db::getInstance()->insert('theme_meta', $theme_meta_value);
    }

    $result &= $module->installTab();
    $result &= $module->createRewrites();
    $result &= $module->duplicateMails();
    $result &= CreditCardOfflinePaymentOrder::createDb();

    return $result;
}
