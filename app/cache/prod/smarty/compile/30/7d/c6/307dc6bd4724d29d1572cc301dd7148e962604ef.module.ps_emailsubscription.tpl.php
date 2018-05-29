<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:29:57
         compiled from "module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8251259025b0c58b52fa419-41493864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl',
      1 => 1526496425,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '8251259025b0c58b52fa419-41493864',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urls' => 0,
    'value' => 0,
    'msg' => 0,
    'nw_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0c58b5315308_31296072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0c58b5315308_31296072')) {function content_5b0c58b5315308_31296072($_smarty_tpl) {?>

<div class="block_newsletter grid">
  
    <i class="fas fa-paper-plane"></i><p id="block-newsletter-label"> <?php echo smartyTranslate(array('s'=>'[1] SIGN UP TO OUR MAILING LIST[/1] to receive exclusive offers, testimonials, health information, and more...','sprintf'=>array('[1]'=>'<strong>','[/1]'=>'</strong>'),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</p>
    <div class="Form">
      <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
        
          
            <button
              class="newsletterbut"
              name="submitNewsletter"
              type="submit"             
            ><i class="fal fa-envelope fa-lg"></i></button>
           
            <div class="input-wrapper">
              <input
                name="email"
                type="text"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                placeholder="<?php echo smartyTranslate(array('s'=>'your@email.com','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
"
                aria-labelledby="block-newsletter-label"
              >
            </div>
            <input type="hidden" name="action" value="0">         
      </form>
      
    </div>
 <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
                <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

                </p>
      <?php }?>  
</div>
<?php }} ?>
