<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:29:50
         compiled from "modules/amazzingblog/views/templates/front/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10152934175b0c58aeb10e73-15444730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b062876f67a4b489a83cf51f5910594681c2fe92' => 
    array (
      0 => 'modules/amazzingblog/views/templates/front/category.tpl',
      1 => 1521474314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10152934175b0c58aeb10e73-15444730',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ab_category' => 0,
    'category' => 0,
    'blog' => 0,
    'ab_cat_parents' => 0,
    'ab_category_settings' => 0,
    'main_src' => 0,
    'ab_subcategories' => 0,
    'cat' => 0,
    'item_tpl_path' => 0,
    'ab_posts' => 0,
    'ab_post_list_settings' => 0,
    'ab_additional_filters' => 0,
    'name' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0c58aeb5ce61_54852735',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0c58aeb5ce61_54852735')) {function content_5b0c58aeb5ce61_54852735($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['category'] = new Smarty_variable($_smarty_tpl->tpl_vars['ab_category']->value, null, 0);?>
<div class="amazzingblog category-page">
<?php if ($_smarty_tpl->tpl_vars['category']->value&&$_smarty_tpl->tpl_vars['category']->value['active']) {?>
	<?php if (!$_smarty_tpl->tpl_vars['blog']->value->is_17) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['blog']->value->getTemplatePath('breadcrumbs.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('parents'=>$_smarty_tpl->tpl_vars['ab_cat_parents']->value,'current_item'=>$_smarty_tpl->tpl_vars['category']->value['title']), 0);?>
<?php }?>
	<h2><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h2>
	<?php if (!empty($_smarty_tpl->tpl_vars['ab_category_settings']->value['main_img'])) {?>
		<?php $_smarty_tpl->tpl_vars['main_src'] = new Smarty_variable($_smarty_tpl->tpl_vars['blog']->value->getImgSrc('category',$_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['ab_category_settings']->value['main_img'],$_smarty_tpl->tpl_vars['category']->value['main_img']), null, 0);?>
		<?php if (!empty($_smarty_tpl->tpl_vars['main_src']->value)) {?>
			<div class="category-main-image"><img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['main_src']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"></div>
		<?php }?>
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['description'])) {?>
		<div class="category-description">
			<?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
 
		</div>
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['ab_subcategories']->value)) {?>
		<div class="blog-subcategories">
		<?php $_smarty_tpl->tpl_vars['item_tpl_path'] = new Smarty_variable($_smarty_tpl->tpl_vars['blog']->value->getListItemTplPath('category'), null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab_subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
			<?php $_smarty_tpl->createLocalArrayVariable('cat', null, 0);
$_smarty_tpl->tpl_vars['cat']->value['class'] = 'blog-subcategory';?>
			<?php $_smarty_tpl->createLocalArrayVariable('cat', null, 0);
$_smarty_tpl->tpl_vars['cat']->value['img_src'] = $_smarty_tpl->tpl_vars['blog']->value->getImgSrc('category',$_smarty_tpl->tpl_vars['cat']->value['id_category'],$_smarty_tpl->tpl_vars['ab_category_settings']->value['subcat_cover'],$_smarty_tpl->tpl_vars['cat']->value['cover']);?>
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['item_tpl_path']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item'=>$_smarty_tpl->tpl_vars['cat']->value), 0);?>

		<?php } ?>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['ab_posts']->value) {?>
		<div class="dynamic-posts">
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['blog']->value->getTemplatePath('post-list.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('posts'=>$_smarty_tpl->tpl_vars['ab_posts']->value,'settings'=>$_smarty_tpl->tpl_vars['ab_post_list_settings']->value), 0);?>

		</div>
	<?php }?>
	<form action="" class="additional-filters hidden">
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ab_additional_filters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['name']->value=='active') {?><?php continue 1?><?php }?>
			<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['name']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(implode(',',$_smarty_tpl->tpl_vars['value']->value),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
		<?php } ?>
	</form>
<?php }?>
</div>

<?php }} ?>
