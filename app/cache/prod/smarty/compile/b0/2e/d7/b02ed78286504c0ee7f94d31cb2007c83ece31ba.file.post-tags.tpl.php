<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:38:12
         compiled from "modules/amazzingblog/views/templates/front/post-tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14061426315b0c5aa453a394-65815494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b02ed78286504c0ee7f94d31cb2007c83ece31ba' => 
    array (
      0 => 'modules/amazzingblog/views/templates/front/post-tags.tpl',
      1 => 1521474314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14061426315b0c5aa453a394-65815494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fill' => 0,
    'tags' => 0,
    'i' => 0,
    'tag_url' => 0,
    'blog' => 0,
    'total' => 0,
    'tag_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0c5aa455b4f3_84322384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0c5aa455b4f3_84322384')) {function content_5b0c5aa455b4f3_84322384($_smarty_tpl) {?>

<?php if (!isset($_smarty_tpl->tpl_vars['fill']->value)) {?><?php $_smarty_tpl->tpl_vars['fill'] = new Smarty_variable(1, null, 0);?><?php }?>
<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?><?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['tags']->value), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['tag_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag_name']->_loop = false;
 $_smarty_tpl->tpl_vars['tag_url'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag_name']->key => $_smarty_tpl->tpl_vars['tag_name']->value) {
$_smarty_tpl->tpl_vars['tag_name']->_loop = true;
 $_smarty_tpl->tpl_vars['tag_url']->value = $_smarty_tpl->tpl_vars['tag_name']->key;
?>
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value->getTagLink($_smarty_tpl->tpl_vars['tag_url']->value),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="post-tag<?php if ($_smarty_tpl->tpl_vars['fill']->value) {?> fill<?php }?><?php if ($_smarty_tpl->tpl_vars['i']->value==1) {?> first<?php } elseif ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['total']->value) {?> last<?php }?>" title="<?php echo smartyTranslate(array('s'=>'Other posts with same tag','mod'=>'amazzingblog'),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['tag_name']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a><?php if (!$_smarty_tpl->tpl_vars['fill']->value&&$_smarty_tpl->tpl_vars['i']->value<$_smarty_tpl->tpl_vars['total']->value) {?>,<?php }?>
<?php } ?>

<?php }} ?>
