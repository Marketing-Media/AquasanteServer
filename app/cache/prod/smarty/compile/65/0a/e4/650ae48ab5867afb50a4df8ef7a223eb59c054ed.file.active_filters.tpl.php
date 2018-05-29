<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:57:24
         compiled from "/bitnami/prestashop/themes/aqua/templates/catalog/_partials/active_filters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20493854935b0c5f24858af3-26323298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '650ae48ab5867afb50a4df8ef7a223eb59c054ed' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/catalog/_partials/active_filters.tpl',
      1 => 1526496835,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20493854935b0c5f24858af3-26323298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'activeFilters' => 0,
    'filter' => 0,
    'clear_all_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0c5f2486a7a4_43698822',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0c5f2486a7a4_43698822')) {function content_5b0c5f2486a7a4_43698822($_smarty_tpl) {?>
  
 
<section id="js-active-search-filters" class="active_filters">
  <h1 class="h3"><?php echo smartyTranslate(array('s'=>'Active filters','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h1>
  <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
    <ul>
      <?php  $_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activeFilters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
?>
        <li><?php echo smartyTranslate(array('s'=>'%facet_label%: %facet_value%','sprintf'=>array('%facet_label%'=>$_smarty_tpl->tpl_vars['filter']->value['facetLabel'],'%facet_value%'=>$_smarty_tpl->tpl_vars['filter']->value['label']),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
 <a  class="js-search-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"> <i class="far fa-times"></i> </a></li>
      <?php } ?>
    </ul>
  <?php }?>
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['clear_all_link']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary reset"><?php echo smartyTranslate(array('s'=>'Reset all filters','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
</section>

<?php }} ?>
