<?php /* Smarty version Smarty-3.1.19, created on 2018-05-29 05:59:06
         compiled from "module:ps_categoryproducts/views/templates/hook/ps_categoryproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16414451155b0d4e9a084970-21345504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39d31a599d73c039735add7bd5dc7a2a3a72c0ba' => 
    array (
      0 => 'module:ps_categoryproducts/views/templates/hook/ps_categoryproducts.tpl',
      1 => 1521729546,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '16414451155b0d4e9a084970-21345504',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0d4e9a08ffb1_91229775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0d4e9a08ffb1_91229775')) {function content_5b0d4e9a08ffb1_91229775($_smarty_tpl) {?>
<section class="featured-products clearfix mt-3">
 <div class="title">
    <h5><?php echo smartyTranslate(array('s'=>'BERKEY SYSTEMS','d'=>'Modules.Categoryproducts.Shop'),$_smarty_tpl);?>
</h5>
  </div>
  <div class="products">
      <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
          <?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

      <?php } ?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'category','id'=>$_smarty_tpl->tpl_vars['category']->value->id),$_smarty_tpl);?>
" class="btn btn-outline-secondary btn-sm"><?php echo smartyTranslate(array('s'=>'SEE ALL OUR BERKEY SYSTEMS','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
 <i class="far fa-chevron-right"></i></a>
      
  </div>
  
</section>
<?php }} ?>
