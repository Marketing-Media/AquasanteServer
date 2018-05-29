<?php /* Smarty version Smarty-3.1.19, created on 2018-05-29 06:50:12
         compiled from "/bitnami/prestashop/administration/themes/default/template/controllers/request_sql/list_action_export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12065322065b0d5a947b4b26-56237971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '031c2f30ea6da182c52cf26caaf30950d823682c' => 
    array (
      0 => '/bitnami/prestashop/administration/themes/default/template/controllers/request_sql/list_action_export.tpl',
      1 => 1520872783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12065322065b0d5a947b4b26-56237971',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0d5a947bdb08_04458082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0d5a947bdb08_04458082')) {function content_5b0d5a947bdb08_04458082($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="btn btn-default">
	<i class="icon-cloud-upload"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
