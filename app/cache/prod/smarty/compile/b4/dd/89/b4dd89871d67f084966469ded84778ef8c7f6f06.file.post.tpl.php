<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:29:52
         compiled from "modules/amazzingblog/views/templates/front/post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17413486565b0c58b0e22ff2-98665830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4dd89871d67f084966469ded84778ef8c7f6f06' => 
    array (
      0 => 'modules/amazzingblog/views/templates/front/post.tpl',
      1 => 1521474314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17413486565b0c58b0e22ff2-98665830',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ab_post' => 0,
    'ab_post_settings' => 0,
    'post' => 0,
    'blog' => 0,
    'ab_cat_parents' => 0,
    'settings' => 0,
    'author_name' => 0,
    'sn' => 0,
    'ab_comments' => 0,
    'comment' => 0,
    'ab_user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0c58b0ea5320_91894818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0c58b0ea5320_91894818')) {function content_5b0c58b0ea5320_91894818($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/bitnami/prestashop/vendor/prestashop/smarty/plugins/modifier.date_format.php';
?>

<?php $_smarty_tpl->tpl_vars['post'] = new Smarty_variable($_smarty_tpl->tpl_vars['ab_post']->value, null, 0);?>
<?php $_smarty_tpl->tpl_vars['settings'] = new Smarty_variable($_smarty_tpl->tpl_vars['ab_post_settings']->value, null, 0);?>
<div class="amazzingblog post-page">
<?php if ($_smarty_tpl->tpl_vars['post']->value&&$_smarty_tpl->tpl_vars['post']->value['active']) {?>
	<?php if (!$_smarty_tpl->tpl_vars['blog']->value->is_17) {?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['blog']->value->getTemplatePath('breadcrumbs.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('parents'=>$_smarty_tpl->tpl_vars['ab_cat_parents']->value,'current_item'=>$_smarty_tpl->tpl_vars['post']->value['title']), 0);?>
<?php }?>
	<h1><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h1>
	<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['show_author'])||!empty($_smarty_tpl->tpl_vars['settings']->value['show_date'])||!empty($_smarty_tpl->tpl_vars['settings']->value['show_views'])) {?>
		<div class="post-info info-block">
			<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['show_author'])) {?>
				<?php $_smarty_tpl->tpl_vars['author_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['blog']->value->getAuthorNameById($_smarty_tpl->tpl_vars['post']->value['author']), null, 0);?>
				<div class="post-author inline-block">
					<?php echo smartyTranslate(array('s'=>'Posted by','mod'=>'amazzingblog'),$_smarty_tpl);?>

					<span><i class="icon-user"></i> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['author_name']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>
				</div>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['show_date'])) {?>
				<?php if ($_smarty_tpl->tpl_vars['post']->value['publish_from']==$_smarty_tpl->tpl_vars['blog']->value->empty_date) {?><?php $_smarty_tpl->createLocalArrayVariable('post', null, 0);
$_smarty_tpl->tpl_vars['post']->value['publish_from'] = $_smarty_tpl->tpl_vars['post']->value['date_add'];?><?php }?>
				<div class="post-date inline-block"><i class="icon-calendar"></i> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['publish_from']),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</div>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['show_views'])) {?>
				<div class="post-views inline-block"><i class="icon-eye"></i> <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['post']->value['views']), ENT_QUOTES, 'UTF-8');?>
</div>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['post']->value['tags'])) {?>
				<div class="post-tags inline-block">
					<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['blog']->value->getTemplatePath('post-tags.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tags'=>$_smarty_tpl->tpl_vars['post']->value['tags'],'no_commas'=>true), 0);?>

				</div>
			<?php }?>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['post']->value['main_img']) {?>
		<div class="post-main-image">
			<img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['main_img'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
		</div>
	<?php }?>
	<div class="post-content"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</div>
	<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['social_sharing'])) {?>
		<div class="post-after-content clearfix">
			<div class="post-sharing pull-right">
				<?php echo smartyTranslate(array('s'=>'Share','mod'=>'amazzingblog'),$_smarty_tpl);?>

				<div class="sharing-icons inline-block">
					<?php  $_smarty_tpl->tpl_vars['sn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sn']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['social_sharing']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sn']->key => $_smarty_tpl->tpl_vars['sn']->value) {
$_smarty_tpl->tpl_vars['sn']->_loop = true;
?>
						<a href="#" class="social-share" data-network="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sn']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
							<i class="icon-<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['sn']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"></i>
						</a>
					<?php } ?>
				</div>
			</div>
		</div>
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['show_footer_hook'])) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayPostFooter'),$_smarty_tpl);?>

	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['blog']->value->general_settings['user_comments'])) {?>
		<div id="post-comments" class="post-comments">
			<h4><span class="comments-num"><?php echo htmlspecialchars(intval(count($_smarty_tpl->tpl_vars['ab_comments']->value)), ENT_QUOTES, 'UTF-8');?>
</span> <?php echo smartyTranslate(array('s'=>'comments','mod'=>'amazzingblog'),$_smarty_tpl);?>
</h4>
			<div class="comments-list">
				<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ab_comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
					<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['blog']->value->getTemplatePath('comment.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('comment'=>$_smarty_tpl->tpl_vars['comment']->value), 0);?>

				<?php } ?>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['blog']->value->getTemplatePath('comment-form.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id_post'=>$_smarty_tpl->tpl_vars['post']->value['id_post'],'user_data'=>$_smarty_tpl->tpl_vars['ab_user_data']->value), 0);?>

		</div>
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['show_aftercomments_hook'])) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayPostAfterComments'),$_smarty_tpl);?>

	<?php }?>
<?php }?>
</div>

<?php }} ?>
