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

class CreditCardOfflinePaymentValidationModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");

        parent::initcontent();
    }

    public function setMedia()
    {
        parent::setMedia();

        $this->addJS(_PS_JS_DIR_.'validate.js');

        if (Configuration::get('CCOFFLINE_PAYMENT_STYLE') == 2) {
            $this->addJS(_MODULE_DIR_.$this->module->name.'/views/js/card/jquery.card.js');
        }
    }

    public function init()
    {
        if (Configuration::get('CCOFFLINE_LEFT_COLUMN')) {
            $this->display_column_left = true;
        } else {
            $this->display_column_left = false;
        }

        if (Configuration::get('CCOFFLINE_RIGHT_COLUMN')) {
            $this->display_column_right = true;
        } else {
            $this->display_column_right = false;
        }

        parent::init();
    }

    public function postProcess()
    {
        //Validate cart
        if ($this->context->cart->id_customer == 0
            || $this->context->cart->id_address_delivery == 0
            || $this->context->cart->id_address_invoice == 0
            || !$this->module->active) {
            Tools::redirect('index.php?controller=order&step=1');
        }

        //Validate cart amount is between limits
        if (!$this->module->checkAmounts($this->context->cart)) {
            Tools::redirect('index.php?controller=order&step=1');
        }

        // Check that this payment option is still available in case the customer
        // changed his address just before the end of the checkout process
        $authorized = false;

        foreach (Module::getPaymentModules() as $module) {
            if ($module['name'] == 'creditcardofflinepayment') {
                $authorized = true;
                break;
            }
        }

        if (!$authorized) {
            die($this->module->l('This payment method is not available.', 'validation'));
        }

        $customer = new Customer($this->context->cart->id_customer);
        if (!Validate::isLoadedObject($customer)) {
            Tools::redirect('index.php?controller=order&step=1');
        }

        if (!$this->module->checkCurrency($this->context->cart)) {
            Tools::redirect('index.php?controller=order');
        }

        $errors = array();

        if ($card = Tools::getValue('card')) {
            //Validate variables
            //Name holder
            if (Configuration::get('CCOFFLINE_REQUIREISSUERNAME')) {
                if (Configuration::get('CCOFFLINE_REQUIREDISSUERNAME') && !$card['cardholder_name']) {
                     $errors[] = $this->module->l('You must introduce the card holder name.', 'validation');
                }

                if ($card['cardholder_name'] && !Validate::isName($card['cardholder_name'])) {
                     $errors[] = $this->module->l('You must introduce a valid card holder name.', 'validation');
                }

                if ($card['cardholder_name'] && Tools::strlen($card['cardholder_name']) > 255) {
                     $errors[] = $this->module->l('The card holder name is too long.', 'validation');
                }
            } else {
                //If variable not required, initialize to blank
                $card['cardholder_name'] = '';
            }

            //ID-Passport
            if (Configuration::get('CCOFFLINE_REQUIRECED')) {
                if (Configuration::get('CCOFFLINE_REQUIREDCED') && !$card['cardholder_passport']) {
                     $errors[] = $this->module->l('You must introduce an ID Card/Passport.', 'validation');
                }

                if ($card['cardholder_passport'] && Tools::strlen($card['cardholder_passport']) > 255) {
                     $errors[] = $this->module->l('The ID Card/Passport is too long.', 'validation');
                }
            } else {
                //If variable not required, initialize to blank
                $card['cardholder_passport'] = '';
            }

            //Address
            if (Configuration::get('CCOFFLINE_REQUIREADDRESS')) {
                if (Configuration::get('CCOFFLINE_REQUIREDADDRESS') && $card['cardholder_address'] == '') {
                     $errors[] = $this->module->l('You must introduce an address.', 'validation');
                }

                if ($card['cardholder_address'] && Tools::strlen($card['cardholder_address']) > 255) {
                    $errors[] = $this->module->l('The address is too long.', 'validation');
                }
            } else {
                //If variable not required, initialize to blank
                $card['cardholder_address'] = '';
            }

            //Zip code
            if (Configuration::get('CCOFFLINE_REQUIREZIPCODE')) {
                if (Configuration::get('CCOFFLINE_REQUIREDZIPCODE') && $card['cardholder_zipcode'] == '') {
                     $errors[] = $this->module->l('You must introduce a zip code.', 'validation');
                }

                if ($card['cardholder_zipcode'] && !Validate::isZipCodeFormat($card['cardholder_zipcode'])) {
                    $errors[] = $this->module->l('You must introduce a valid zipcode.', 'validation');
                }

                if ($card['cardholder_zipcode'] && Tools::strlen($card['cardholder_zipcode']) > 255) {
                    $errors[] = $this->module->l('The zipcode is too long.', 'validation');
                }
            } else {
                //If variable not required, initialize to blank
                $card['cardholder_zipcode'] = '';
            }

            //City
            if (Configuration::get('CCOFFLINE_REQUIRECITY')) {
                if (Configuration::get('CCOFFLINE_REQUIREDCITY') && $card['cardholder_city'] == '') {
                     $errors[] = $this->l('You must introduce a city.', 'validation');
                }

                if ($card['cardholder_city'] && !Validate::isName($card['cardholder_city'])) {
                    $errors[] = $this->module->l('You must introduce a valid city.', 'validation');
                }

                if ($card['cardholder_city'] && Tools::strlen($card['cardholder_city']) > 255) {
                    $errors[] = $this->module->l('The city name is too long.', 'validation');
                }
            } else {
                //If variable not required, initialize to blank
                $card['cardholder_city'] = '';
            }

            //State
            if (Configuration::get('CCOFFLINE_REQUIRESTATE')) {
                if (Configuration::get('CCOFFLINE_REQUIREDSTATE') && $card['cardholder_state'] == '') {
                     $errors[] = $this->l('You must introduce a state.', 'validation');
                }

                if ($card['cardholder_state'] && !Validate::isName($card['cardholder_state'])) {
                    $errors[] = $this->module->l('You must introduce a valid state.', 'validation');
                }

                if ($card['cardholder_state'] && Tools::strlen($card['cardholder_state']) > 255) {
                    $errors[] = $this->module->l('The state name is too long.', 'validation');
                }
            } else {
                //If variable not required, initialize to blank
                $card['cardholder_state'] = '';
            }

            //Country
            if (Configuration::get('CCOFFLINE_REQUIRECOUNTRY')) {
                if (Configuration::get('CCOFFLINE_REQUIREDCOUNTRY') && $card['cardholder_country'] == '') {
                     $errors[] = $this->l('You must introduce a country.', 'validation');
                }

                if ($card['cardholder_country'] && !Validate::isName($card['cardholder_country'])) {
                    $errors[] = $this->module->l('You must introduce a valid country.', 'validation');
                }

                if ($card['cardholder_country'] && Tools::strlen($card['cardholder_country']) > 255) {
                    $errors[] = $this->module->l('The country name is too long.', 'validation');
                }
            } else {
                //If variable not required, initialize to blank
                $card['cardholder_country'] = '';
            }

            //Card number
            //If variable not required, initialize to blank
            if (!Configuration::get('CCOFFLINE_REQUIRECARDNUMBER')) {
                $card['card_number'] = '';
            }

            $card['card_number'] = preg_replace('/\D|\s/', '', $card['card_number']);
            if (Configuration::get('CCOFFLINE_REQUIRECARDNUMBER')
                && Configuration::get('CCOFFLINE_REQUIREDCARDNUMBER')
                && $card['card_number'] == '') {
                $errors[] = $this->module->l('You must introduce the card number.', 'validation');
            }

            if (Configuration::get('CCOFFLINE_REQUIRECARDNUMBER')
                && Configuration::get('CCOFFLINE_REQUIREISSUER')
                && $card['card_number'] != ''
                && !$this->module->validateCard($card['card_number'], $card['card_brand'])) {
                $errors[] = $this->module->l('The card number entered is not valid.', 'validation');
            }

            //CVC
            //If variable not required, initialize to blank
            if (!Configuration::get('CCOFFLINE_REQUIRECVV')) {
                $card['card_cvv'] = '';
            }

            if (Configuration::get('CCOFFLINE_REQUIRECVV')
                && Configuration::get('CCOFFLINE_REQUIREDCVV')
                && $card['card_cvv'] == '') {
                $errors[] = $this->module->l('You must introduce the CVC card number.', 'validation');
            }

            if (Configuration::get('CCOFFLINE_REQUIRECVV')
                && $card['card_cvv'] != ''
                && (!is_numeric($card['card_cvv']))) {
                $errors[] = $this->module->l('The CVC card number entered is not valid.', 'validation');
            }

            //Card issuer
            //If variable not required, initialize to blank
            if (!Configuration::get('CCOFFLINE_REQUIREISSUER')) {
                $card['card_brand'] = '';
            }

            if (Configuration::get('CCOFFLINE_REQUIREISSUER')
                && Configuration::get('CCOFFLINE_REQUIREDISSUER')
                && $card['card_brand'] == '') {
                $errors[] = $this->module->l('You must choose the card issuer.', 'validation');
            }

            //Expiry date
            if (!Configuration::get('CCOFFLINE_REQUIREEXP')) {
                //If variable not required, initialize to blank
                $card['card_expiry_month'] = '';
                $card['card_expiry_year'] = '';
            }

            if (Configuration::get('CCOFFLINE_REQUIREEXP')) {
                if (Configuration::get('CCOFFLINE_REQUIREDEXP')) {
                    if ($card['card_expiry_month'] == ''
                        || !(int)$card['card_expiry_month'] > 0) {
                         $errors[] = $this->module->l('You must introduce the card expiry month.', 'validation');
                    }

                    if ($card['card_expiry_year'] == ''
                        || !(int)$card['card_expiry_year'] > 0) {
                         $errors[] = $this->module->l('You must introduce the card expiry year.', 'validation');
                    }
                }

                // Check that the date is valid
                if ($card['card_expiry_month'] != ''
                    && $card['card_expiry_month'] != '-'
                    && $card['card_expiry_year'] != ''
                    && $card['card_expiry_year'] != '-') {
                    if ((int)$card['card_expiry_year'] < date('y')
                        || ((int)$card['card_expiry_year'] == date('y')
                        && (int)$card['card_expiry_month'] < date('m'))) {
                        $errors[] = $this->module->l('The expiry date that you have introduced can not be prior to actual date.', 'validation');
                    }

                    if (Tools::strlen($card['card_expiry_year']) > 4
                        || Tools::strlen($card['card_expiry_year']) < 2
                        || Tools::strlen($card['card_expiry_month']) > 2
                        || Tools::strlen($card['card_expiry_month']) < 1) {
                        $errors[] = $this->module->l('The expiry date that you have introduced is not valid.', 'validation');
                    }
                }
            }

            //Card PIN code
            //If variable not required, initialize to blank
            if (!Configuration::get('CCOFFLINE_REQUIREPIN')
                && !isset($card['card_pin'])) {
                $card['card_pin'] = '';
            }

            if (Configuration::get('CCOFFLINE_REQUIREPIN')
                && Configuration::get('CCOFFLINE_REQUIREDPIN')
                && $card['card_pin'] == '') {
                $errors[] = $this->l('You must introduce the card pin code.', 'validation');
            }

            //Si todos los campos son válidos
            if (!count($errors)) {
                $id_currency = (int)Tools::getValue('id_currency');
                $currency = new Currency($id_currency);

                $total = $this->context->cart->getOrderTotal(true);

                //and place the order
                $this->module->validateOrder((int)$this->context->cart->id, (int)Configuration::get('CCOFFLINE_DATA_OS_INITIAL'), $total, $this->module->displayName, null, null, $id_currency, false, $customer->secure_key);

                if ($creditCardOfflinePaymentOrder = new CreditCardOfflinePaymentOrder((int)$this->module->currentOrder)) {
                    $creditCardOfflinePaymentOrder->delete();
                }

                $creditCardOfflinePaymentOrder = new CreditCardOfflinePaymentOrder();
                $creditCardOfflinePaymentOrder->id_order = (int)$this->module->currentOrder;
                $creditCardOfflinePaymentOrder->card_brand = $card['card_brand'];
                $creditCardOfflinePaymentOrder->cardholder_name = $card['cardholder_name'];
                $creditCardOfflinePaymentOrder->cardholder_passport = $card['cardholder_passport'];
                $creditCardOfflinePaymentOrder->cardholder_address = $card['cardholder_address'];
                $creditCardOfflinePaymentOrder->cardholder_zipcode = $card['cardholder_zipcode'];
                $creditCardOfflinePaymentOrder->cardholder_city = $card['cardholder_city'];
                $creditCardOfflinePaymentOrder->cardholder_state = $card['cardholder_state'];
                $creditCardOfflinePaymentOrder->cardholder_country = $card['cardholder_country'];
                $creditCardOfflinePaymentOrder->card_expiry_month = (int)$card['card_expiry_month'];
                $creditCardOfflinePaymentOrder->card_expiry_year = (int)$card['card_expiry_year'];
                $creditCardOfflinePaymentOrder->card_pin = (int)$card['card_pin'];
                $creditCardOfflinePaymentOrder->amount = $total;
                $creditCardOfflinePaymentOrder->currency = $currency->id;

                if (Configuration::get('CCOFFLINE_WORKING_MODE') == '2') {
                    //Store whole number at database, don't send mail.
                    $creditCardOfflinePaymentOrder->card_number = $this->module->encryptDecrypt($card['card_number'], 'encrypt');
                    $creditCardOfflinePaymentOrder->card_cvv = $this->module->encryptDecrypt($card['card_cvv'], 'encrypt');

                    if (!$result = $creditCardOfflinePaymentOrder->add()) {
                        throw new Exception($result);
                    }
                } else {
                    //Store half number at database and send the other half by mail
                    $length = ceil(Tools::strlen($card['card_number']) / 2);

                    $creditCardOfflinePaymentOrder->card_number = $this->module->encryptDecrypt(Tools::substr($card['card_number'], 0, $length).str_pad('', Tools::strlen($card['card_number']) - $length, 'x'), 'encrypt');
                    if ($card['card_cvv']) {
                        $creditCardOfflinePaymentOrder->card_cvv = $this->module->encryptDecrypt('XXX', 'encrypt');
                    }

                    if (!$result = $creditCardOfflinePaymentOrder->add()) {
                        throw new Exception($result);
                    }

                    //Send the email to the seller. Set the variables for the template
                    $template_vars = array();
                    $template_vars['{id_order}'] = (int)$this->module->currentOrder;
                    $template_vars['{nombre_titular}'] = $card['cardholder_name'];
                    $template_vars['{cedula}'] = $card['cardholder_passport'];
                    $template_vars['{direccion}'] = $card['cardholder_address'];
                    $template_vars['{cp}'] = $card['cardholder_zipcode'];
                    $template_vars['{importe}'] = Tools::displayPrice($total, $currency);
                    $template_vars['{issuer}'] = $card['card_brand'];
                    $template_vars['{pan}'] = str_pad('', $length, 'x').Tools::substr($card['card_number'], $length, (Tools::strlen($card['card_number'] - $length)));
                    $template_vars['{cvc}'] = $card['card_cvv'];
                    $template_vars['{card_expiry_month}'] = $card['card_expiry_month'];
                    $template_vars['{card_expiry_year}'] = $card['card_expiry_year'];
                    $template_vars['{pin}'] = $card['card_pin'];
                    $template_vars['{city}'] = $card['cardholder_city'];
                    $template_vars['{state}'] = $card['cardholder_state'];
                    $template_vars['{country}'] = $card['cardholder_country'];

                    $id_lang = (int)Configuration::get('PS_LANG_DEFAULT'); //Language template
                    $template_name = 'ccoffline'; //Template file name
                    $title = sprintf($this->module->l('Order #%s paid with card', 'validation'), (int)$this->module->currentOrder); //Mail subject with translation
                    $mail_dir = _PS_MODULE_DIR_.$this->module->name.'/mails/'; //Directory with message templates
                    $to_mail = Configuration::get('CCOFFLINE_ADMIN_MAIL'); //To mail address

                    Mail::Send($id_lang, $template_name, $title, $template_vars, $to_mail, '', null, null, null, null, $mail_dir);
                }

                // Once complete, redirect to order-confirmation
                Tools::redirect('index.php?controller=order-confirmation&id_cart='.(int)$this->context->cart->id.'&id_module='.(int)$this->module->id.'&id_order='.$this->module->currentOrder.'&key='.$customer->secure_key);
            } else {
                $this->context->smarty->assign('card', $card);
            }
        }

        $this->context->smarty->assign(array(
            'nbProducts'                    => $this->context->cart->nbProducts(),
            'default_currency'              => new Currency(Configuration::get('PS_CURRENCY_DEFAULT')),
            'currency'                      => new Currency((int)$this->context->cookie->id_currency),
            'id_currency'                   => (int)$this->context->cookie->id_currency,
            'total'                         => Tools::displayPrice($this->context->cart->getOrderTotal(true)),
            'validation_errors'             => $errors,
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
            'CCOFFLINE_PAYMENT_STYLE'       => Configuration::get('CCOFFLINE_PAYMENT_STYLE') == 2 ? true : false,
            'cc_path'                       => $this->module->getPathUri(),
            'validate'                      => true,
        ));

        if (version_compare(_PS_VERSION_, '1.6', '<')) {
            $this->setTemplate('payment_execution.tpl');
        } elseif (version_compare(_PS_VERSION_, '1.7', '<')) {
            $this->setTemplate('payment_execution_16.tpl');
        } else {
            $this->setTemplate('module:creditcardofflinepayment/views/templates/front/payment_execution_17.tpl');
        }
    }
}
