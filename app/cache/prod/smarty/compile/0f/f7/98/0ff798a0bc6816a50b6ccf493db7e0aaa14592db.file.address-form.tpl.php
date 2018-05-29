<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:30:01
         compiled from "/bitnami/prestashop/themes/aqua/templates/customer/_partials/address-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8006094945b0c58b93137f0-40443581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ff798a0bc6816a50b6ccf493db7e0aaa14592db' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/customer/_partials/address-form.tpl',
      1 => 1521637399,
      2 => 'file',
    ),
    '2b19a561d4d27e4c4cf2630b7c83e42ec724d01b' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/_partials/form-errors.tpl',
      1 => 1521637387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8006094945b0c58b93137f0-40443581',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'id_address' => 0,
    'formFields' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0c58b935d695_61989514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0c58b935d695_61989514')) {function content_5b0c58b935d695_61989514($_smarty_tpl) {?>

  <div class="js-address-form">
    <?php /*  Call merged included template "_partials/form-errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, '8006094945b0c58b93137f0-40443581');
content_5b0c58b931de83_03246139($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/form-errors.tpl" */?>

    
    <form
      method="POST"
      action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'address','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['id_address']->value)),$_smarty_tpl);?>
"
      data-id-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_address']->value, ENT_QUOTES, 'UTF-8');?>
"
      data-refresh-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'address','params'=>array('ajax'=>1,'action'=>'addressForm')),$_smarty_tpl);?>
"
    >
    

      
        <section class="form-fields">
          
            <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
              
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0][0]->smartyFormField(array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl);?>

              
            <?php } ?>
          
        </section>
      

      
      <footer class="form-footer clearfix">
        <input type="hidden" name="submitAddress" value="1">
        
          <button class="btn btn-primary float-xs-right" type="submit" class="form-control-submit">
            <?php echo smartyTranslate(array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

          </button>
        
      </footer>
      

    </form>
  </div>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:30:01
         compiled from "/bitnami/prestashop/themes/aqua/templates/_partials/form-errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c58b931de83_03246139')) {function content_5b0c58b931de83_03246139($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    
      <ul>
        <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
          <li class="alert alert-danger"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
        <?php } ?>
      </ul>
    
  </div>
<?php }?>
<?php }} ?>
