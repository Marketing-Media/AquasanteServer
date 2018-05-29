<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:53:07
         compiled from "module:ps_imageslider/views/templates/hook/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5819516495b0c5e234ffd31-49798546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imageslider/views/templates/hook/slider.tpl',
      1 => 1521637369,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '5819516495b0c5e234ffd31-49798546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0c5e23524f49_36238653',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0c5e23524f49_36238653')) {function content_5b0c5e23524f49_36238653($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['homeslider']->value['slides']) {?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeslider']->value['speed'], ENT_QUOTES, 'UTF-8');?>
" data-wrap="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['homeslider']->value['wrap'], ENT_QUOTES, 'UTF-8');?>
" data-pause="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeslider']->value['pause'], ENT_QUOTES, 'UTF-8');?>
">
  <ol class="carousel-indicators">
      <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['homeslider']->value['slides']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slide']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeslidecontrol']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['slide']->index++;
 $_smarty_tpl->tpl_vars['slide']->first = $_smarty_tpl->tpl_vars['slide']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeslidecontrol']['first'] = $_smarty_tpl->tpl_vars['slide']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeslidecontrol']['index']++;
?>  
    <li data-target="#carousel" data-slide-to="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['homeslidecontrol']['index'], ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeslidecontrol']['first']) {?>active<?php }?>"></li>
      <?php } ?> 
    </ol>
    <ul class="carousel-inner" role="listbox">
      <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['homeslider']->value['slides']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slide']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['slide']->index++;
 $_smarty_tpl->tpl_vars['slide']->first = $_smarty_tpl->tpl_vars['slide']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeslider']['first'] = $_smarty_tpl->tpl_vars['slide']->first;
?>
        <li class="carousel-item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeslider']['first']) {?>active<?php }?>" role="option" aria-hidden="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeslider']['first']) {?>false<?php } else { ?>true<?php }?>">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
            <figure>
              <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slide']->value['legend']), ENT_QUOTES, 'UTF-8');?>
">
              <?php if ($_smarty_tpl->tpl_vars['slide']->value['title']||$_smarty_tpl->tpl_vars['slide']->value['description']) {?>
                <figcaption class="caption">
                  <h2 class="display-1 text-uppercase"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h2>
                  <div class="caption-description"><?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
</div>
                </figcaption>
              <?php }?>
            </figure>
          </a>
        </li>
      <?php } ?>
    </ul>
     <a class="carousel-control-prev  carousel-control icon-prev" href="#carousel" role="button" data-slide="prev">
    <i class="fal fa-chevron-left"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next icon-next carousel-control" href="#carousel" role="button" data-slide="next">
    <i class="fal fa-chevron-right"></i>
    <span class="sr-only">Next</span>
  </a>
    
  </div>
<?php }?>
<?php }} ?>
