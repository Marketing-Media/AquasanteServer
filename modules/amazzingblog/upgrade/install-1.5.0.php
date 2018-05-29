<?php
/**
* 2007-2018 Amazzing
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
*
*  @author    Amazzing <mail@amazzing.ru>
*  @copyright 2007-2018 Amazzing
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*/

function upgrade_module_1_5_0($module_obj)
{
    if (!defined('_PS_VERSION_')) {
        exit;
    }

    // new format for image types
    $module_obj->prepareDatabase();
    $module_obj->convertImgSettingsToNewFormat($module_obj->getSettings('img'));

    // cover/main_img for categories
    $module_obj->db->execute('
        ALTER TABLE '._DB_PREFIX_.'a_blog_category
        ADD cover varchar(32) NOT NULL AFTER active,
        ADD main_img varchar(32) NOT NULL AFTER cover
    ');

    // configurable npp options
    $postlist_settings_rows = $module_obj->db->executeS('
        SELECT * FROM '._DB_PREFIX_.'a_blog_settings WHERE name = \'postlist\'
    ');
    $new_rows = array();
    foreach ($postlist_settings_rows as $row) {
        $value = Tools::jsonDecode($row['value'], true);
        $value['npp'] = $value['posts_per_page'];
        $value['npp_options'] = $module_obj->getDefaultListSettings('npp_options');
        $row['value'] = Tools::jsonEncode($value);
        $new_rows[] = '(\''.implode('\', \'', array_map('pSQL', $row)).'\')';
    }
    $module_obj->db->execute('
        REPLACE INTO '._DB_PREFIX_.'a_blog_settings VALUES '.implode(', ', $new_rows).'
    ');

    // activate new settings like shop_name_in_mt, url_parents, subcat_cover etc.
    $shop_ids = Shop::getShops(false, null, true);
    $settings_to_update = array('general', 'post', 'postlist', 'category', 'comment');
    foreach ($shop_ids as $id_shop) {
        foreach ($settings_to_update as $type) {
            $saved_settings = $module_obj->db->getValue('
                SELECT value FROM '._DB_PREFIX_.'a_blog_settings
                WHERE name = \''.pSQL($type).'\'
                AND id_shop = '.(int)$id_shop.'
            ');
            $saved_settings = Tools::jsonDecode($saved_settings, true);
            $module_obj->saveSettings($type, $saved_settings, array($id_shop));
        }
    }

    $module_obj->registerHook('actionObjectLanguageAddAfter');
    $module_obj->fillMissingLanguages();

    return true;
}
