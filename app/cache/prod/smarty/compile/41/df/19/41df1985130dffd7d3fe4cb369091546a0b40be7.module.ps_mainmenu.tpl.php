<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:29:57
         compiled from "module:ps_mainmenu/ps_mainmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8364797715b0c58b51e4507-47894615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41df1985130dffd7d3fe4cb369091546a0b40be7' => 
    array (
      0 => 'module:ps_mainmenu/ps_mainmenu.tpl',
      1 => 1521660542,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '8364797715b0c58b51e4507-47894615',
  'function' => 
  array (
    'menu' => 
    array (
      'parameter' => 
      array (
        'nodes' => 
        array (
        ),
        'depth' => 0,
        'parent' => NULL,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'nodes' => 0,
    'depth' => 0,
    'node' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0c58b522d9a7_23118612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0c58b522d9a7_23118612')) {function content_5b0c58b522d9a7_23118612($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_counter'] = new Smarty_variable(0, null, 0);?>
<?php if (!function_exists('smarty_template_function_menu')) {
    function smarty_template_function_menu($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['menu']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {?>
      <?php if ($_smarty_tpl->tpl_vars['depth']->value==0) {?>
        <ul class="navbar-nav mr-auto" id="top-menu" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['page_identifier'], ENT_QUOTES, 'UTF-8');?>
" data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
">
          <?php  $_smarty_tpl->tpl_vars['node'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['node']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nodes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['node']->key => $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->_loop = true;
?>
              <li class=" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['type'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['node']->value['current']) {?> active <?php }?> nav-item  <?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {?> dropdown <?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['page_identifier'], ENT_QUOTES, 'UTF-8');?>
">  
                <a class="nav-link"  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['label'], ENT_QUOTES, 'UTF-8');?>
    
                </a>
                <?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {?>
                <span class="dropdown-toggle"  id="navbarDropdown<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['page_identifier'], ENT_QUOTES, 'UTF-8');?>
"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="material-icons add">&#xE313;</i>
                      <i class="material-icons remove d-none">&#xE316;</i>
                </span>
                <?php }?>
                <?php smarty_template_function_menu($_smarty_tpl,array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['node']->value['depth'],'parent'=>$_smarty_tpl->tpl_vars['node']->value));?>
              
              </li>   
          <?php } ?>
        </ul>
      <?php } else { ?>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['page_identifier'], ENT_QUOTES, 'UTF-8');?>
">
        
        
            <?php  $_smarty_tpl->tpl_vars['node'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['node']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nodes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['node']->key => $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->_loop = true;
?>  
              <a class="dropdown-item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['label'], ENT_QUOTES, 'UTF-8');?>
</a>
            <?php } ?>
        </div>
      <?php }?>
    <?php }?>
    
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



    

    <?php smarty_template_function_menu($_smarty_tpl,array('nodes'=>$_smarty_tpl->tpl_vars['menu']->value['children']));?>

    <div class="clearfix"></div>
    
<?php }} ?>
