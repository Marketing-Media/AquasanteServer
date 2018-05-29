<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:29:50
         compiled from "modules/amazzingblog/views/templates/front/post-list-item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11095450835b0c58aec23de2-23965056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a992b83cc893fe2240b4e8e5c421d14cefb68f23' => 
    array (
      0 => 'modules/amazzingblog/views/templates/front/post-list-item.tpl',
      1 => 1521474314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11095450835b0c58aec23de2-23965056',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'col' => 0,
    'k' => 0,
    'settings' => 0,
    'post' => 0,
    'blog' => 0,
    'cover_src' => 0,
    'split_date' => 0,
    'i' => 0,
    'fragment' => 0,
    'tags_tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0c58aeca1ab6_94523104',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0c58aeca1ab6_94523104')) {function content_5b0c58aeca1ab6_94523104($_smarty_tpl) {?>

<div class="post-item-wrapper<?php if ($_smarty_tpl->tpl_vars['col']->value) {?> col-md-<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['col']->value), ENT_QUOTES, 'UTF-8');?>
<?php if ($_smarty_tpl->tpl_vars['k']->value%$_smarty_tpl->tpl_vars['settings']->value['col_num']==0) {?> first-in-line<?php }?><?php }?>">
	<div class="post-item<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['show_date'])) {?> has-date<?php }?>">
		<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['cover_type'])) {?>
			<?php $_smarty_tpl->tpl_vars['cover_src'] = new Smarty_variable($_smarty_tpl->tpl_vars['blog']->value->getImgSrc('post',$_smarty_tpl->tpl_vars['post']->value['id_post'],$_smarty_tpl->tpl_vars['settings']->value['cover_type'],$_smarty_tpl->tpl_vars['post']->value['cover']), null, 0);?>
			<?php if (!empty($_smarty_tpl->tpl_vars['cover_src']->value)) {?>
				<div class="post-item-cover">
					<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['link_cover'])) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['link'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
						<img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cover_src']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
					<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['link_cover'])) {?></a><?php }?>
				</div>
			<?php }?>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['show_date'])) {?>
			<?php if ($_smarty_tpl->tpl_vars['post']->value['publish_from']==$_smarty_tpl->tpl_vars['blog']->value->empty_date) {?><?php $_smarty_tpl->createLocalArrayVariable('post', null, 0);
$_smarty_tpl->tpl_vars['post']->value['publish_from'] = $_smarty_tpl->tpl_vars['post']->value['date_add'];?><?php }?>
			<?php $_smarty_tpl->tpl_vars['split_date'] = new Smarty_variable($_smarty_tpl->tpl_vars['blog']->value->prepareDate($_smarty_tpl->tpl_vars['post']->value['publish_from']), null, 0);?>
			<div class="post-item-date">
				<?php  $_smarty_tpl->tpl_vars['fragment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fragment']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['split_date']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fragment']->key => $_smarty_tpl->tpl_vars['fragment']->value) {
$_smarty_tpl->tpl_vars['fragment']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['fragment']->key;
?>
					<div class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['i']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['fragment']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</div>
				<?php } ?>
			</div>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['title_truncate'])) {?>
			<h3 class="post-item-title<?php if ($_smarty_tpl->tpl_vars['settings']->value['display_type']=='grid'||$_smarty_tpl->tpl_vars['settings']->value['display_type']=='carousel') {?> overflow-ellipsis<?php }?>">
				<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['link_title'])) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['link'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
					<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value['title'],$_smarty_tpl->tpl_vars['settings']->value['title_truncate'],'...'),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

				<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['link_title'])) {?></a><?php }?>
			</h3>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['truncate'])) {?>
			<div class="post-item-content"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['post']->value['content']),$_smarty_tpl->tpl_vars['settings']->value['truncate'],'...');?>
</div>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['show_author'])||!empty($_smarty_tpl->tpl_vars['settings']->value['show_views'])||!empty($_smarty_tpl->tpl_vars['settings']->value['show_comments'])||!empty($_smarty_tpl->tpl_vars['settings']->value['show_readmore'])||!empty($_smarty_tpl->tpl_vars['settings']->value['show_tags'])) {?>
			<div class="post-item-footer clearfix">
				<div class="post-item-infos pull-left">
					<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['show_author'])) {?>
						<span class="post-item-info author">
							<i class="icon-user"></i>
							<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['firstname'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['lastname'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

						</span>
					<?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['show_views'])) {?>
						<span class="post-item-info views-num">
							<i class="icon-eye"></i>
							<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['post']->value['views']), ENT_QUOTES, 'UTF-8');?>

						</span>
					<?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['show_comments'])) {?>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['link'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
#post-comments" class="post-item-info comments-num">
							<i class="icon-comment"></i>
							<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['post']->value['comments']), ENT_QUOTES, 'UTF-8');?>

						</a>
					<?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['show_tags'])&&!empty($_smarty_tpl->tpl_vars['post']->value['tags'])) {?>
						<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['tags_tpl_path']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tags'=>$_smarty_tpl->tpl_vars['post']->value['tags']), 0);?>

					<?php }?>
				</div>
				<?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['truncate'])&&!empty($_smarty_tpl->tpl_vars['settings']->value['show_readmore'])) {?>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['link'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Read more','mod'=>'amazzingblog'),$_smarty_tpl);?>
" class="item-readmore pull-right">
						<?php echo smartyTranslate(array('s'=>'Read more','mod'=>'amazzingblog'),$_smarty_tpl);?>

						<i class="icon-arrow-right"></i>
					</a>
				<?php }?>
			</div>
		<?php }?>
	</div>
</div>

<?php }} ?>
