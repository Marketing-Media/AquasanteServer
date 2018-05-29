<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:29:50
         compiled from "modules/amazzingblog/views/templates/front/pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1995648545b0c58aebbbb55-71775886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63740bfb71a00acdbb1be1387dcc2add7be2d238' => 
    array (
      0 => 'modules/amazzingblog/views/templates/front/pagination.tpl',
      1 => 1521474314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1995648545b0c58aebbbb55-71775886',
  'function' => 
  array (
    'getPageLink' => 
    array (
      'parameter' => 
      array (
        'page' => 1,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'settings' => 0,
    'ab_first_page_url' => 0,
    'page' => 0,
    'blog' => 0,
    'opt' => 0,
    'p_max' => 0,
    'p_type' => 0,
    'prev' => 0,
    'next' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0c58aec1c4d3_92938988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0c58aec1c4d3_92938988')) {function content_5b0c58aec1c4d3_92938988($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['p_max'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['npp']=='all' ? 0 : ceil($_smarty_tpl->tpl_vars['settings']->value['total']/$_smarty_tpl->tpl_vars['settings']->value['npp']), null, 0);?>
<?php $_smarty_tpl->tpl_vars['prev'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['p']-1, null, 0);?>
<?php $_smarty_tpl->tpl_vars['next'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['p']+1, null, 0);?>


<?php if (!function_exists('smarty_template_function_getPageLink')) {
    function smarty_template_function_getPageLink($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['getPageLink']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><?php if (isset($_smarty_tpl->tpl_vars['ab_first_page_url']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['blog']->value->addPageNumber($_smarty_tpl->tpl_vars['ab_first_page_url']->value,$_smarty_tpl->tpl_vars['page']->value),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>#<?php }?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<div class="pagination">
	<div class="npp-holder pull-left<?php if (count($_smarty_tpl->tpl_vars['settings']->value['npp_options'])<2) {?> hidden<?php }?>">
		<div class="inline-block">
			<select class="npp form-control">
				<?php  $_smarty_tpl->tpl_vars['opt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['opt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['npp_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['opt']->key => $_smarty_tpl->tpl_vars['opt']->value) {
$_smarty_tpl->tpl_vars['opt']->_loop = true;
?>
					<option value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['opt']->value), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['settings']->value['npp']==$_smarty_tpl->tpl_vars['opt']->value) {?> selected<?php }?>><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['opt']->value), ENT_QUOTES, 'UTF-8');?>
</option>
				<?php } ?>
				<option value="all"<?php if ($_smarty_tpl->tpl_vars['settings']->value['npp']=='all') {?> selected<?php }?>><?php echo smartyTranslate(array('s'=>'All','mod'=>'amazzingblog'),$_smarty_tpl);?>
</option>
			</select>
		</div>
		<span class="total inline-block">
            <input type="hidden" name="posts_total" class="posts_total" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['total']), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo smartyTranslate(array('s'=>'of %d','mod'=>'amazzingblog','sprintf'=>array($_smarty_tpl->tpl_vars['settings']->value['total'])),$_smarty_tpl);?>

        </span>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['p_max']->value>1) {?>
	<div class="pages pull-left<?php if (!empty($_smarty_tpl->tpl_vars['p_type']->value)&&$_smarty_tpl->tpl_vars['p_type']->value=='ajax') {?> ajax<?php }?>">
		<a href="<?php smarty_template_function_getPageLink($_smarty_tpl,array('page'=>$_smarty_tpl->tpl_vars['prev']->value));?>
" class="go-to-page" data-page="<?php if ($_smarty_tpl->tpl_vars['prev']->value) {?><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['prev']->value), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>1<?php }?>"><i class="icon-angle-left"></i></a>
		<?php if ($_smarty_tpl->tpl_vars['prev']->value) {?>
			<a href="<?php smarty_template_function_getPageLink($_smarty_tpl,array('page'=>1));?>
" class="go-to-page first" data-page="1">1</a>
			<?php if ($_smarty_tpl->tpl_vars['prev']->value>1) {?>
				<?php if ($_smarty_tpl->tpl_vars['prev']->value>2) {?>...<?php }?>
				<a href="<?php smarty_template_function_getPageLink($_smarty_tpl,array('page'=>$_smarty_tpl->tpl_vars['prev']->value));?>
" class="go-to-page" data-page="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['prev']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['prev']->value), ENT_QUOTES, 'UTF-8');?>
</a>
			<?php }?>
		<?php }?>
		<span class="current-page" data-page="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['p']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['p']), ENT_QUOTES, 'UTF-8');?>
</span>
		<?php if ($_smarty_tpl->tpl_vars['next']->value<=$_smarty_tpl->tpl_vars['p_max']->value) {?>
			<?php if ($_smarty_tpl->tpl_vars['next']->value<$_smarty_tpl->tpl_vars['p_max']->value) {?>
				<a href="<?php smarty_template_function_getPageLink($_smarty_tpl,array('page'=>$_smarty_tpl->tpl_vars['next']->value));?>
" class="go-to-page" data-page="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['next']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['next']->value), ENT_QUOTES, 'UTF-8');?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['next']->value<$_smarty_tpl->tpl_vars['p_max']->value-1) {?>...<?php }?>
			<?php }?>
			<a href="<?php smarty_template_function_getPageLink($_smarty_tpl,array('page'=>$_smarty_tpl->tpl_vars['p_max']->value));?>
" class="go-to-page last" data-page="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['p_max']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['p_max']->value), ENT_QUOTES, 'UTF-8');?>
</a>
		<?php } else { ?>
			<?php $_smarty_tpl->tpl_vars['next'] = new Smarty_variable($_smarty_tpl->tpl_vars['p_max']->value, null, 0);?>
		<?php }?>
		<a href="<?php smarty_template_function_getPageLink($_smarty_tpl,array('page'=>$_smarty_tpl->tpl_vars['next']->value));?>
" class="go-to-page" data-page="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['next']->value), ENT_QUOTES, 'UTF-8');?>
"><i class="icon-angle-right"></i></a>
	</div>
	<?php }?>
</div>

<?php }} ?>
