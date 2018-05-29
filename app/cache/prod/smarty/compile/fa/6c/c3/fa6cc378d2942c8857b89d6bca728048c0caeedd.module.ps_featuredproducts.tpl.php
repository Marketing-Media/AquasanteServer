<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:53:07
         compiled from "module:ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:877554575b0c5e2317ea02-91220224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa6cc378d2942c8857b89d6bca728048c0caeedd' => 
    array (
      0 => 'module:ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl',
      1 => 1521741243,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '877554575b0c5e2317ea02-91220224',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'allProductsLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0c5e23190093_05528302',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0c5e23190093_05528302')) {function content_5b0c5e23190093_05528302($_smarty_tpl) {?>
<section class="featured-products">
  <h2 class="h2 products-section-title text-uppercase">
    <?php echo smartyTranslate(array('s'=>'OUR BEST SELLERS','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

  </h2>
  <div class="products">
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
      <?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

    <?php } ?>
  </div>
  <div class="butcont">
  <a class="btn btn-outline-secondary btn-lg" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php echo smartyTranslate(array('s'=>'Learn More','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
 <i class="fas fa-chevron-right fa-sm" data-fa-transform="up-1"></i>
  </a>
  <a class="btn btn-secondary btn-lg" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php echo smartyTranslate(array('s'=>'Shop Now','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
 <i class="fas fa-chevron-right fa-sm" data-fa-transform="up-1"></i>
  </a>
  </div>
</section>
<?php }} ?>
