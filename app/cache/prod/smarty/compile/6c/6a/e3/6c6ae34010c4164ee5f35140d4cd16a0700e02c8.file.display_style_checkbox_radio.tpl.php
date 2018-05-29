<?php /* Smarty version Smarty-3.1.19, created on 2018-05-29 05:59:05
         compiled from "/bitnami/prestashop/modules/hsmultiaccessoriespro/abstract/views/templates/hook/17/display_style_checkbox_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10668185215b0d4e99e6b568-77302879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c6ae34010c4164ee5f35140d4cd16a0700e02c8' => 
    array (
      0 => '/bitnami/prestashop/modules/hsmultiaccessoriespro/abstract/views/templates/hook/17/display_style_checkbox_radio.tpl',
      1 => 1521557619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10668185215b0d4e99e6b568-77302879',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'group' => 0,
    'accessories_groups' => 0,
    'accessory' => 0,
    'input_type' => 0,
    'flag_checked' => 0,
    'buy_main_accessory_together' => 0,
    'is_product_page' => 0,
    'is_checked' => 0,
    'is_disabled' => 0,
    'accessory_configuration_keys' => 0,
    'image_width' => 0,
    'urls' => 0,
    'hs_i18n' => 0,
    'old_price' => 0,
    'static_token' => 0,
    'accessory_image_type' => 0,
    'link' => 0,
    'id_products_buy_together' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0d4e9a021fc4_98105112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0d4e9a021fc4_98105112')) {function content_5b0d4e9a021fc4_98105112($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['group']->value['display_style']==HsMaDisplayStyle::RADIO) {?>
    <?php $_smarty_tpl->tpl_vars['input_type'] = new Smarty_variable('radio', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['flag_checked'] = new Smarty_variable(0, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['input_type'] = new Smarty_variable('checkbox', null, 0);?>
<?php }?>
<?php $_smarty_tpl->tpl_vars['image_width'] = new Smarty_variable(800, null, 0);?>
<table id="product_list_accessory_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['group']->value['id_accessory_group']), ENT_QUOTES, 'UTF-8');?>
" class="accessorygroup clear">
    <?php  $_smarty_tpl->tpl_vars['accessory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accessory']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['accessories_groups']->value[$_smarty_tpl->tpl_vars['group']->value['id_accessory_group']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->key => $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['accessory']->key;
?>
        <?php $_smarty_tpl->tpl_vars['is_checked'] = new Smarty_variable(0, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['is_disabled'] = new Smarty_variable(0, null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['accessory']->value['is_available_buy_together']==1) {?>
            <?php if ($_smarty_tpl->tpl_vars['input_type']->value==='radio'&&!$_smarty_tpl->tpl_vars['flag_checked']->value) {?>
                <?php $_smarty_tpl->tpl_vars['is_checked'] = new Smarty_variable(1, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['flag_checked'] = new Smarty_variable(1, null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['is_checked'] = new Smarty_variable(0, null, 0);?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['input_type']->value==='checkbox') {?>
                <?php $_smarty_tpl->tpl_vars['is_checked'] = new Smarty_variable(1, null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['buy_main_accessory_together']->value==HsMaProductSettingAbstract::BUY_TOGETHER_REQUIRED&&$_smarty_tpl->tpl_vars['accessory']->value['required']==1) {?>
                    <?php $_smarty_tpl->tpl_vars['is_disabled'] = new Smarty_variable(1, null, 0);?>
                <?php }?>
            <?php }?>
        <?php }?>
        <tr class="clearfix"> 
            <?php if ($_smarty_tpl->tpl_vars['is_product_page']->value) {?>
                <td width="20px">
                <div class="custom-control custom-checkbox">
   <input data-id-product-attribute ="<?php if ($_smarty_tpl->tpl_vars['accessory']->value['id_product_attribute']!=0) {?><?php echo htmlspecialchars(intVal($_smarty_tpl->tpl_vars['accessory']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars(intVal($_smarty_tpl->tpl_vars['accessory']->value['default_id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
<?php }?>" data-randomId ="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory']->value['random_product_accessories_id'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['is_checked']->value==1) {?> checked="checked" data-quang="1" <?php if ($_smarty_tpl->tpl_vars['is_disabled']->value==1) {?> disabled='disabled' <?php }?><?php }?> data-required-buy-together ="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['accessory']->value['is_available_buy_together']), ENT_QUOTES, 'UTF-8');?>
" type="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['input_type']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" id='accessories_proudct_<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['id_accessory_group'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory']->value['id_accessory'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
' class="accessory_item custom-control-input" value="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory']->value['id_accessory'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['accessory']->value['is_available_for_order']) {?> disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['group']->value['display_style']==HsMaDisplayStyle::RADIO) {?>name="accessories_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['group']->value['id_accessory_group']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>/>
  <label class="custom-control-label" for="accessories_proudct_<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['id_accessory_group'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory']->value['id_accessory'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" ></label>
</div>
                   
                </td>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['accessory_configuration_keys']->value['HSMA_SHOW_IMAGES']) {?>
                <td>
                    <div class="hsma_images-container">
  
                        <div class="product-cover">
                          <?php if (!$_smarty_tpl->tpl_vars['accessory_configuration_keys']->value['HSMA_APPLY_FANCYBOX_TO_IMAGE']) {?>
                              <a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory']->value['link'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="product_img_link" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory']->value['name'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                          <?php }?>
                                <img class="accessory_image hsma-js-qv-product-cover"  src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory']->value['image'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"  title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory']->value['name'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory']->value['name'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" itemprop="image">
                          <?php if (!$_smarty_tpl->tpl_vars['accessory_configuration_keys']->value['HSMA_APPLY_FANCYBOX_TO_IMAGE']) {?>
                              </a>
                          <?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['accessory_configuration_keys']->value['HSMA_APPLY_FANCYBOX_TO_IMAGE']) {?>
                            <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['id_accessory_group'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['id_accessory'], ENT_QUOTES, 'UTF-8');?>
">
                              <i class="material-icons zoom-in"></i>
                            </div>
                          <?php }?>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['accessory_configuration_keys']->value['HSMA_APPLY_FANCYBOX_TO_IMAGE']) {?>
                    <div class="modal fade hsma_js-product-images-modal" id="product-modal_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['id_accessory_group'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['id_accessory'], ENT_QUOTES, 'UTF-8');?>
">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <figure>
                              <img class="hsma-js-modal-product-cover hsma-product-cover-modal hsma-product_img_link accessory_img_link" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_width']->value, ENT_QUOTES, 'UTF-8');?>
"  src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory']->value['image_fancybox'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory']->value['name'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory']->value['name'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" itemprop="image">
                            <figcaption class="image-caption">
                            
                              <div id="product-description-short" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['accessory']->value['description_short'];?>
</div>
                            
                          </figcaption>
                          </figure>
                          <aside id="thumbnails_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['id_accessory_group'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['id_accessory'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnails js-thumbnails text-xs-center"></aside>
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                  <?php }?>
                </td>
            <?php }?>
            <td>
                <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" class="add_accessory_to_cart">
                    <a class="ma_accessory_name" href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory']->value['link'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" target="<?php if ($_smarty_tpl->tpl_vars['accessory_configuration_keys']->value['HSMA_OPEN_ACCESSORIES_IN_NEW_TAB']) {?>_blank<?php }?>" title="<?php echo htmlspecialchars(strip_tags($_smarty_tpl->tpl_vars['hs_i18n']->value['click_to_view_details']), ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory']->value['name'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>

                    </a>
                    <span class="accessory_price">
                        <?php if ($_smarty_tpl->tpl_vars['accessory_configuration_keys']->value['HSMA_SHOW_PRICE']) {?>
                            <?php $_smarty_tpl->tpl_vars['old_price'] = new Smarty_variable('', null, 0);?>
                            <?php if (isset($_smarty_tpl->tpl_vars['accessory']->value['cart_rule'])&&!empty($_smarty_tpl->tpl_vars['accessory']->value['cart_rule'])) {?>
                                <?php $_smarty_tpl->tpl_vars['old_price'] = new Smarty_variable('line_though', null, 0);?>
                            <?php }?>
                            <span class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['old_price']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 price_<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['id_accessory_group'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory']->value['id_accessory'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"> <?php echo htmlspecialchars(Tools::displayPrice($_smarty_tpl->tpl_vars['accessory']->value['price']), ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php if (isset($_smarty_tpl->tpl_vars['accessory']->value['cart_rule'])&&!empty($_smarty_tpl->tpl_vars['accessory']->value['cart_rule'])) {?>
                                <span class="discount_price final_price_<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['id_accessory_group'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory']->value['id_accessory'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"> <?php echo htmlspecialchars(Tools::displayPrice($_smarty_tpl->tpl_vars['accessory']->value['final_price']), ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php }?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['accessory_configuration_keys']->value['HSMA_EACH_ACCESSORY_TO_BASKET']&&!$_smarty_tpl->tpl_vars['accessory']->value['is_available_for_order']) {?>

                            <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['id_accessory'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                            <input type="hidden" name="id_customization" value="" id="product_customization_id">
                            <a href="#" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hs_i18n']->value['add_to_cart'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"  class='hs_multi_accessories_add_to_cart'  data-button-action="add-to-cart" data-product-group="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['id_accessory_group'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory']->value['id_accessory'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" data-idproduct="<?php echo htmlspecialchars(intVal($_smarty_tpl->tpl_vars['accessory']->value['id_accessory']), ENT_QUOTES, 'UTF-8');?>
" data-idProductattribute="<?php if ($_smarty_tpl->tpl_vars['accessory']->value['id_product_attribute']!=0) {?><?php echo htmlspecialchars(intVal($_smarty_tpl->tpl_vars['accessory']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars(intVal($_smarty_tpl->tpl_vars['accessory']->value['default_id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
<?php }?>"><span></span></a>

                        <?php }?>

                    </span>
                    <br />
                    <span class="description">
                    <?php echo $_smarty_tpl->tpl_vars['accessory']->value['description_short'];?>

                    </span>
                    <?php if ($_smarty_tpl->tpl_vars['accessory']->value['is_available_when_out_of_stock']&&$_smarty_tpl->tpl_vars['accessory_configuration_keys']->value['HSMA_SHOW_ICON_OUT_OF_STOCK']) {?>
                        <span class="warning_out_of_stock" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory']->value['available_later'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"></span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['accessory']->value['is_available_for_order']&&$_smarty_tpl->tpl_vars['accessory_configuration_keys']->value['HSMA_SHOW_ICON_OUT_OF_STOCK']) {?>
                        <span class="forbidden_ordering" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hs_i18n']->value['out_of_stock'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"></span>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['accessory_configuration_keys']->value['HSMA_SHOW_CUSTOM_QUANTITY']) {?>
                        <input class="custom_quantity" name='qty' style="display:none;" <?php if (!$_smarty_tpl->tpl_vars['accessory_configuration_keys']->value['HSMA_ALLOW_CUSTOMER_CHANGE_QTY']) {?> disabled="disabled" <?php }?> data-custom-quantity="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['accessory']->value['default_quantity']), ENT_QUOTES, 'UTF-8');?>
" type="number" name="quantity" id="quantity_<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['id_accessory_group'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory']->value['id_accessory'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['accessory']->value['default_quantity']), ENT_QUOTES, 'UTF-8');?>
" min='<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['accessory']->value['min_quantity']), ENT_QUOTES, 'UTF-8');?>
'/>
                    <?php }?>
                    <span class="combination_<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['group']->value['id_accessory_group'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory']->value['id_accessory'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"></span>
                    <?php if ($_smarty_tpl->tpl_vars['accessory_configuration_keys']->value['HSMA_SHOW_SHORT_DESCRIPTION']) {?>
                        
                        <div class="tooltipster-content" style="display:none;">
                            <?php if ($_smarty_tpl->tpl_vars['accessory_configuration_keys']->value['HSMA_SHOW_IMAGES']) {?>
                                <img class="accessory_image" src="<?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory_image_type']->value, ENT_QUOTES, 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory']->value['link_rewrite'],'htmlall','UTF-8'),$_smarty_tpl->tpl_vars['accessory']->value['id_image'],$_tmp1),'html'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory']->value['name'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hs_i18n']->value['click_to_view_details'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
                            <?php }?>
                            <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['accessory']->value['description_short'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>

                        </div>
                    <?php }?> 
                    
                </form>
            </td>
        </tr>
    <?php } ?>
    <?php if ($_smarty_tpl->tpl_vars['group']->value['display_style']==HsMaDisplayStyle::RADIO) {?>
        <?php if ($_smarty_tpl->tpl_vars['buy_main_accessory_together']->value==HsMaProductSettingAbstract::BUY_TOGETHER_NO||empty($_smarty_tpl->tpl_vars['id_products_buy_together']->value[$_smarty_tpl->tpl_vars['group']->value['id_accessory_group']])) {?>
            <tr class="clearfix">
                <td width="10%">
                    <input type="radio" name="accessories_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['group']->value['id_accessory_group']), ENT_QUOTES, 'UTF-8');?>
" class="accessory_item" value="0"/>
                </td>
                <?php if ($_smarty_tpl->tpl_vars['accessory_configuration_keys']->value['HSMA_SHOW_IMAGES']) {?>
                    <td>&nbsp;</td>
                <?php }?>
                <td>
                    <span  class="ma_none_option"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hs_i18n']->value['none'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
                </td>
            </tr>  
        <?php }?>
    <?php }?>
</table>	
<?php }} ?>
