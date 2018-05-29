<?php /* Smarty version Smarty-3.1.19, created on 2018-05-29 05:59:05
         compiled from "/bitnami/prestashop/modules/hsmultiaccessoriespro/abstract/views/templates/hook/17/multi_accessories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11480309935b0d4e99dfb040-64566264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '535e71a6f9594358ac72a5cadbb7bde86cc501ea' => 
    array (
      0 => '/bitnami/prestashop/modules/hsmultiaccessoriespro/abstract/views/templates/hook/17/multi_accessories.tpl',
      1 => 1521557620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11480309935b0d4e99dfb040-64566264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessory_groups' => 0,
    'accessories_groups' => 0,
    'change_main_price' => 0,
    'accessories_table_price' => 0,
    'random_main_product_id' => 0,
    'sub_total' => 0,
    'show_table_price' => 0,
    'show_combination' => 0,
    'accessory_configuration_keys' => 0,
    'hs_i18n' => 0,
    'is_prestashop_16' => 0,
    'tab_name' => 0,
    'accessory_block_title' => 0,
    'group' => 0,
    'collapse_expand_groups' => 0,
    'is_expand' => 0,
    'class_expand' => 0,
    'class_collapse' => 0,
    'icon_utf8' => 0,
    'is_show_group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0d4e99e65c64_12632250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0d4e99e65c64_12632250')) {function content_5b0d4e99e65c64_12632250($_smarty_tpl) {?>

<div id="multiAccessoriesTab">
<?php if (!empty($_smarty_tpl->tpl_vars['accessory_groups']->value)&&!empty($_smarty_tpl->tpl_vars['accessories_groups']->value)) {?>
    <script type="text/javascript">
        changeMainPrice = <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['change_main_price']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
;
        accessoriesTablePrice = <?php echo $_smarty_tpl->tpl_vars['accessories_table_price']->value;?>
,
        randomMainProductId = '<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['random_main_product_id']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
',
        subTotal = '<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sub_total']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
',
        showTablePrice = <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['show_table_price']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
        showCombination = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['show_combination']->value), ENT_QUOTES, 'UTF-8');?>
,
        showOptionImage = <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory_configuration_keys']->value['HSMA_SHOW_IMAGES'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
,
        warningOutOfStock = '<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hs_i18n']->value['accessory_is_out_of_stock'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
',
        warningNotEnoughProduct = '<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hs_i18n']->value['there_is_not_enough_product_in_stock'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
';
        warningCustomQuantity = '<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hs_i18n']->value['quantity_must_be_greater_than_or_equal_to_minimum_quantity'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
';
    </script>
    <?php if (isset($_smarty_tpl->tpl_vars['is_prestashop_16']->value)) {?>
        <?php if (!empty($_smarty_tpl->tpl_vars['tab_name']->value)) {?><h3 class="page-product-heading"> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['tab_name']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h3><?php }?>
    <?php }?>    
    <div class="accessories_table_price">
        <table class="accessories_table_price_content">
        </table>
    </div>
    <div id="group_accessories">
        <?php if (empty($_smarty_tpl->tpl_vars['tab_name']->value)) {?><h3><?php if (!empty($_smarty_tpl->tpl_vars['accessory_block_title']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory_block_title']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php }?></h3><?php }?>
        <?php $_smarty_tpl->tpl_vars['is_expand'] = new Smarty_variable(0, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['accessory_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
            <?php if (isset($_smarty_tpl->tpl_vars['accessories_groups']->value[$_smarty_tpl->tpl_vars['group']->value['id_accessory_group']])&&!empty($_smarty_tpl->tpl_vars['accessories_groups']->value[$_smarty_tpl->tpl_vars['group']->value['id_accessory_group']])) {?>
                <div class="option-row clearfix">
                    <h4>
                        <?php $_smarty_tpl->tpl_vars['class_expand'] = new Smarty_variable("remove", null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['class_collapse'] = new Smarty_variable("add", null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['collapse_expand_groups']->value!==HsMaDisplayStyle::DISPLAY_GROUPS_NONE) {?>
                            <?php if ($_smarty_tpl->tpl_vars['collapse_expand_groups']->value==HsMaDisplayStyle::DISPLAY_GROUPS_EXPAND) {?>
                                <?php $_smarty_tpl->tpl_vars['class_expand'] = new Smarty_variable("remove", null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['class_collapse'] = new Smarty_variable('', null, 0);?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['collapse_expand_groups']->value==HsMaDisplayStyle::DISPLAY_GROUPS_EXPAND_FIRST) {?>
                                <?php if (!$_smarty_tpl->tpl_vars['is_expand']->value) {?>
                                    <?php $_smarty_tpl->tpl_vars['class_expand'] = new Smarty_variable("remove", null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['class_collapse'] = new Smarty_variable('', null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['is_expand'] = new Smarty_variable(1, null, 0);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->tpl_vars['class_expand'] = new Smarty_variable('', null, 0);?>
                                <?php }?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['collapse_expand_groups']->value==HsMaDisplayStyle::DISPLAY_GROUPS_COLLAPSE) {?>
                                <?php $_smarty_tpl->tpl_vars['class_expand'] = new Smarty_variable('', null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['class_collapse'] = new Smarty_variable("add", null, 0);?>
                            <?php }?>
                            <?php if (!$_smarty_tpl->tpl_vars['class_expand']->value) {?>
                                <?php $_smarty_tpl->tpl_vars['icon_utf8'] = new Smarty_variable(1, null, 0);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->tpl_vars['icon_utf8'] = new Smarty_variable(0, null, 0);?>
                            <?php }?>
                            <i class="material-icons <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['class_collapse']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['class_expand']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['icon_utf8']->value==1) {?>&#xE145;<?php } else { ?>&#xE15B;<?php }?></i>
                             
                        <?php }?>
                        <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

                    </h4>
                    <?php $_smarty_tpl->tpl_vars['is_show_group'] = new Smarty_variable("block", null, 0);?>
                    <?php if (!$_smarty_tpl->tpl_vars['class_expand']->value) {?>
                        <?php $_smarty_tpl->tpl_vars['is_show_group'] = new Smarty_variable("none", null, 0);?>
                    <?php }?>
                    <div class="content_group" style="display: <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['is_show_group']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                    <?php if ($_smarty_tpl->tpl_vars['group']->value['display_style']==HsMaDisplayStyle::DROPDOWN) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("./display_style_dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->getSubTemplate ("./display_style_checkbox_radio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php }?>
                    </div>
                </div>
            <?php }?>
        <?php } ?>
    </div>
<?php }?>
</div><?php }} ?>
