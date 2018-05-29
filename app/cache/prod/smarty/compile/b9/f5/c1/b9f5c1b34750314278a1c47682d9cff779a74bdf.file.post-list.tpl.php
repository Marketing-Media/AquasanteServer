<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:29:50
         compiled from "modules/amazzingblog/views/templates/front/post-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:939214765b0c58aeb86db2-88673996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9f5c1b34750314278a1c47682d9cff779a74bdf' => 
    array (
      0 => 'modules/amazzingblog/views/templates/front/post-list.tpl',
      1 => 1521474314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '939214765b0c58aeb86db2-88673996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'posts' => 0,
    'ab_pagination_settings' => 0,
    'no_pagination' => 0,
    'blog' => 0,
    'settings' => 0,
    'item_tpl' => 0,
    'col' => 0,
    'post' => 0,
    'item_tpl_path' => 0,
    'tags_tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0c58aebb8082_34860480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0c58aebb8082_34860480')) {function content_5b0c58aebb8082_34860480($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['posts']->value) {?>
	<?php if (!empty($_smarty_tpl->tpl_vars['ab_pagination_settings']->value)&&empty($_smarty_tpl->tpl_vars['no_pagination']->value)) {?>
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['blog']->value->getTemplatePath('pagination.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('settings'=>$_smarty_tpl->tpl_vars['ab_pagination_settings']->value,'p_type'=>$_smarty_tpl->tpl_vars['settings']->value['p_type']), 0);?>

	<?php }?>
    <?php $_smarty_tpl->tpl_vars['col'] = new Smarty_variable(false, null, 0);?><?php if ($_smarty_tpl->tpl_vars['settings']->value['display_type']=='grid') {?><?php $_smarty_tpl->tpl_vars['col'] = new Smarty_variable(12/$_smarty_tpl->tpl_vars['settings']->value['col_num'], null, 0);?><?php }?>
	<?php if (empty($_smarty_tpl->tpl_vars['settings']->value['compact'])) {?><?php $_smarty_tpl->tpl_vars['item_tpl'] = new Smarty_variable('post-list-item.tpl', null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['item_tpl'] = new Smarty_variable('post-list-item-compact.tpl', null, 0);?><?php }?>
	<?php $_smarty_tpl->tpl_vars['item_tpl_path'] = new Smarty_variable($_smarty_tpl->tpl_vars['blog']->value->getTemplatePath($_smarty_tpl->tpl_vars['item_tpl']->value), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['tags_tpl_path'] = new Smarty_variable($_smarty_tpl->tpl_vars['blog']->value->getTemplatePath('post-tags.tpl'), null, 0);?>
	<div class="post-list item-list <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['settings']->value['display_type'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['col']->value) {?> row<?php }?>">
	<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['post']->key;
?>
		<?php $_smarty_tpl->createLocalArrayVariable('post', null, 0);
$_smarty_tpl->tpl_vars['post']->value['link'] = $_smarty_tpl->tpl_vars['blog']->value->getPostLink($_smarty_tpl->tpl_vars['post']->value['id_post'],$_smarty_tpl->tpl_vars['post']->value['link_rewrite'],$_smarty_tpl->tpl_vars['post']->value['id_category_default']);?>
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['item_tpl_path']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('post'=>$_smarty_tpl->tpl_vars['post']->value,'col'=>$_smarty_tpl->tpl_vars['col']->value,'tags_tpl_path'=>$_smarty_tpl->tpl_vars['tags_tpl_path']->value), 0);?>

	<?php } ?>
	</div>
	<?php if (!empty($_smarty_tpl->tpl_vars['ab_pagination_settings']->value)&&empty($_smarty_tpl->tpl_vars['no_pagination']->value)) {?>
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['blog']->value->getTemplatePath('pagination.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('settings'=>$_smarty_tpl->tpl_vars['ab_pagination_settings']->value,'p_type'=>$_smarty_tpl->tpl_vars['settings']->value['p_type']), 0);?>

	<?php }?>
<?php } else { ?>
	<div class="alert-warning"><?php echo smartyTranslate(array('s'=>'No posts','mod'=>'amazzingblog'),$_smarty_tpl);?>
</div>
<?php }?>

<?php }} ?>
