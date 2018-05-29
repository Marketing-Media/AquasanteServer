<?php /* Smarty version Smarty-3.1.19, created on 2018-05-29 06:50:03
         compiled from "/bitnami/prestashop/administration/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3380793125b0d5a8b977c18-36473838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '172b0e148497b12af1364869724ab829ea5cc2c8' => 
    array (
      0 => '/bitnami/prestashop/administration/themes/default/template/content.tpl',
      1 => 1520872782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3380793125b0d5a8b977c18-36473838',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0d5a8b980a27_10771144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0d5a8b980a27_10771144')) {function content_5b0d5a8b980a27_10771144($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
