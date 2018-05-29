<?php
/**
* Card payment REDSYS platform (SERVIRED / SERMEPA)
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

class AdminCreditCardOfflinePaymentController extends ModuleAdminController
{
    public function __construct()
    {
        $this->bootstrap = true;
        $this->module_name = 'creditcardofflinepayment';
        $this->table = 'ccofflinepayment_order';
        $this->className = 'CreditCardOfflinePaymentOrder';
        $this->addRowAction('view');
        $this->addRowAction('delete');

        parent::__construct();

        $this->bulk_actions = array(
            'delete' => array(
                'text' => $this->l('Delete selected'),
                'confirm' => $this->l('Delete selected items?'),
                'icon' => 'icon-trash'
            )
        );

        $this->_orderBy = 'id_order';
        $this->_orderWay = 'DESC';
        $this->identifier = 'id_order';

        $this->context = Context::getContext();
        $this->_select =
            'CONCAT(LPAD(a.card_expiry_month, 2,"0"), \'/\', LPAD(card_expiry_year, 2,"0")) as expiry_date,
            CONCAT(amount, currency) as amount';
        $this->default_form_language = $this->context->language->id;

        $this->fields_list = array(
            'id_order' => array(
                'title' => $this->l('Order'),
                'orderby' => true,
                'search' => false,
            ),
            'card_number' => array(
                'title' => $this->l('Card number'),
                'orderby' => false,
                'search' => false,
            ),
            'card_cvv' => array(
                'title' => $this->l('CVC'),
                'align' => 'text-center',
                'orderby' => false,
                'search' => false,
            ),
            'card_brand' => array(
                'title' => $this->l('Issuer'),
                'align' => 'text-center',
                'orderby' => false,
                'search' => false,
            ),
            'cardholder_name' => array(
                'title' => $this->l('Name'),
                'orderby' => false,
                'search' => false,
            ),
            'cardholder_passport' => array(
                'title' => $this->l('Passport'),
                'orderby' => false,
                'search' => false,
            ),
            'cardholder_address' => array(
                'title' => $this->l('Address'),
                'orderby' => false,
                'search' => false,
            ),
            'cardholder_zipcode' => array(
                'title' => $this->l('Zipcode'),
                'orderby' => false,
                'search' => false,
            ),
            'cardholder_city' => array(
                'title' => $this->l('City'),
                'orderby' => false,
                'search' => false,
            ),
            'cardholder_state' => array(
                'title' => $this->l('State'),
                'orderby' => false,
                'search' => false,
            ),
            'cardholder_country' => array(
                'title' => $this->l('Country'),
                'orderby' => false,
                'search' => false,
            ),
            'expiry_date' => array(
                'title' => $this->l('Expiry date (MM/YY)'),
                'align' => 'text-center',
                'orderby' => false,
                'search' => false,
            ),
            'card_pin' => array(
                'title' => $this->l('PIN'),
                'align' => 'text-center',
                'callback' => 'checkPin',
                'orderby' => false,
                'search' => false,
            ),
            'amount' => array(
                'title' => $this->l('Order amount'),
                'align' => 'text-center',
                'callback' => 'formatAmount',
                'orderby' => false,
                'search' => false,
            ),
            'date_add' => array(
                'title' => $this->l('Date'),
                'class' => 'fixed-width-xs',
                'align' => 'text-right',
                'type' => 'datetime',
            ),
        );

        parent::__construct();
    }

    public static function checkPin($value)
    {
        return ($value == '0' ? '' : $value);
    }

    public static function formatAmount($value, $object)
    {
        return Tools::displayPrice($object['amount'], (int)$object['currency']);
    }

    public function initToolbar()
    {
        parent::initToolbar();

        unset($this->toolbar_btn['new']);
    }

    public function renderView()
    {
        if (!($order = $this->loadObject(true))) {
            return;
        }

        Tools::redirectAdmin($this->context->link->getAdminLink('AdminOrders').'&vieworder&id_order='.(int)$order->id_order);
    }

    public function postProcess()
    {
        if (Tools::getValue('ajax') && Tools::getValue('token') == $this->token) {
            if (!$this->action) {
                $this->action = Tools::getValue('action');
            }

            if (($this->action == 'delete') && Tools::getValue('id_order')) {
                $creditCardOfflinePaymentOrder = new CreditCardOfflinePaymentOrder((int)Tools::getValue('id_order'));
                if (Validate::isLoadedObject($creditCardOfflinePaymentOrder)
                    && $creditCardOfflinePaymentOrder->delete()) {
                    die(Tools::jsonEncode(array(
                        'hasError' => false
                    )));
                } else {
                    die(Tools::jsonEncode(array(
                        'hasError' => true,
                        'error' => $this->l("Unable to delete")
                    )));
                }
            }

            die(Tools::jsonEncode(array(
                'hasError' => true,
                'error' => $this->l("Undefined error")
            )));
        }

        parent::postProcess();
    }
}
