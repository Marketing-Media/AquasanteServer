<?php /* Smarty version Smarty-3.1.19, created on 2018-05-29 06:56:02
         compiled from "/bitnami/prestashop/administration/themes/default/template/controllers/backup/helpers/view/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14122791905b0d5bf27b4880-71045927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35b27599e389d1a4799e0a395c083fb5ef84477f' => 
    array (
      0 => '/bitnami/prestashop/administration/themes/default/template/controllers/backup/helpers/view/view.tpl',
      1 => 1520872782,
      2 => 'file',
    ),
    'ce88e89530c5946197ccfbc24b48425ee0a09fb3' => 
    array (
      0 => '/bitnami/prestashop/administration/themes/default/template/helpers/view/view.tpl',
      1 => 1520872784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14122791905b0d5bf27b4880-71045927',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name_controller' => 0,
    'hookName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0d5bf27e4a38_47120629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0d5bf27e4a38_47120629')) {function content_5b0d5bf27e4a38_47120629($_smarty_tpl) {?>

<div class="leadin"></div>


	<?php if (!isset($_smarty_tpl->tpl_vars['errors']->value)||count($_smarty_tpl->tpl_vars['errors']->value)==0) {?>
	<div class="panel">
		<h3><i class="icon-download"></i> <?php echo smartyTranslate(array('s'=>'Download','d'=>'Admin.Actions'),$_smarty_tpl);?>
</h3>
		<div class="alert alert-success"><?php echo smartyTranslate(array('s'=>'Beginning the download ...','d'=>'Admin.Advparameters.Notification'),$_smarty_tpl);?>
</div>
		<p><?php echo smartyTranslate(array('s'=>'Backup files should automatically start downloading.','d'=>'Admin.Advparameters.Notification'),$_smarty_tpl);?>
</p>
		<p><?php echo smartyTranslate(array('s'=>'If not,[1][2] please click here[/1]!','sprintf'=>array('[1]'=>'<a href="{$url_backup}" class="btn btn-default">','[/1]'=>'</a>','[2]'=>'<i class="icon-download"></i>'),'d'=>'Admin.Advparameters.Notification'),$_smarty_tpl);?>
</p>
		<iframe  style="width:0px; height:0px; overflow:hidden; border:none;" src="<?php echo $_smarty_tpl->tpl_vars['url_backup']->value;?>
"></iframe>
	</div>
	<?php }?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminView'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php } elseif (isset($_GET['controller'])) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
