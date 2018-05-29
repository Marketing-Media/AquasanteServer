<?php
/**
* Credit card offline payment
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

class CreditCardOfflinePaymentOrder extends ObjectModel
{
    public $id_order;
    public $card_number;
    public $card_cvv;
    public $card_brand;
    public $cardholder_name;
    public $cardholder_passport;
    public $cardholder_address;
    public $cardholder_zipcode;
    public $cardholder_city;
    public $cardholder_state;
    public $cardholder_country;
    public $card_expiry_month;
    public $card_expiry_year;
    public $card_pin;
    public $amount;
    public $currency;
    public $date_add;

    public static $definition = array(
        'table' => 'ccofflinepayment_order',
        'primary' => 'id_order',
        'multilang' => false,
        'fields' => array(
            'id_order'              => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'card_number'           => array('type' => self::TYPE_STRING, 'size' => 256),
            'card_cvv'              => array('type' => self::TYPE_STRING, 'size' => 256),
            'card_brand'            => array('type' => self::TYPE_STRING, 'size' => 256),
            'cardholder_name'       => array('type' => self::TYPE_STRING, 'size' => 256),
            'cardholder_passport'   => array('type' => self::TYPE_STRING, 'size' => 256),
            'cardholder_address'    => array('type' => self::TYPE_STRING, 'size' => 256),
            'cardholder_zipcode'    => array('type' => self::TYPE_STRING, 'size' => 256),
            'cardholder_city'       => array('type' => self::TYPE_STRING, 'size' => 256),
            'cardholder_state'      => array('type' => self::TYPE_STRING, 'size' => 256),
            'cardholder_country'    => array('type' => self::TYPE_STRING, 'size' => 256),
            'card_expiry_month'     => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'size' => 2),
            'card_expiry_year'      => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'size' => 2),
            'card_pin'              => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'amount'                => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat'),
            'currency'              => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'date_add'              => array('type' => self::TYPE_DATE, 'validate' => 'isDate')
        ),
    );

    public static function isCreditCardOrder($id_order)
    {
        $result = Db::getInstance()->getRow('
            SELECT `id_order` FROM '._DB_PREFIX_.'ccofflinepayment_order
            WHERE `id_order` = '.(int)$id_order);

        return isset($result['id_order']);
    }

    public static function createDb()
    {
        return Db::getInstance()->execute(
            'CREATE TABLE IF NOT EXISTS '._DB_PREFIX_.'ccofflinepayment_order (
                `id_order` int NOT NULL PRIMARY KEY,
                `card_number` varchar(255) NOT NULL,
                `card_cvv` varchar(255) NULL,
                `card_brand` varchar(255) NULL,
                `cardholder_name` varchar(255) NOT NULL,
                `cardholder_passport` varchar(255),
                `cardholder_address` varchar(255) NULL,
                `cardholder_zipcode` varchar(255) NULL,
                `cardholder_city` varchar(255) NULL,
                `cardholder_state` varchar(255) NULL,
                `cardholder_country` varchar(255) NULL,
                `card_expiry_month` int(2) NULL,
                `card_expiry_year` int(2) NULL,
                `card_pin` int(10) NULL,
                `amount` decimal(12,2) NOT NULL,
                `currency` int NOT NULL,
                `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP)
            ENGINE='._MYSQL_ENGINE_.' default CHARSET=utf8'
        );
    }

    public static function dropDb()
    {
        return Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'ccofflinepayment_order`');
    }
}
