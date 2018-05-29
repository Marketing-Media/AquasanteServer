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

include_once(_PS_MODULE_DIR_.'creditcardofflinepayment/classes/CreditCardOfflinePaymentBrands.php');
include_once(_PS_MODULE_DIR_.'creditcardofflinepayment/classes/CreditCardOfflinePaymentOrder.php');

if (!defined('_PS_VERSION_')) {
    exit;
}

class CreditCardOfflinePayment extends PaymentModule
{
    private $errors = array();
    private $success;

    public function __construct()
    {
        $this->name = 'creditcardofflinepayment';
        $this->tab = 'payments_gateways';
        $this->version = '3.0.9';
        $this->author = 'idnovate';
        $this->controllers = array('payment', 'validation');
        $this->module_key = '9d9a3e22e4399d5d9caa8abd3cf256d6';
        $this->bootstrap = true;

        $this->currencies = true;
        $this->currencies_mode = 'checkbox';

        parent::__construct();

        $this->displayName = $this->l('Card payment');
        $this->description = $this->l('This module lets you make charges to your customer with a physical POS or another payment method.');
        $this->confirmUninstall = $this->l('Are you sure that you want to delete the module and the related data?');

        $this->warning = $this->getWarnings(false);
    }

    public function install($delete_params = true)
    {
        $this->copyMailsFolder();

        if (parent::install()
            && $this->installTab()
            && $this->registerHook('payment')
            && $this->registerHook('paymentEU')
            && $this->registerHook('paymentReturn')
            && $this->registerHook('adminOrder')
            && $this->registerHook('header')
            && $this->registerHook('updateOrderStatus')
            && (version_compare(_PS_VERSION_, '1.7', '<') || version_compare(_PS_VERSION_, '1.7', '>=') && $this->registerHook('paymentOptions'))
            //Init variables
            && Configuration::updateValue('CCOFFLINE_SHOW_FORM', 0)
            && Configuration::updateValue('CCOFFLINE_MINIMUM_AMOUNT', '')
            && Configuration::updateValue('CCOFFLINE_MAXIMUM_AMOUNT', '')
            && Configuration::updateValue('CCOFFLINE_REQUIREISSUERNAME', 1)
            && Configuration::updateValue('CCOFFLINE_REQUIREDISSUERNAME', 1)
            && Configuration::updateValue('CCOFFLINE_REQUIRECED', 0)
            && Configuration::updateValue('CCOFFLINE_REQUIREDCED', 0)
            && Configuration::updateValue('CCOFFLINE_REQUIREADDRESS', 0)
            && Configuration::updateValue('CCOFFLINE_REQUIREDADDRESS', 0)
            && Configuration::updateValue('CCOFFLINE_REQUIREZIPCODE', 0)
            && Configuration::updateValue('CCOFFLINE_REQUIREDZIPCODE', 0)
            && Configuration::updateValue('CCOFFLINE_REQUIRECITY', 0)
            && Configuration::updateValue('CCOFFLINE_REQUIREDCITY', 0)
            && Configuration::updateValue('CCOFFLINE_REQUIRESTATE', 0)
            && Configuration::updateValue('CCOFFLINE_REQUIREDSTATE', 0)
            && Configuration::updateValue('CCOFFLINE_REQUIRECOUNTRY', 0)
            && Configuration::updateValue('CCOFFLINE_REQUIREDCOUNTRY', 0)
            && Configuration::updateValue('CCOFFLINE_REQUIRECARDNUMBER', 1)
            && Configuration::updateValue('CCOFFLINE_REQUIREDCARDNUMBER', 1)
            && Configuration::updateValue('CCOFFLINE_REQUIRECVV', 1)
            && Configuration::updateValue('CCOFFLINE_REQUIREDCVV', 1)
            && Configuration::updateValue('CCOFFLINE_REQUIREISSUER', 1)
            && Configuration::updateValue('CCOFFLINE_REQUIREDISSUER', 1)
            && Configuration::updateValue('CCOFFLINE_REQUIREEXP', 1)
            && Configuration::updateValue('CCOFFLINE_REQUIREDEXP', 1)
            && Configuration::updateValue('CCOFFLINE_REQUIREPIN', 0)
            && Configuration::updateValue('CCOFFLINE_REQUIREDPIN', 0)
            && Configuration::updateValue('CCOFFLINE_PAYMENT_SIZE', 1)
            && Configuration::updateValue('CCOFFLINE_YEARS', 5)
            && Configuration::updateValue('CCOFFLINE_LEFT_COLUMN', 0)
            && Configuration::updateValue('CCOFFLINE_RIGHT_COLUMN', 0)
            && Configuration::updateValue('CCOFFLINE_WORKING_MODE', 2)
            && Configuration::updateValue('CCOFFLINE_ADMIN_MAIL_LANG', 1)
            && Configuration::updateValue('CCOFFLINE_DISPLAYISSUERS', 1)
            && Configuration::updateValue('CCOFFLINE_DISPLAYICONS', 1)
            //Create new order state
            && $this->creditCardOfflinePaymentStatesSetup()
            //Create tables
            && (!$delete_params || ($delete_params && CreditCardOfflinePaymentOrder::createDb()))
            //Create rewrites
            && $this->createRewrites()
            //Duplicate mails
            && $this->duplicateMails()) {
            return true;
        }

        return false;
    }

    public function uninstall($delete_params = true)
    {
        if (parent::uninstall()
            && $this->uninstallTab()
            && (!$delete_params || ($delete_params && CreditCardOfflinePaymentOrder::dropDb()))
            && Configuration::deleteByName('CCOFFLINE_SHOW_FORM')
            && Configuration::deleteByName('CCOFFLINE_MINIMUM_AMOUNT')
            && Configuration::deleteByName('CCOFFLINE_MAXIMUM_AMOUNT')
            && Configuration::deleteByName('CCOFFLINE_REQUIREISSUERNAME')
            && Configuration::deleteByName('CCOFFLINE_REQUIREDISSUERNAME')
            && Configuration::deleteByName('CCOFFLINE_REQUIREADDRESS')
            && Configuration::deleteByName('CCOFFLINE_REQUIREDADDRESS')
            && Configuration::deleteByName('CCOFFLINE_REQUIREZIPCODE')
            && Configuration::deleteByName('CCOFFLINE_REQUIREDZIPCODE')
            && Configuration::deleteByName('CCOFFLINE_REQUIRECARDNUMBER')
            && Configuration::deleteByName('CCOFFLINE_REQUIREDCARDNUMBER')
            && Configuration::deleteByName('CCOFFLINE_REQUIREISSUER')
            && Configuration::deleteByName('CCOFFLINE_REQUIREEXP')
            && Configuration::deleteByName('CCOFFLINE_REQUIRECVV')
            && Configuration::deleteByName('CCOFFLINE_REQUIRECITY')
            && Configuration::deleteByName('CCOFFLINE_REQUIREDCITY')
            && Configuration::deleteByName('CCOFFLINE_REQUIRESTATE')
            && Configuration::deleteByName('CCOFFLINE_REQUIREDSTATE')
            && Configuration::deleteByName('CCOFFLINE_REQUIRECOUNTRY')
            && Configuration::deleteByName('CCOFFLINE_REQUIREDCOUNTRY')
            && Configuration::deleteByName('CCOFFLINE_REQUIRECED')
            && Configuration::deleteByName('CCOFFLINE_DISPLAYISSUERS')
            && Configuration::deleteByName('CCOFFLINE_DISPLAYICONS')
            && Configuration::deleteByName('CCOFFLINE_DATA_ISSUERS')
            && Configuration::deleteByName('CCOFFLINE_ADMIN_MAIL')
            && Configuration::deleteByName('CCOFFLINE_REQUIREDCVV')
            && Configuration::deleteByName('CCOFFLINE_REQUIREDISSUER')
            && Configuration::deleteByName('CCOFFLINE_REQUIREDEXP')
            && Configuration::deleteByName('CCOFFLINE_REQUIREDCED')
            && Configuration::deleteByName('CCOFFLINE_WORKING_MODE')
            && Configuration::deleteByName('CCOFFLINE_ADMIN_MAIL_LANG')
            && Configuration::deleteByName('CCOFFLINE_DATA_OS_REM')
            && Configuration::deleteByName('CCOFFLINE_REQUIREPIN')
            && Configuration::deleteByName('CCOFFLINE_REQUIREDPIN')
            && Configuration::deleteByName('CCOFFLINE_PAYMENT_SIZE')
            && Configuration::deleteByName('CCOFFLINE_YEARS')
            && Configuration::deleteByName('CCOFFLINE_LEFT_COLUMN')
            && Configuration::deleteByName('CCOFFLINE_RIGHT_COLUMN')) {
            return true;
        }

        return false;
    }

    public function reset()
    {
        if (!$this->uninstall(false)) {
            return false;
        }

        if (!$this->install(false)) {
            return false;
        }

        return true;
    }

    public function installTab()
    {
        if (!Tab::getIdFromClassName('AdminCreditCardOfflinePayment')) {
            $translations = array();
            $translations['tabName']['en'] = 'Orders paid with card';
            $translations['tabName']['es'] = 'Pedidos pagados con tarjeta';

            $tab = new Tab();
            $tab->active = 1;
            $tab->class_name = 'AdminCreditCardOfflinePayment';

            foreach (Language::getLanguages(true) as $lang) {
                $tab->name[$lang['id_lang']] = isset($translations['tabName'][$lang['iso_code']]) ? $translations['tabName'][$lang['iso_code']] : $translations['tabName']['en'];
            }

            $tab->id_parent = Tab::getIdFromClassName('AdminParentOrders');
            $tab->module = $this->name;

            return $tab->add();
        }
    }

    public function uninstallTab()
    {
        $id_tab = (int)Tab::getIdFromClassName('AdminCreditCardOfflinePayment');

        if ($id_tab) {
            $tab = new Tab($id_tab);
            return $tab->delete();
        }

        return true;
    }

    private function creditCardOfflinePaymentStatesSetup()
    {
        $translations = array();
        $translations['en'] = 'Card payment - Pending';
        $translations['es'] = 'Pago con tarjeta - Pendiente';

        if (!Configuration::get('CCOFFLINE_DATA_OS_INITIAL')) {
            $os = new OrderState();

            foreach (Language::getLanguages(true) as $lang) {
                $os->name[$lang['id_lang']] = isset($translations[$lang['iso_code']]) ? $translations[$lang['iso_code']] : $translations['en'];
            }

            $os->send_email = false;
            $os->invoice = 0;
            $os->color = '#FFFFAA';
            $os->unremovable = false;
            $os->logable = 0;
            $os->add();

            Configuration::updateValue('CCOFFLINE_DATA_OS_INITIAL', $os->id);

            copy(_PS_MODULE_DIR_.$this->name.'/logo.gif', _PS_IMG_DIR_.'os/'.$os->id.'.gif');
        }

        return true;
    }

    public function createRewrites()
    {
        $translations = array();

        //Initialize multilang configuration values
        $translations['payment']['en'] = 'card-payment';
        $translations['payment']['es'] = 'pago-tarjeta';

        $translations['validation']['en'] = 'card-payment-validation';
        $translations['validation']['es'] = 'pago-tarjeta-validacion';

        foreach ($this->controllers as $controller) {
            $page = 'module-'.$this->name.'-'.$controller;
            $result = Db::getInstance()->getValue('SELECT `id_meta` FROM '._DB_PREFIX_.'meta WHERE page="'.pSQL($page).'"');

            if ($result) {
                $meta = new Meta((int)$result);

                $languages = Language::getLanguages(false);
                foreach ($languages as $lang) {
                    $meta->url_rewrite[$lang['id_lang']] = isset($translations[$controller][$lang['iso_code']]) ? $translations[$controller][$lang['iso_code']] : $translations[$controller]['en'];
                }

                $meta->save();
            }
        }

        return true;
    }

    public function duplicateMails()
    {
        $mailTemplatesLang = array('en', 'es');
        $version = Tools::substr(str_replace('.', '_', _PS_VERSION_), 0, 3);

        $languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            if (!in_array($lang['iso_code'], $mailTemplatesLang)
                && file_exists(_PS_MODULE_DIR_.$this->name.'/mails/'.$version.'/en/')) {
                $this->recurseCopy(_PS_MODULE_DIR_.$this->name.'/mails/'.$version.'/en/', _PS_MODULE_DIR_.$this->name.'/mails/'.$version.'/'.$lang['iso_code'].'/');
            }
        }

        return true;
    }

    public function getContent()
    {
        $this->context->controller->addCSS($this->_path.'views/css/creditcardofflinepayment_back.css');

        if (version_compare(_PS_VERSION_, '1.6', '>=')) {
            $this->context->controller->addJS($this->_path.'views/js/creditcardofflinepayment_back.js');
        } else {
            $this->context->controller->addJS($this->_path.'views/js/creditcardofflinepayment_back_15.js');
        }

        $html = '';
        if ($warnings = $this->getWarnings()) {
            if (version_compare(_PS_VERSION_, '1.6', '<')) {
                foreach ($warnings as $warning) {
                    $html .= $this->displayError($warning);
                }
            } else {
                $html .= $this->displayError($warnings);
            }
        }

        if (((bool)Tools::isSubmit('submitCreditCardOfflineModule')) == true) {
            $html .= $this->postProcess();
        }

        return $html.$this->renderForm();
    }

    protected function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitCreditCardOfflineModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        $html = '';
        $html .= $helper->generateForm($this->getConfigForm());

        $this->context->smarty->assign(array(
            'metaLink'          => $this->context->link->getAdminLink('AdminMeta'),
            'paymentLink'       => $this->context->link->getModuleLink($this->name, 'payment', array(), true),
            'validationLink'    => $this->context->link->getModuleLink($this->name, 'validation', array(), true),
        ));

        if (version_compare(_PS_VERSION_, '1.6', '>=')) {
            $html .= $this->context->smarty->fetch($this->local_path.'views/templates/admin/url.tpl');

            $this->context->smarty->assign(array(
                'this_path'     => $this->_path,
                'support_id'    => '6270'
            ));

            $available_iso_codes = array('en', 'es');
            $default_iso_code = 'en';
            $template_iso_suffix = in_array($this->context->language->iso_code, $available_iso_codes) ? $this->context->language->iso_code : $default_iso_code;
            $html .= $this->context->smarty->fetch($this->local_path.'views/templates/admin/company/information_'.$template_iso_suffix.'.tpl');
        }

        return $html;
    }

    protected function getConfigForm()
    {
        $currency = new Currency((int)(Configuration::get('PS_CURRENCY_DEFAULT')));

        $fields = array();

        $fields[]['form'] = array(
            'legend' => array(
                'title' => $this->l('Module configuration'),
                'icon' => 'icon-cogs',
            ),
            /* TODO - Default currency for values */
            'input' => array(
                array(
                    'col' => 2,
                    'type' => 'text',
                    'name' => 'CCOFFLINE_MINIMUM_AMOUNT',
                    'label' => $this->l('Minimum cart amount to enable this payment method'),
                    'prefix' => $currency->getSign(),
                    'class' => 't',
                    'hint' => $this->l('Minimum cart amount including taxes, discounts and shipping cost. This payment method will be only shown if cart amount is at least this amount. Leave empty if you don\'t want to define a minimum amount.'),
                ),
                array(
                    'col' => 2,
                    'type' => 'text',
                    'name' => 'CCOFFLINE_MAXIMUM_AMOUNT',
                    'label' => $this->l('Maximum cart amount to enable this payment method'),
                    'prefix' => $currency->getSign(),
                    'class' => 't',
                    'hint' => $this->l('Maximum cart amount including taxes, discounts and shipping cost. This payment method will be only shown if cart amount is at least this amount. Leave empty if you don\'t want to define a minimum amount.'),
                ),
                array(
                    'type' => 'radio',
                    'label' => $this->l('Working mode'),
                    'name' => 'CCOFFLINE_WORKING_MODE',
                    'is_bool' => false,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_WORKING_MODE_mail',
                            'value' => 1,
                            'label' => $this->l('Send card information by email and store in database')
                        ),
                        array(
                            'id' => 'CCOFFLINE_WORKING_MODE_db',
                            'value' => 2,
                            'label' => $this->l('Store all card information in database')
                        ),
                    ),
                    'desc' => array(
                        $this->l('- If you set "Send card information by email and store in database", part of the card number will be stored in database and the other half sent by email. You will have to match the information received from email with the one from Backoffice'),
                        $this->l('- If you set "Store all card information in database", whole card number will be stored in database and you will be able to check it at order view.')
                    ),
                ),
                array(
                    'col' => 3,
                    'type' => 'text',
                    'name' => 'CCOFFLINE_ADMIN_MAIL',
                    'label' => $this->l('Send card information to this mail address'),
                    'class' => 't',
                ),
                array(
                    'col' => 9,
                    'type' => 'free',
                    'label' => '',
                    'name' => 'CCOFFLINE_WORKING_MODE_EXAMPLE',
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('Order status for an order paid with this payment method'),
                    'name' => 'CCOFFLINE_DATA_OS_INITIAL',
                    'options' => array(
                        'query' => OrderState::getOrderStates($this->context->employee->id_lang),
                        'id' => 'id_order_state',
                        'name' => 'name',
                    ),
                    'hint' => $this->l('An order paid with this payment method will be created with this status'),
                ),
                array(
                    'col' => 6,
                    'type' => 'free',
                    'label' => $this->l('Delete card info when the order status change to one of these:'),
                    'name' => 'CCOFFLINE_DATA_OS_REM',
                    'hint' => $this->l('When you change an order paid with this method to this status, the card information will be removed automatically'),
                ),
            ),
            'submit' => array(
                'title' => $this->l('Save'),
                'type' => 'submit',
                'name' => 'submitCreditCardOfflineModule',
            ),
        );

        if (!version_compare(_PS_VERSION_, '1.6', '<') && !version_compare(_PS_VERSION_, '1.7', '>')) {
            $CCOFFLINE_PAYMENT_SIZE = array(
                'type' => 'select',
                'label' => $this->l('Payment tab size'),
                'name' => 'CCOFFLINE_PAYMENT_SIZE',
                'cols' => 1,
                'options' => array(
                    'query' => array(
                        array(
                            'id' => 'col-md-12',
                            'name' => '100%'
                        ),
                        array(
                            'id' => 'col-md-9',
                            'name' => '75%'
                        ),
                        array(
                            'id' => 'col-md-6',
                            'name' => '50%'
                        ),
                    ),
                    'id' => 'id',
                    'name' => 'name'
                ),
                'hint' => $this->l('Choose the tab size that fits better with your template'),
            );
            $CCOFFLINE_PAYMENT_SIZE_PREVIEW = array(
                'col' => 9,
                'type' => 'free',
                'label' => '',
                'name' => 'CCOFFLINE_PAYMENT_SIZE_PREVIEW',
            );
        } else {
            $CCOFFLINE_PAYMENT_SIZE = array(
                'type' => 'free',
                'name' => 'CCOFFLINE_PAYMENT_SIZE'
            );
            $CCOFFLINE_PAYMENT_SIZE_PREVIEW = array(
                'type' => 'free',
                'name' => 'CCOFFLINE_PAYMENT_SIZE_PREVIEW'
            );
        }

        if (!Module::isEnabled('onepagecheckoutps')) {
            $fields[]['form'] = array(
                'legend' => array(
                    'title' => $this->l('Form payment tab configuration'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                        'label' => $this->l('Show card form at payment tab'),
                        'name' => 'CCOFFLINE_SHOW_FORM',
                        'is_bool' => true,
                        'class' => 't',
                        'values' => array(
                            array(
                                'id' => 'CCOFFLINE_SHOW_FORM_on',
                                'value' => 1,
                                'label' => $this->l('Yes')),
                            array(
                                'id' => 'CCOFFLINE_SHOW_FORM_off',
                                'value' => 0,
                                'label' => $this->l('No')),
                        ),
                        'hint' => $this->l('If you enable this option, card form will appear in the payment checkout instead of in a new window. This option could not be compatible with some OPC module.'),
                    ),
                    $CCOFFLINE_PAYMENT_SIZE,
                    $CCOFFLINE_PAYMENT_SIZE_PREVIEW,
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                    'type' => 'submit',
                    'name' => 'submitCreditCardOfflineModule',
                ),
            );
        } else {
            Configuration::updateValue('CCOFFLINE_SHOW_FORM', 0);
        }

        if (version_compare(_PS_VERSION_, '1.6', '<=')) {
            $CCOFFLINE_DISPLAYICONS = array(
                'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                'label' => $this->l('Display icons beside input fields'),
                'name' => 'CCOFFLINE_DISPLAYICONS',
                'is_bool' => true,
                'class' => 't',
                'values' => array(
                    array(
                        'id' => 'CCOFFLINE_DISPLAYICONS_on',
                        'value' => 1,
                        'label' => $this->l('Yes')),
                    array(
                        'id' => 'CCOFFLINE_DISPLAYICONS_off',
                        'value' => 0,
                        'label' => $this->l('No')),
                ),
            );
        } else {
            $CCOFFLINE_DISPLAYICONS = null;
        }

        $fields[]['form'] = array(
            'legend' => array(
            'title' => $this->l('Payment form configuration'),
            'icon' => 'icon-cogs',
            ),
            'input' => array(
                array(
                    'type' => 'select',
                    'label' => $this->l('Payment form style'),
                    'name' => 'CCOFFLINE_PAYMENT_STYLE',
                    'cols' => 1,
                    'options' => array(
                        'query' => array(
                            array(
                                'id' => '1',
                                'name' => $this->l('Default')
                            ),
                            array(
                                'id' => '2',
                                'name' => $this->l('Card preview')
                            ),
                        ),
                        'id' => 'id',
                        'name' => 'name'
                    )
                ),
                array(
                    'col' => 9,
                    'type' => 'free',
                    'label' => '',
                    'name' => 'CCOFFLINE_STYLE_PREVIEW',
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Display left column?'),
                    'name' => 'CCOFFLINE_LEFT_COLUMN',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_LEFT_COLUMN_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_LEFT_COLUMN_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                    'hint' => $this->l('Only if your theme is compatible'),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Display right column?'),
                    'name' => 'CCOFFLINE_RIGHT_COLUMN',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_RIGHT_COLUMN_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_RIGHT_COLUMN_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                    'hint' => $this->l('Only if your theme is compatible'),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Display accepted card issuers block'),
                    'name' => 'CCOFFLINE_DISPLAYISSUERS',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_DISPLAYISSUERS_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_DISPLAYISSUERS_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                $CCOFFLINE_DISPLAYICONS,
                array(
                    'col' => 6,
                    'type' => 'free',
                    'label' => $this->l('Card issuers'),
                    'name' => 'CCOFFLINE_DATA_ISSUERS',
                ),
            ),
            'submit' => array(
                'title' => $this->l('Save'),
                'type' => 'submit',
                'name' => 'submitCreditCardOfflineModule',
            ),
        );

        $fields[]['form'] = array(
            'legend' => array(
            'title' => $this->l('Card configuration'),
            'icon' => 'icon-cogs',
            ),
            'input' => array(
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Request for card holder name'),
                    'name' => 'CCOFFLINE_REQUIREISSUERNAME',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIREISSUERNAME_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIREISSUERNAME_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Card holder name required'),
                    'name' => 'CCOFFLINE_REQUIREDISSUERNAME',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIREDISSUERNAME_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIREDISSUERNAME_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Request for ID Card/Passport'),
                    'name' => 'CCOFFLINE_REQUIRECED',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIRECED_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIRECED_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('ID Card/Passport required'),
                    'name' => 'CCOFFLINE_REQUIREDCED',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIREDCED_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIREDCED_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Request for address'),
                    'name' => 'CCOFFLINE_REQUIREADDRESS',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIREADDRESS_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIREADDRESS_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Address required'),
                    'name' => 'CCOFFLINE_REQUIREDADDRESS',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIREDADDRESS_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIREDADDRESS_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Request for zip code'),
                    'name' => 'CCOFFLINE_REQUIREZIPCODE',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIREZIPCODE_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIREZIPCODE_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Zip code required'),
                    'name' => 'CCOFFLINE_REQUIREDADDRESS',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIREDZIPCODE_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIREDZIPCODE_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Request for city'),
                    'name' => 'CCOFFLINE_REQUIRECITY',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIRECITY_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIRECITY_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('City required'),
                    'name' => 'CCOFFLINE_REQUIREDCITY',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIREDCITY_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIREDCITY_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Request for state'),
                    'name' => 'CCOFFLINE_REQUIRESTATE',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIRESTATE_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIRESTATE_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('State required'),
                    'name' => 'CCOFFLINE_REQUIREDSTATE',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIREDSTATE_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIREDSTATE_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Request for country'),
                    'name' => 'CCOFFLINE_REQUIRECOUNTRY',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIRECOUNTRY_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIRECOUNTRY_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Country required'),
                    'name' => 'CCOFFLINE_REQUIREDCOUNTRY',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIREDCOUNTRY_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIREDCOUNTRY_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Request for card number'),
                    'name' => 'CCOFFLINE_REQUIRECARDNUMBER',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIRECARDNUMBER_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIRECARDNUMBER_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Card number required'),
                    'name' => 'CCOFFLINE_REQUIREDCARDNUMBER',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIREDCARDNUMBER_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIREDCARDNUMBER_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Request for card CVC number'),
                    'name' => 'CCOFFLINE_REQUIRECVV',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIRECVV_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIRECVV_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Card CVC number required'),
                    'name' => 'CCOFFLINE_REQUIREDCVV',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIREDCVV_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIREDCVV_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Request for card expiration date'),
                    'name' => 'CCOFFLINE_REQUIREEXP',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIREEXP_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIREEXP_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Card expiration date required'),
                    'name' => 'CCOFFLINE_REQUIREDEXP',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIREDEXP_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIREDEXP_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                array(
                    'type' => 'select',
                    'label' => $this->l('Number of expiring years'),
                    'name' => 'CCOFFLINE_YEARS',
                    'cols' => 1,
                    'options' => array(
                        'query' => array(
                            array(
                                'id' => '1',
                                'name' => '1'
                            ),
                            array(
                                'id' => '2',
                                'name' => '2'
                            ),
                            array(
                                'id' => '3',
                                'name' => '3'
                            ),
                            array(
                                'id' => '4',
                                'name' => '4'
                            ),
                            array(
                                'id' => '5',
                                'name' => '5'
                            ),
                            array(
                                'id' => '6',
                                'name' => '6'
                            ),
                            array(
                                'id' => '7',
                                'name' => '7'
                            ),
                            array(
                                'id' => '8',
                                'name' => '8'
                            ),
                            array(
                                'id' => '9',
                                'name' => '9'
                            ),
                            array(
                                'id' => '10',
                                'name' => '10'
                            ),
                            array(
                                'id' => '15',
                                'name' => '15'
                            ),
                            array(
                                'id' => '20',
                                'name' => '20'
                            ),
                        ),
                        'id' => 'id',
                        'name' => 'name'
                    )
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Request for card issuer'),
                    'name' => 'CCOFFLINE_REQUIREISSUER',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIREISSUER_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIREISSUER_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Card issuer required'),
                    'name' => 'CCOFFLINE_REQUIREDISSUER',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIREDISSUER_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIREDISSUER_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Request for card card pin code'),
                    'name' => 'CCOFFLINE_REQUIREPIN',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIREPIN_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIREPIN_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
                array(
                    'type' => (version_compare(_PS_VERSION_, '1.6', '>=')) ? 'switch' : 'radio',
                    'label' => $this->l('Card pin code required'),
                    'name' => 'CCOFFLINE_REQUIREDPIN',
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'CCOFFLINE_REQUIREDPIN_on',
                            'value' => 1,
                            'label' => $this->l('Yes')),
                        array(
                            'id' => 'CCOFFLINE_REQUIREDPIN_off',
                            'value' => 0,
                            'label' => $this->l('No')),
                    ),
                ),
            ),
            'submit' => array(
                'title' => $this->l('Save'),
                'type' => 'submit',
                'name' => 'submitCreditCardOfflineModule',
            ),
        );

        return $fields;
    }

    protected function getConfigValues()
    {
        $fields = array();

        $fields['CCOFFLINE_SHOW_FORM'] = Tools::getValue(
            'CCOFFLINE_SHOW_FORM',
            Configuration::get('CCOFFLINE_SHOW_FORM')
        );
        $fields['CCOFFLINE_ADMIN_MAIL'] = Tools::getValue(
            'CCOFFLINE_ADMIN_MAIL',
            Configuration::get('CCOFFLINE_ADMIN_MAIL')
        );
        $fields['CCOFFLINE_MINIMUM_AMOUNT'] = Tools::getValue(
            'CCOFFLINE_MINIMUM_AMOUNT',
            Configuration::get('CCOFFLINE_MINIMUM_AMOUNT')
        );
        $fields['CCOFFLINE_MAXIMUM_AMOUNT'] = Tools::getValue(
            'CCOFFLINE_MAXIMUM_AMOUNT',
            Configuration::get('CCOFFLINE_MAXIMUM_AMOUNT')
        );
        $fields['CCOFFLINE_REQUIREISSUERNAME'] = Tools::getValue(
            'CCOFFLINE_REQUIREISSUERNAME',
            Configuration::get('CCOFFLINE_REQUIREISSUERNAME')
        );
        $fields['CCOFFLINE_REQUIREDISSUERNAME'] = Tools::getValue(
            'CCOFFLINE_REQUIREDISSUERNAME',
            Configuration::get('CCOFFLINE_REQUIREDISSUERNAME')
        );
        $fields['CCOFFLINE_REQUIRECED'] = Tools::getValue(
            'CCOFFLINE_REQUIRECED',
            Configuration::get('CCOFFLINE_REQUIRECED')
        );
        $fields['CCOFFLINE_REQUIREDCED'] = Tools::getValue(
            'CCOFFLINE_REQUIREDCED',
            Configuration::get('CCOFFLINE_REQUIREDCED')
        );
        $fields['CCOFFLINE_REQUIREADDRESS'] = Tools::getValue(
            'CCOFFLINE_REQUIREADDRESS',
            Configuration::get('CCOFFLINE_REQUIREADDRESS')
        );
        $fields['CCOFFLINE_REQUIREDADDRESS'] = Tools::getValue(
            'CCOFFLINE_REQUIREDADDRESS',
            Configuration::get('CCOFFLINE_REQUIREDADDRESS')
        );
        $fields['CCOFFLINE_REQUIREZIPCODE'] = Tools::getValue(
            'CCOFFLINE_REQUIREZIPCODE',
            Configuration::get('CCOFFLINE_REQUIREZIPCODE')
        );
        $fields['CCOFFLINE_REQUIREDZIPCODE'] = Tools::getValue(
            'CCOFFLINE_REQUIREDZIPCODE',
            Configuration::get('CCOFFLINE_REQUIREDZIPCODE')
        );
        $fields['CCOFFLINE_REQUIRECITY'] = Tools::getValue(
            'CCOFFLINE_REQUIRECITY',
            Configuration::get('CCOFFLINE_REQUIRECITY')
        );
        $fields['CCOFFLINE_REQUIREDCITY'] = Tools::getValue(
            'CCOFFLINE_REQUIREDCITY',
            Configuration::get('CCOFFLINE_REQUIREDCITY')
        );
        $fields['CCOFFLINE_REQUIRESTATE'] = Tools::getValue(
            'CCOFFLINE_REQUIRESTATE',
            Configuration::get('CCOFFLINE_REQUIRESTATE')
        );
        $fields['CCOFFLINE_REQUIREDSTATE'] = Tools::getValue(
            'CCOFFLINE_REQUIREDSTATE',
            Configuration::get('CCOFFLINE_REQUIREDSTATE')
        );
        $fields['CCOFFLINE_REQUIRECOUNTRY'] = Tools::getValue(
            'CCOFFLINE_REQUIRECOUNTRY',
            Configuration::get('CCOFFLINE_REQUIRECOUNTRY')
        );
        $fields['CCOFFLINE_REQUIREDCOUNTRY'] = Tools::getValue(
            'CCOFFLINE_REQUIREDCOUNTRY',
            Configuration::get('CCOFFLINE_REQUIREDCOUNTRY')
        );
        $fields['CCOFFLINE_REQUIRECARDNUMBER'] = Tools::getValue(
            'CCOFFLINE_REQUIRECARDNUMBER',
            Configuration::get('CCOFFLINE_REQUIRECARDNUMBER')
        );
        $fields['CCOFFLINE_REQUIREDCARDNUMBER'] = Tools::getValue(
            'CCOFFLINE_REQUIREDCARDNUMBER',
            Configuration::get('CCOFFLINE_REQUIREDCARDNUMBER')
        );
        $fields['CCOFFLINE_REQUIREISSUER'] = Tools::getValue(
            'CCOFFLINE_REQUIREISSUER',
            Configuration::get('CCOFFLINE_REQUIREISSUER')
        );
        $fields['CCOFFLINE_REQUIREDISSUER'] = Tools::getValue(
            'CCOFFLINE_REQUIREDISSUER',
            Configuration::get('CCOFFLINE_REQUIREDISSUER')
        );
        $fields['CCOFFLINE_REQUIREEXP'] = Tools::getValue(
            'CCOFFLINE_REQUIREEXP',
            Configuration::get('CCOFFLINE_REQUIREEXP')
        );
        $fields['CCOFFLINE_REQUIREDEXP'] = Tools::getValue(
            'CCOFFLINE_REQUIREDEXP',
            Configuration::get('CCOFFLINE_REQUIREDEXP')
        );
        $fields['CCOFFLINE_REQUIRECVV'] = Tools::getValue(
            'CCOFFLINE_REQUIRECVV',
            Configuration::get('CCOFFLINE_REQUIRECVV')
        );
        $fields['CCOFFLINE_REQUIREDCVV'] = Tools::getValue(
            'CCOFFLINE_REQUIREDCVV',
            Configuration::get('CCOFFLINE_REQUIREDCVV')
        );
        $fields['CCOFFLINE_REQUIREPIN'] = Tools::getValue(
            'CCOFFLINE_REQUIREPIN',
            Configuration::get('CCOFFLINE_REQUIREPIN')
        );
        $fields['CCOFFLINE_REQUIREDPIN'] = Tools::getValue(
            'CCOFFLINE_REQUIREDPIN',
            Configuration::get('CCOFFLINE_REQUIREDPIN')
        );
        $fields['CCOFFLINE_PAYMENT_STYLE'] = Tools::getValue(
            'CCOFFLINE_PAYMENT_STYLE',
            Configuration::get('CCOFFLINE_PAYMENT_STYLE')
        );
        $fields['CCOFFLINE_PAYMENT_SIZE'] = Tools::getValue(
            'CCOFFLINE_PAYMENT_SIZE',
            Configuration::get('CCOFFLINE_PAYMENT_SIZE')
        );
        $fields['CCOFFLINE_YEARS'] = Tools::getValue(
            'CCOFFLINE_YEARS',
            Configuration::get('CCOFFLINE_YEARS')
        );
        $fields['CCOFFLINE_LEFT_COLUMN'] = Tools::getValue(
            'CCOFFLINE_LEFT_COLUMN',
            Configuration::get('CCOFFLINE_LEFT_COLUMN')
        );
        $fields['CCOFFLINE_RIGHT_COLUMN'] = Tools::getValue(
            'CCOFFLINE_RIGHT_COLUMN',
            Configuration::get('CCOFFLINE_RIGHT_COLUMN')
        );
        $fields['CCOFFLINE_WORKING_MODE'] = Tools::getValue(
            'CCOFFLINE_WORKING_MODE',
            Configuration::get('CCOFFLINE_WORKING_MODE')
        );
        $fields['CCOFFLINE_DATA_OS_INITIAL'] = Tools::getValue(
            'CCOFFLINE_DATA_OS_INITIAL',
            Configuration::get('CCOFFLINE_DATA_OS_INITIAL')
        );
        $fields['CCOFFLINE_DATA_OS_REM'] = Tools::getValue(
            'CCOFFLINE_DATA_OS_REM',
            Configuration::get('CCOFFLINE_DATA_OS_REM')
        );
        $fields['CCOFFLINE_DISPLAYISSUERS'] = Tools::getValue(
            'CCOFFLINE_DISPLAYISSUERS',
            Configuration::get('CCOFFLINE_DISPLAYISSUERS')
        );
        $fields['CCOFFLINE_DISPLAYICONS'] = Tools::getValue(
            'CCOFFLINE_DISPLAYICONS',
            Configuration::get('CCOFFLINE_DISPLAYICONS')
        );

        $available_iso_codes = array('en', 'es');
        $default_iso_code = 'en';
        $this->context->smarty->assign(array(
            'this_path' => $this->_path,
            'states' => OrderState::getOrderStates($this->context->employee->id_lang),
            'CCOFFLINE_DATA_OS_REM' => Tools::getValue('CCOFFLINE_DATA_OS_REM', explode(',', Configuration::get('CCOFFLINE_DATA_OS_REM'))),
            'issuers' => CreditCardOfflinePaymentBrands::getIssuers(),
            'available_iso_code'=> in_array($this->context->language->iso_code, $available_iso_codes) ? $this->context->language->iso_code : $default_iso_code,
        ));

        $fields['CCOFFLINE_WORKING_MODE_EXAMPLE'] = $this->context->smarty->fetch($this->local_path.'views/templates/admin/working_mode.tpl');
        $fields['CCOFFLINE_DATA_OS_REM'] = $this->context->smarty->fetch($this->local_path.'views/templates/admin/order_status.tpl');
        $fields['CCOFFLINE_PAYMENT_SIZE_PREVIEW'] = $this->context->smarty->fetch($this->local_path.'views/templates/admin/size_preview.tpl');

        if (version_compare(_PS_VERSION_, '1.6', '<') || version_compare(_PS_VERSION_, '1.7', '>')) {
            $fields['CCOFFLINE_PAYMENT_SIZE'] = '';
        }

        $fields['CCOFFLINE_STYLE_PREVIEW'] = $this->context->smarty->fetch($this->local_path.'views/templates/admin/style_preview.tpl');
        $fields['CCOFFLINE_DATA_ISSUERS'] = $this->context->smarty->fetch($this->local_path.'views/templates/admin/card_issuers.tpl');

        return $fields;
    }

    /*
    Validación del Backoffice
    */
    private function postProcess()
    {
        $html = '';
        $errors = array();

        if (Tools::getValue('CCOFFLINE_MINIMUM_AMOUNT')
            && !Validate::isPrice(Tools::getValue('CCOFFLINE_MINIMUM_AMOUNT'))) {
            $errors[] = $this->l('Minimum amount is not valid.');
        }

        if (Tools::getValue('CCOFFLINE_MAXIMUM_AMOUNT')
            && !Validate::isPrice(Tools::getValue('CCOFFLINE_MAXIMUM_AMOUNT'))) {
            $errors[] = $this->l('Maximum amount is not valid.');
        }

        if (Tools::getValue('CCOFFLINE_MINIMUM_AMOUNT')
            && Tools::getValue('CCOFFLINE_MAXIMUM_AMOUNT')
            && (Tools::getValue('CCOFFLINE_MINIMUM_AMOUNT') >= Tools::getValue('CCOFFLINE_MAXIMUM_AMOUNT'))) {
            $errors[] = $this->l('Minimum amount can not be higher than maximum amount.');
        }

        if (Tools::getValue('CCOFFLINE_WORKING_MODE') == 1) {
            if (!Tools::getValue('CCOFFLINE_ADMIN_MAIL')) {
                $errors[] = $this->l('The mail address can not be empty.');
            } elseif (!Validate::isEmail(Tools::getValue('CCOFFLINE_ADMIN_MAIL'))) {
                $errors[] = $this->l('The mail address is not valid.');
            }
        }

        if (!is_array(Tools::getValue('CCOFFLINE_DATA_ISSUERS'))) {
            $errors[] = $this->l('You have to set one card brand at least.');
        }

        if (count($errors) > 0) {
            if (version_compare(_PS_VERSION_, '1.6', '<')) {
                foreach ($errors as $error) {
                    $html .= $this->displayError($error);
                }
            } else {
                $html .= $this->displayError($errors);
            }
        } else {
            $form_values = $this->getConfigValues();

            foreach (array_keys($form_values) as $key) {
                if ($key == 'CCOFFLINE_DATA_ISSUERS') {
                    Configuration::updateValue('CCOFFLINE_DATA_ISSUERS', implode(',', (array)Tools::getValue('CCOFFLINE_DATA_ISSUERS')));
                } elseif ($key == 'CCOFFLINE_DATA_OS_REM') {
                    Configuration::updateValue('CCOFFLINE_DATA_OS_REM', implode(',', (array)Tools::getValue('CCOFFLINE_DATA_OS_REM')));
                } else {
                    Configuration::updateValue($key, Tools::getValue($key));
                }
            }

            $html .= $this->displayConfirmation($this->l('Configuration saved successfully.'));
        }

        return $html;
    }

    public function hookPaymentOptions($params)
    {
        return $this->hookPayment($params);
    }

    /** hookPayment($params)
    *   Mostrar plantilla para pagar con el módulo
    */
    public function hookPayment($params)
    {
        //It's only shown if:
        // - Card information is stored at database
        // - Card information is sent by mail and mail is defined
        // - Order amount is equal or higher than defined
        if (!$this->checkAmounts($params['cart'])) {
            return;
        }

        if (!$this->checkCurrency($params['cart'])) {
            return;
        }

        if (Configuration::get('CCOFFLINE_WORKING_MODE') == '2'
            || (Configuration::get('CCOFFLINE_WORKING_MODE') == '1' && (Configuration::get('CCOFFLINE_ADMIN_MAIL') <> ''))) {
            $this->context->smarty->assign(array(
                'cookie_currency'           => $this->context->cookie->id_currency,
                'cc_path'                   => _MODULE_DIR_.$this->name.'/',
                'displayed_in_checkout'     => false,
                'CCOFFLINE_PAYMENT_SIZE'    => Configuration::get('CCOFFLINE_PAYMENT_SIZE'),
            ));

            if (Configuration::get('CCOFFLINE_SHOW_FORM')) {
                $cart = $this->context->cart;
                $this->context->smarty->assign(array(
                    'nbProducts'                    => $cart->nbProducts(),
                    'default_currency'              => new Currency(Configuration::get('PS_CURRENCY_DEFAULT')),
                    'currency'                      => new Currency((int)$this->context->cookie->id_currency),
                    'id_currency'                   => (int)$this->context->cookie->id_currency,
                    'total'                         => number_format($cart->getOrderTotal(true, 3), 2, '.', ''),
                    'issuers'                       => CreditCardOfflinePaymentBrands::getIssuers(),
                    'CCOFFLINE_REQUIREISSUERNAME'   => Configuration::get('CCOFFLINE_REQUIREISSUERNAME') == '1' ? true : false,
                    'CCOFFLINE_REQUIREDISSUERNAME'  => Configuration::get('CCOFFLINE_REQUIREDISSUERNAME') == '1' ? true : false,
                    'CCOFFLINE_REQUIRECED'          => Configuration::get('CCOFFLINE_REQUIRECED') == '1' ? true : false,
                    'CCOFFLINE_REQUIREDCED'         => Configuration::get('CCOFFLINE_REQUIREDCED') == '1' ? true : false,
                    'CCOFFLINE_REQUIREADDRESS'      => Configuration::get('CCOFFLINE_REQUIREADDRESS') == '1' ? true : false,
                    'CCOFFLINE_REQUIREDADDRESS'     => Configuration::get('CCOFFLINE_REQUIREDADDRESS') == '1' ? true : false,
                    'CCOFFLINE_REQUIREZIPCODE'      => Configuration::get('CCOFFLINE_REQUIREZIPCODE') == '1' ? true : false,
                    'CCOFFLINE_REQUIREDZIPCODE'     => Configuration::get('CCOFFLINE_REQUIREDZIPCODE') == '1' ? true : false,
                    'CCOFFLINE_REQUIRECITY'         => Configuration::get('CCOFFLINE_REQUIRECITY') == '1' ? true : false,
                    'CCOFFLINE_REQUIREDCITY'        => Configuration::get('CCOFFLINE_REQUIREDCITY') == '1' ? true : false,
                    'CCOFFLINE_REQUIRESTATE'        => Configuration::get('CCOFFLINE_REQUIRESTATE') == '1' ? true : false,
                    'CCOFFLINE_REQUIREDSTATE'       => Configuration::get('CCOFFLINE_REQUIREDSTATE') == '1' ? true : false,
                    'CCOFFLINE_REQUIRECOUNTRY'      => Configuration::get('CCOFFLINE_REQUIRECOUNTRY') == '1' ? true : false,
                    'CCOFFLINE_REQUIREDCOUNTRY'     => Configuration::get('CCOFFLINE_REQUIREDCOUNTRY') == '1' ? true : false,
                    'CCOFFLINE_REQUIRECARDNUMBER'   => Configuration::get('CCOFFLINE_REQUIRECARDNUMBER') == '1' ? true : false,
                    'CCOFFLINE_REQUIREDCARDNUMBER'  => Configuration::get('CCOFFLINE_REQUIREDCARDNUMBER') == '1' ? true : false,
                    'CCOFFLINE_REQUIREISSUER'       => Configuration::get('CCOFFLINE_REQUIREISSUER') == '1' ? true : false,
                    'CCOFFLINE_REQUIREDISSUER'      => Configuration::get('CCOFFLINE_REQUIREDISSUER') == '1' ? true : false,
                    'CCOFFLINE_REQUIREEXP'          => Configuration::get('CCOFFLINE_REQUIREEXP') == '1' ? true : false,
                    'CCOFFLINE_REQUIREDEXP'         => Configuration::get('CCOFFLINE_REQUIREDEXP') == '1' ? true : false,
                    'CCOFFLINE_REQUIRECVV'          => Configuration::get('CCOFFLINE_REQUIRECVV') == '1' ? true : false,
                    'CCOFFLINE_REQUIREDCVV'         => Configuration::get('CCOFFLINE_REQUIREDCVV') == '1' ? true : false,
                    'CCOFFLINE_REQUIREPIN'          => Configuration::get('CCOFFLINE_REQUIREPIN') == '1' ? true : false,
                    'CCOFFLINE_REQUIREDPIN'         => Configuration::get('CCOFFLINE_REQUIREDPIN') == '1' ? true : false,
                    'CCOFFLINE_YEARS'               => Configuration::get('CCOFFLINE_YEARS'),
                    'CCOFFLINE_DISPLAYISSUERS'      => Configuration::get('CCOFFLINE_DISPLAYISSUERS'),
                    'CCOFFLINE_DISPLAYICONS'        => Configuration::get('CCOFFLINE_DISPLAYICONS'),
                    'displayed_in_checkout'         => true,
                ));
            }

            $module_name = '';
            if (Validate::isModuleName(Tools::getValue('module'))) {
                $module_name = Tools::getValue('module');
            }

            if (!empty($this->context->controller->page_name)) {
                $page_name = $this->context->controller->page_name;
            } elseif (!empty($this->context->controller->php_self)) {
                $page_name = $this->context->controller->php_self;
            } elseif (Tools::getValue('fc') == 'module' && $module_name != '' && (Module::getInstanceByName($module_name) instanceof PaymentModule)) {
                $page_name = 'module-payment-submit';
            } elseif (preg_match('#^'.preg_quote($this->context->shop->physical_uri, '#').'modules/([a-zA-Z0-9_-]+?)/(.*)$#', $_SERVER['REQUEST_URI'], $m)) {
                // @retrocompatibility Are we in a module ?
                $page_name = 'module-'.$m[1].'-'.str_replace(array('.php', '/'), array('', '-'), $m[2]);
            } else {
                $page_name = Dispatcher::getInstance()->getController();
                $page_name = (preg_match('/^[0-9]/', $page_name)) ? 'page_'.$page_name : $page_name;
            }

            $this->context->smarty->assign(array(
                'CCOFFLINE_PAYMENT_STYLE'   => (Configuration::get('CCOFFLINE_SHOW_FORM') && Configuration::get('CCOFFLINE_PAYMENT_STYLE') == 2) ? 'true' : 'false',
                'cc_path'                   => $this->getPathUri(),
            ));

            if (version_compare(_PS_VERSION_, '1.6', '<')) {
                return $this->display(__FILE__, 'views/templates/hook/payment.tpl');
            } elseif (version_compare(_PS_VERSION_, '1.7', '<')) {
                return $this->display(__FILE__, 'payment_16.tpl');
            } else {
                $newOption = new \PrestaShop\PrestaShop\Core\Payment\PaymentOption();
                $newOption->setCallToActionText($this->l('Pay with credit card'));

                if (Configuration::get('CCOFFLINE_SHOW_FORM')) {
                    $newOption->setAction($this->context->link->getModuleLink($this->name, 'validation', array(), true))
                        ->setForm($this->context->smarty->fetch('module:creditcardofflinepayment/views/templates/front/payment_execution_checkout_17.tpl'));
                } else {
                    $newOption->setAction($this->context->link->getModuleLink($this->name, 'payment', array(), true));
                }

                $payment_options = array($newOption);

                return $payment_options;
            }
        }
    }

    public function hookDisplayPaymentEU($params)
    {
        return array(
            'cta_text' => $this->l('Pay with credit card'),
            'logo' => Media::getMediaPath(_PS_MODULE_DIR_.$this->name.'/views/img/creditcardofflinepayment.jpg'),
            'action' => $this->context->link->getModuleLink($this->name, 'payment', array(), true)
        );
    }

    /** hookAdminOrder($params)
    *   Información del pedido en el backoffice. Sólo se muestra si el pedido se ha realizado con este módulo
    */
    public function hookAdminOrder($params)
    {
        $id_order = (int)$params['id_order'];

        $creditCardOfflinePaymentOrder = new CreditCardOfflinePaymentOrder($id_order);

        $order = new Order($id_order);

        if ($order->module == $this->name && Validate::isLoadedObject($creditCardOfflinePaymentOrder)) {
            $this->context->smarty->assign(array(
                'cardholder_name'       => $creditCardOfflinePaymentOrder->cardholder_name,
                'cardholder_passport'   => $creditCardOfflinePaymentOrder->cardholder_passport,
                'cardholder_address'    => $creditCardOfflinePaymentOrder->cardholder_address,
                'cardholder_zipcode'    => $creditCardOfflinePaymentOrder->cardholder_zipcode,
                'cardholder_city'       => $creditCardOfflinePaymentOrder->cardholder_city,
                'cardholder_state'      => $creditCardOfflinePaymentOrder->cardholder_state,
                'cardholder_country'    => $creditCardOfflinePaymentOrder->cardholder_country,
                'card_number'           => $this->encryptDecrypt($creditCardOfflinePaymentOrder->card_number, 'decrypt'),
                'card_cvv'              => $this->encryptDecrypt($creditCardOfflinePaymentOrder->card_cvv, 'decrypt'),
                'card_brand'            => $creditCardOfflinePaymentOrder->card_brand,
                'amount'                => Tools::displayPrice($creditCardOfflinePaymentOrder->amount, (int)$creditCardOfflinePaymentOrder->currency),
                'card_expiry_month'     => str_pad($creditCardOfflinePaymentOrder->card_expiry_month, 2, '0', STR_PAD_LEFT),
                'card_expiry_year'      => $creditCardOfflinePaymentOrder->card_expiry_year,
                'card_pin'              => $creditCardOfflinePaymentOrder->card_pin,
                'id_order'              => $id_order,
                'this_page'             => $_SERVER['REQUEST_URI'],
                'token'                 => Tools::getAdminTokenLite('AdminCreditCardOfflinePayment'),
                'cc_path'               => _MODULE_DIR_.$this->name.'/',
            ));

            if (version_compare(_PS_VERSION_, '1.6', '<')) {
                return $this->display(__FILE__, 'invoice_block_15.tpl');
            } else {
                return $this->display(__FILE__, 'invoice_block.tpl');
            }
        }
    }

    /**
    *   hookPaymentReturn($params)
    *   Se llama después de realizar el pago
    */
    public function hookPaymentReturn($params)
    {
        if (!$this->active) {
            return;
        }

        if (version_compare(_PS_VERSION_, '1.7', '>=')) {
            return;
        }

        $state = $params['objOrder']->getCurrentState();

        if ($state == Configuration::get('PS_OS_OUTOFSTOCK_PAID')
            || $state == Configuration::get('PS_OS_OUTOFSTOCK_UNPAID')
            || $state == Configuration::get('CCOFFLINE_DATA_OS_INITIAL')) {
            $this->context->smarty->assign(array(
                'total_to_pay'  => Tools::displayPrice($params['total_to_pay'], $params['currencyObj'], false),
                'success'       => true,
                'id_order'      => $params['objOrder']->id
            ));
        } else {
            $this->context->smarty->assign('success', false);
        }

        if (version_compare(_PS_VERSION_, '1.6', '<')) {
            return $this->display(__FILE__, 'order_confirmation_15.tpl');
        } else {
            return $this->display(__FILE__, 'order_confirmation.tpl');
        }
    }

    public function hookHeader()
    {
        $module_name = '';
        if (Validate::isModuleName(Tools::getValue('module'))) {
            $module_name = Tools::getValue('module');
        }

        if (!empty($this->context->controller->page_name)) {
            $page_name = $this->context->controller->page_name;
        } elseif (!empty($this->context->controller->php_self)) {
            $page_name = $this->context->controller->php_self;
        } elseif (Tools::getValue('fc') == 'module' && $module_name != '' && (Module::getInstanceByName($module_name) instanceof PaymentModule)) {
            $page_name = 'module-payment-submit';
        } elseif (preg_match('#^'.preg_quote($this->context->shop->physical_uri, '#').'modules/([a-zA-Z0-9_-]+?)/(.*)$#', $_SERVER['REQUEST_URI'], $m)) {
            // @retrocompatibility Are we in a module ?
            $page_name = 'module-'.$m[1].'-'.str_replace(array('.php', '/'), array('', '-'), $m[2]);
        } else {
            $page_name = Dispatcher::getInstance()->getController();
            $page_name = (preg_match('/^[0-9]/', $page_name)) ? 'page_'.$page_name : $page_name;
        }

        if ($page_name == 'order'
            || $page_name == 'order-opc'
            || $page_name == 'checkout'
            || $page_name == 'module-creditcardofflinepayment-payment'
            || $page_name == 'module-creditcardofflinepayment-validation') {
            if (($page_name == 'order' || $page_name == 'order-opc' || $page_name == 'checkout')
                && Configuration::get('CCOFFLINE_PAYMENT_STYLE') == 2) {
                $this->context->controller->addJS($this->_path.'/views/js/card/jquery.card.js');
            }

            if (version_compare(_PS_VERSION_, '1.6', '<')) {
                $this->context->controller->addCSS($this->_path.'views/css/creditcardofflinepayment_15.css', 'all');
            } elseif (version_compare(_PS_VERSION_, '1.7', '<')) {
                $this->context->controller->addCSS($this->_path.'views/css/creditcardofflinepayment_16.css', 'all');
            } else {
                $this->context->controller->addCSS($this->_path.'views/css/creditcardofflinepayment_17.css', 'all');
            }

            $this->context->controller->addJS($this->_path.'views/js/creditcardofflinepayment.js');

            $this->context->controller->addCSS($this->_path.'views/css/tipso/tipso.css', 'all');
            $this->context->controller->addJS($this->_path.'views/js/tipso/tipso.js');
        }
    }

    public function hookUpdateOrderStatus($params)
    {
        if ($creditCardOfflinePaymentOrder = new CreditCardOfflinePaymentOrder((int)$params['id_order'])) {
            foreach (explode(',', Configuration::get('CCOFFLINE_DATA_OS_REM')) as $state) {
                if ($state == (int)$params['newOrderStatus']->id) {
                    $creditCardOfflinePaymentOrder->delete();
                    break;
                }
            }
        }
    }

    public function checkAmounts($cart)
    {
        if (!Validate::isLoadedObject($cart)) {
            return false;
        }

        if ((float)Configuration::get('CCOFFLINE_MINIMUM_AMOUNT') > 0
            || (float)Configuration::get('CCOFFLINE_MAXIMUM_AMOUNT') > 0) {
            $currency_to = new Currency((int)Configuration::get('PS_CURRENCY_DEFAULT'));
            $currency_from = new Currency((int)$cart->id_currency);
            $order_amount = Tools::convertPriceFull($cart->getOrderTotal(true, Cart::BOTH), $currency_from, $currency_to);

            if ((float)Configuration::get('CCOFFLINE_MINIMUM_AMOUNT') > 0
                && $order_amount < (float)Configuration::get('CCOFFLINE_MINIMUM_AMOUNT')) {
                return false;
            }

            if ((float)Configuration::get('CCOFFLINE_MAXIMUM_AMOUNT') > 0
                && $order_amount > (float)Configuration::get('CCOFFLINE_MAXIMUM_AMOUNT')) {
                return false;
            }
        }

        return true;
    }
    /*
     *  validateCard($cardnumber)
     *  Checks mod10 check digit of card, returns true if valid
     */
    public function validateCard($cardnumber, $issuer_name)
    {
        $issuer = CreditCardOfflinePaymentBrands::getInfoByIssuer($issuer_name);

        $valid = true;
        if ($issuer['check']) {
            $valid = false;
            foreach ($issuer['prefix'] as $prefix) {
                if ((int)Tools::substr($cardnumber, 0, Tools::strlen($prefix)) === (int)$prefix) {
                    $valid = true;
                    break;
                }
            }
        }

        if (!$valid) {
            return false;
        }

        if ($issuer['check'] && $issuer['algorithm'] == 'luhn') {
            //Luhn algorithm
            $cardnumber = preg_replace('/\D|\s/', '', $cardnumber);  # strip any non-digits
            $cardlength = Tools::strlen($cardnumber);
            if ($cardlength != 0) {
                $parity = $cardlength % 2;
                $sum = 0;
                for ($i = 0; $i < $cardlength; $i++) {
                    $digit = $cardnumber[$i];
                    if ($i % 2 == $parity) {
                        $digit = $digit * 2;
                    }
                    if ($digit > 9) {
                        $digit = $digit - 9;
                    }

                    $sum = $sum + $digit;
                }
                $valid = ($sum % 10 == 0);
                return $valid;
            }
            return false;
        } elseif ($issuer['check'] && $issuer['algorithm'] == 'isracard') {
            $comp1 = '987654321';
            $comp2 = $cardnumber;
            $srez = 0;

            if (Tools::strlen($comp2) < 9) {
                $comp2 = '0'.$cardnumber;
            }

            for ($i = 0; $i < 9; $i++) {
                $a = Tools::substr($comp1, $i, 1);
                $b = Tools::substr($comp2, $i, 1);
                $c = $a * $b;
                $srez = $srez + $c;
            }

            if ($srez % 11 == 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function checkCurrency($cart)
    {
        $currencies_module = $this->getCurrency();

        if (is_array($currencies_module)) {
            foreach ($currencies_module as $currency_module) {
                if ((int)$cart->id_currency == $currency_module['id_currency']) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     *
     * Convert amount from a currency to an other currency automatically
     * @param float $amount
     * @param Currency $currency_from if null we used the default currency
     * @param Currency $currency_to if null we used the default currency
     */
    private static function convertPriceFull($amount, Currency $currency_from = null, Currency $currency_to = null)
    {
        if ($currency_from === $currency_to) {
            return $amount;
        }

        if ($currency_from === null) {
            $currency_from = new Currency(Configuration::get('PS_CURRENCY_DEFAULT'));
        }

        if ($currency_to === null) {
            $currency_to = new Currency(Configuration::get('PS_CURRENCY_DEFAULT'));
        }

        if ($currency_from->id == Configuration::get('PS_CURRENCY_DEFAULT')) {
            $amount *= $currency_to->conversion_rate;
        } else {
            $conversion_rate = ($currency_from->conversion_rate == 0 ? 1 : $currency_from->conversion_rate);
            // Convert amount to default currency (using the old currency rate)
            $amount = Tools::ps_round($amount / $conversion_rate, 2);
            // Convert to new currency
            $amount *= $currency_to->conversion_rate;
        }

        return Tools::ps_round($amount, 2);
    }

    /**
     * @static
     * @param $iso_code
     * @param int $id_shop
     * @return int
     */
    private function getIdBySign($sign, $id_shop = 0)
    {
        $query = Currency::getIdByQuery($id_shop);
        $query->where('sign = \''.pSQL($sign).'\'');

        return (int)Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue($query->build());
    }

    public function encryptDecrypt($string, $action)
    {
        $output = false;

        $encrypt_method = "AES-256-CBC";
        $secret_key = _COOKIE_KEY_;
        $secret_iv = _COOKIE_IV_;

        // hash
        $key = hash('sha256', $secret_key);

        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = Tools::substr(hash('sha256', $secret_iv), 0, 16);

        if ($action == 'encrypt') {
            if (!extension_loaded('openssl')) {
                $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
                $output = base64_encode($output);
            } else {
                $output = $string;
            }
        } elseif ($action == 'decrypt') {
            if (!extension_loaded('openssl')) {
                $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
            } else {
                $output = $string;
            }
        }

        return $output;
    }

    public function getWarnings($getAll = true)
    {
        $warning = array();

        if (Configuration::get('PS_DISABLE_NON_NATIVE_MODULE')) {
            $warning[] = $this->l('You have to enable non PrestaShop modules at ADVANCED PARAMETERS - PERFORMANCE');
        }

        if (!count(Currency::checkPaymentCurrencies($this->id))) {
            $warning[] = $this->l('Module is not enabled for any currency');
        }

        if (Configuration::get('CCOFFLINE_WORKING_MODE') == '1'
            && (!Validate::isEmail(Configuration::get('CCOFFLINE_ADMIN_MAIL')))) {
            $warning[] = $this->l('You have to set your mail address to receive the card information.');
        }

        if (!extension_loaded('openssl')) {
            $warning[] = $this->l('SSL does not seem to be available on your server. Please enable openSSL extension to increase security');
        }

        if (count($warning) && !$getAll) {
            return $warning[0];
        }

        return $warning;
    }

    public function recurseCopy($src, $dst)
    {
        $dir = opendir($src);
        @mkdir($dst);
        while (false !== ($file = readdir($dir))) {
            if (($file != '.') && ($file != '..')) {
                if (is_dir($src . '/' . $file)) {
                    $this->recurseCopy($src . '/' . $file, $dst . '/' . $file);
                } else {
                    copy($src . '/' . $file, $dst . '/' . $file);
                }
            }
        }
        closedir($dir);
    }

    public function copyMailsFolder()
    {
        $mails_folder_name = "mails";

        $version_mails_folder = _PS_MODULE_DIR_.$this->name.'/'.$mails_folder_name.'_'.Tools::substr(str_replace('.', '', _PS_VERSION_), 0, 2);
        $mails_folder = _PS_MODULE_DIR_.$this->name.'/'.$mails_folder_name;

        if (file_exists($mails_folder) && is_dir($mails_folder)) {
            $this->recursiveRmdir($mails_folder);
        }

        if (is_dir($version_mails_folder)) {
            $this->copyDir($version_mails_folder, $mails_folder);
        }

        return true;
    }

    protected function copyDir($src, $dst)
    {
        if (is_dir($src)) {
            $dir = opendir($src);
            @mkdir($dst);
            while (false !== ($file = readdir($dir))) {
                if (($file != '.') && ($file != '..')) {
                    if (is_dir($src.'/'.$file)) {
                        $this->copyDir($src.'/'.$file, $dst.'/'.$file);
                    } else {
                        copy($src.'/'.$file, $dst.'/'.$file);
                    }
                }
            }
            closedir($dir);
        }
    }

    protected function recursiveRmdir($dir)
    {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (filetype($dir."/".$object) == "dir") {
                        $this->recursiveRmdir($dir."/".$object);
                    } else {
                        unlink($dir."/".$object);
                    }
                }
            }
            reset($objects);
            rmdir($dir);
        }
    }
}
