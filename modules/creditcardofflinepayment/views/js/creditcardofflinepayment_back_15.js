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

var fields = [
	'CCOFFLINE_REQUIREISSUERNAME',
	'CCOFFLINE_REQUIRECED',
	'CCOFFLINE_REQUIREADDRESS',
	'CCOFFLINE_REQUIREZIPCODE',
	'CCOFFLINE_REQUIRECITY',
	'CCOFFLINE_REQUIRESTATE',
	'CCOFFLINE_REQUIRECOUNTRY',
	'CCOFFLINE_REQUIRECARDNUMBER',
	'CCOFFLINE_REQUIRECVV',
	'CCOFFLINE_REQUIREEXP',
	'CCOFFLINE_REQUIREISSUER',
	'CCOFFLINE_REQUIREPIN'
];

jQuery('document').ready(function() {
	showHideWorkingMode();
	showHidePaymentStyle();
	showHideSize();

	jQuery('input[name="CCOFFLINE_WORKING_MODE"]').change(function() {
		showHideWorkingMode();
	});

	jQuery('select[name="CCOFFLINE_PAYMENT_STYLE"]').change(function() {
		showHidePaymentStyle();
	});

	jQuery('select[name="CCOFFLINE_PAYMENT_SIZE"]').change(function() {
		showHideSize();
	});

	$.each(fields, function(index, value) {
		var field = $('input[name="'+value+'"]:checked');
		if (field.val() == 1) {
			field.parent().next().next().slideDown().next().slideDown();
		} else {
		 	field.parent().next().next().slideUp().next().slideUp();
		}

		var field = $('input[name="'+value+'"]');
		field.change(function() {
			if ($(this).val() == 1) {
				field.parent().next().next().slideDown().next().slideDown();
				if ($(this).attr('name') == 'CCOFFLINE_REQUIREEXP') {
					$('#CCOFFLINE_YEARS').parent().slideDown().prev().slideDown();
				}
			} else {
				field.parent().next().next().slideUp().next().slideUp();
				if ($(this).attr('name') == 'CCOFFLINE_REQUIREEXP') {
					$('#CCOFFLINE_YEARS').parent().slideUp().prev().slideUp();
				}
			}
		});
	});
});

function showHidePaymentStyle() {
	if (jQuery('select[name="CCOFFLINE_PAYMENT_STYLE"]').val() == 1) {
		jQuery('#style_preview_card').slideUp();
		jQuery('#style_preview_default').slideDown();
		$('select[name="CCOFFLINE_YEARS"]').parent().slideDown().prev().slideDown();
	} else if (jQuery('select[name="CCOFFLINE_PAYMENT_STYLE"]').val() == 2) {
		jQuery('#style_preview_default').slideUp();
		jQuery('#style_preview_card').slideDown();
		$('select[name="CCOFFLINE_YEARS"]').parent().slideUp().prev().slideUp();
	}
}

function showHideWorkingMode() {
	if (jQuery('input[name="CCOFFLINE_WORKING_MODE"]:checked').val() == 1) {
		jQuery('#working_mode_in_database').slideUp();
		jQuery('#working_mode_by_mail').slideDown();
		jQuery('input[name="CCOFFLINE_ADMIN_MAIL"]').parent().slideDown().prev().slideDown();
	} else if (jQuery('input[name="CCOFFLINE_WORKING_MODE"]:checked').val() == 2) {
		jQuery('#working_mode_by_mail').slideUp();
		jQuery('input[name="CCOFFLINE_ADMIN_MAIL"]').parent().slideUp().prev().slideUp();
		jQuery('#working_mode_in_database').slideDown();
	}
}

function showHideSize() {
	if (jQuery('select[name="CCOFFLINE_PAYMENT_SIZE"]').val() == 'col-md-12') {
		jQuery('#size_preview_75').slideUp();
		jQuery('#size_preview_50').slideUp();
		jQuery('#size_preview_100').slideDown();
	} else if (jQuery('select[name="CCOFFLINE_PAYMENT_SIZE"]').val() == 'col-md-9') {
		jQuery('#size_preview_50').slideUp();
		jQuery('#size_preview_100').slideUp();
		jQuery('#size_preview_75').slideDown();
	} else if (jQuery('select[name="CCOFFLINE_PAYMENT_SIZE"]').val() == 'col-md-6') {
		jQuery('#size_preview_100').slideUp();
		jQuery('#size_preview_75').slideUp();
		jQuery('#size_preview_50').slideDown();
	}
}