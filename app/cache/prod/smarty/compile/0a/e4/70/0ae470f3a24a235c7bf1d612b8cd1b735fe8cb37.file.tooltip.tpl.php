<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:29:56
         compiled from "/bitnami/prestashop/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20719274975b0c58b472e688-30928312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ae470f3a24a235c7bf1d612b8cd1b735fe8cb37' => 
    array (
      0 => '/bitnami/prestashop/modules/welcome/views/templates/tooltip.tpl',
      1 => 1520872794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20719274975b0c58b472e688-30928312',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0c58b4738cb6_88832198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0c58b4738cb6_88832198')) {function content_5b0c58b4738cb6_88832198($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
