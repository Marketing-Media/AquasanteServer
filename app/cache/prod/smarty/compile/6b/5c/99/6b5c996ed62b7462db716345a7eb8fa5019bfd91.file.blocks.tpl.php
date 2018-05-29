<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:29:52
         compiled from "modules/amazzingblog/views/templates/hook/blocks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17524293915b0c58b0eb5506-61932584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b5c996ed62b7462db716345a7eb8fa5019bfd91' => 
    array (
      0 => 'modules/amazzingblog/views/templates/hook/blocks.tpl',
      1 => 1521474314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17524293915b0c58b0eb5506-61932584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hook_name' => 0,
    'is_column_hook' => 0,
    'blocks' => 0,
    'block' => 0,
    'settings' => 0,
    'resource_type' => 0,
    'all_link' => 0,
    'blog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0c58b0f060f9_75859109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0c58b0f060f9_75859109')) {function content_5b0c58b0f060f9_75859109($_smarty_tpl) {?>

<div class="amazzingblog blocks <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['hook_name']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['is_column_hook']->value) {?> column-hook<?php }?>">
<?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
?>
	<?php $_smarty_tpl->tpl_vars['settings'] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['settings'], null, 0);?>
	<?php $_smarty_tpl->tpl_vars['resource_type'] = new Smarty_variable(current(explode('_',$_smarty_tpl->tpl_vars['settings']->value['type'])), null, 0);?>
	<div class="ab block <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['settings']->value['display_type'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
-view<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['compact'])) {?> compact<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['class'])) {?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['settings']->value['class'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" data-id="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['block']->value['id_block']), ENT_QUOTES, 'UTF-8');?>
"<?php if (!empty($_smarty_tpl->tpl_vars['block']->value['encoded_carousel_settings'])) {?> data-carousel-settings="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['block']->value['encoded_carousel_settings'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
		<div class="block-title<?php if ($_smarty_tpl->tpl_vars['is_column_hook']->value) {?> title_block<?php }?>">
			<h2><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['block']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h2>
			<?php if ($_smarty_tpl->tpl_vars['resource_type']->value=='post'&&!strstr($_smarty_tpl->tpl_vars['settings']->value['type'],'related')&&!empty($_smarty_tpl->tpl_vars['settings']->value['all_link'])) {?>
				<a class="block-viewall" href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['all_link']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'View all','mod'=>'amazzingblog'),$_smarty_tpl);?>
">
					<?php echo smartyTranslate(array('s'=>'View all','mod'=>'amazzingblog'),$_smarty_tpl);?>

				</a>
			<?php }?>
		</div>
		<div class="<?php if ($_smarty_tpl->tpl_vars['is_column_hook']->value&&$_smarty_tpl->tpl_vars['settings']->value['display_type']!='carousel') {?>block_content<?php }?>">
			<?php if ($_smarty_tpl->tpl_vars['resource_type']->value=='post') {?>
				<?php if ($_smarty_tpl->tpl_vars['settings']->value['display_type']=='presentation') {?>
					<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['blog']->value->getTemplatePath('post-list-presentation.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('posts'=>$_smarty_tpl->tpl_vars['block']->value['items'],'settings'=>$_smarty_tpl->tpl_vars['settings']->value), 0);?>

				<?php } else { ?>
					<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['blog']->value->getTemplatePath('post-list.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('posts'=>$_smarty_tpl->tpl_vars['block']->value['items'],'settings'=>$_smarty_tpl->tpl_vars['settings']->value,'no_pagination'=>true), 0);?>

				<?php }?>
			<?php } else { ?>
				<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['blog']->value->getTemplatePath('item-list.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>$_smarty_tpl->tpl_vars['block']->value['items'],'settings'=>$_smarty_tpl->tpl_vars['settings']->value), 0);?>

			<?php }?>
		</div>
	</div>
<?php } ?>
</div>

<?php }} ?>
