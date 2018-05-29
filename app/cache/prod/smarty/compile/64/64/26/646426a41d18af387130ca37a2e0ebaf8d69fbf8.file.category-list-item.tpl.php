<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:29:50
         compiled from "modules/amazzingblog/views/templates/front/category-list-item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2514044955b0c58aeb61dd2-14485444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '646426a41d18af387130ca37a2e0ebaf8d69fbf8' => 
    array (
      0 => 'modules/amazzingblog/views/templates/front/category-list-item.tpl',
      1 => 1521474314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2514044955b0c58aeb61dd2-14485444',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0c58aeb81580_54323625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0c58aeb81580_54323625')) {function content_5b0c58aeb81580_54323625($_smarty_tpl) {?>


	<div class="category-item<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['class'])) {?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['class'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>">
	<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['url'])) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['url'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['img_src'])) {?><img class="cat-img" src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['img_src'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
		<span class="inline-block">
			<span class="category-title inline-block"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['item']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
			<?php if (isset($_smarty_tpl->tpl_vars['item']->value['posts_num'])) {?>
				<br><span class="posts-num inline-block"><?php echo smartyTranslate(array('s'=>'%d posts','mod'=>'amazzingblog','sprintf'=>array($_smarty_tpl->tpl_vars['cat']->value['posts_num'])),$_smarty_tpl);?>
</span>
			<?php }?>
		</span>
	<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['url'])) {?></a><?php }?>
	</div>


<?php }} ?>
