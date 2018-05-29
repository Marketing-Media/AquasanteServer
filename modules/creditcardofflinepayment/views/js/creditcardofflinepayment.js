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

//< ![CDATA[
function validate_isNumber(s)
{
    if (s) {
        var reg = /^[0-9]+$/;
        return reg.test(s);
    } else {
        return false;
    }
}

function validate_isMonth(s)
{
    if (s > 0 && s < 13) {
        var reg = /^[0-9]+$/;
        return reg.test(s);
    } else {
        return false;
    }
}

function validate_isYear(s)
{
    var reg = /^[0-9]+$/;
    return reg.test(s);
}


function validate_isCardNumber(value) {

    if (!value) return false;

    // accept only digits, dashes or spaces
    if (/[^0-9-\s]+/.test(value)) return false;

    // The Luhn Algorithm. It's so pretty.
    var nCheck = 0, nDigit = 0, bEven = false;
    value = value.replace(/\D/g, "");

    for (var n = value.length - 1; n >= 0; n--) {
        var cDigit = value.charAt(n),
              nDigit = parseInt(cDigit, 10);

        if (bEven) {
            if ((nDigit *= 2) > 9) nDigit -= 9;
        }

        nCheck += nDigit;
        bEven = !bEven;
    }

    return (nCheck % 10) == 0;
}

function formatTwoDigits(number) {
    if (number) {
        return ("0" + number).slice(-2);
    }
}

function processing()
{
    $('input[name="validate"]').val('1');
    /*$('*').css('cursor', 'wait');
    $('.cart_navigation').hide();
    $('#card-processing').attr('style','display: block !important');*/
    $('#credit-form').submit();
}

$('document').ready(function() {
    if (typeof cc_path !== "undefined") {
        $("<img />").attr("src", cc_path+'views/img/cvc-cards.png');
    }

    $('.hover-tipso-tooltip').tipso({
        tooltipHover: true,
        position: 'right',
        width: 247,
    });

    if (typeof CCOFFLINE_PAYMENT_STYLE !== "undefined" && CCOFFLINE_PAYMENT_STYLE) {
        new Card({
            form: '#payment_form form',
            container: '.card-wrapper',
            formSelectors: {
                numberInput: 'input[name="card[card_number]"]',
                expiryInput: 'input[name="card[card_expiry_month]"], input[name="card[card_expiry_year]"]',
                cvcInput: 'input[name="card[card_cvv]"]',
                nameInput: 'input[name="card[cardholder_name]"]'
            },
            placeholders: {
                number: card_number,
                name: cardholder_name,
                expiry: '••/••',
                cvc: card_cvv
            },

        });
    }
});
//]]>