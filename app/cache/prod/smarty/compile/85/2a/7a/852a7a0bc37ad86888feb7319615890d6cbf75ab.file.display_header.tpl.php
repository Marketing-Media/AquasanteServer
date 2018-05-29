<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:30:10
         compiled from "/bitnami/prestashop/modules/hsmultiaccessoriespro/abstract/views/templates/hook/17/display_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16506623575b0c58c252d7d8-81668666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '852a7a0bc37ad86888feb7319615890d6cbf75ab' => 
    array (
      0 => '/bitnami/prestashop/modules/hsmultiaccessoriespro/abstract/views/templates/hook/17/display_header.tpl',
      1 => 1521557619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16506623575b0c58c252d7d8-81668666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessory_alert_message' => 0,
    'buy_main_accessory_together' => 0,
    'is_enabling_option_buy_to_gether' => 0,
    'display_style' => 0,
    'utilize_block_cart_ajax' => 0,
    'msg_accessory_is_out_of_stock' => 0,
    'order_url' => 0,
    'ajaxRenderAccessories' => 0,
    'hsma_format_currency' => 0,
    'hsma_price_display_precision' => 0,
    'msg_available_later' => 0,
    'msg_out_of_stock' => 0,
    'is_show_icon_out_of_stock' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0c58c2560d90_81830591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0c58c2560d90_81830591')) {function content_5b0c58c2560d90_81830591($_smarty_tpl) {?>

<script type="text/javascript">
    alertMessage = '<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory_alert_message']->value,'quotes','UTF-8'), ENT_QUOTES, 'UTF-8');?>
';
    buyTogetherOption = <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['buy_main_accessory_together']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;
    isEnablingOptionBuyToGether = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['is_enabling_option_buy_to_gether']->value), ENT_QUOTES, 'UTF-8');?>
;
    displayStyleOption = <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['display_style']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;
    utilizeBlockCartAjax = <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['utilize_block_cart_ajax']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;
    msgOutOfStock = '<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['msg_accessory_is_out_of_stock']->value,'quotes','UTF-8'), ENT_QUOTES, 'UTF-8');?>
';
    orderUrl = '<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['order_url']->value,'quotes','UTF-8'), ENT_QUOTES, 'UTF-8');?>
';
    ajaxRenderAccessoriesUrl = '<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['ajaxRenderAccessories']->value,'quotes','UTF-8'), ENT_QUOTES, 'UTF-8');?>
';
    hsmaFormatCurrency = '<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hsma_format_currency']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
';
    hsmaPriceDisplayPrecision = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['hsma_price_display_precision']->value), ENT_QUOTES, 'UTF-8');?>
;
    msgAvailableLater = '<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['msg_available_later']->value,'quotes','UTF-8'), ENT_QUOTES, 'UTF-8');?>
';
    messageOutOfStock = '<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['msg_out_of_stock']->value,'quotes','UTF-8'), ENT_QUOTES, 'UTF-8');?>
';
    isShowIconOutOfStock = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['is_show_icon_out_of_stock']->value), ENT_QUOTES, 'UTF-8');?>
;
</script><?php }} ?>
