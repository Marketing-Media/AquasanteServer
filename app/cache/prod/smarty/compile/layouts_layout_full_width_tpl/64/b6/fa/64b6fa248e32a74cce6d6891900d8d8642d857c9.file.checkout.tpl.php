<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:30:15
         compiled from "/bitnami/prestashop/themes/aqua/templates/checkout/checkout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20190337105b0c58c7c60566-70363295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64b6fa248e32a74cce6d6891900d8d8642d857c9' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/checkout/checkout.tpl',
      1 => 1521637377,
      2 => 'file',
    ),
    '39e703859c35cf40c05ecdb0021cbb6b2d5d3864' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/_partials/stylesheets.tpl',
      1 => 1521637388,
      2 => 'file',
    ),
    '3118663f9f1042849592b72015c7ce8956a5626d' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/_partials/javascript.tpl',
      1 => 1521742887,
      2 => 'file',
    ),
    'a8f19a6cb7e9577fe1d9e4af1e165c0bd86d07ea' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/_partials/head.tpl',
      1 => 1521637388,
      2 => 'file',
    ),
    'bef91dcc41221279b010df35a5360b22c14707e5' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/checkout/_partials/header.tpl',
      1 => 1527276002,
      2 => 'file',
    ),
    '34582c3c43cf0bda6c5eeede721787bde9d50f25' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/_partials/notifications.tpl',
      1 => 1521637388,
      2 => 'file',
    ),
    '09ca73ce724813f2491a4178ab30abff02e3ba51' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/checkout/_partials/cart-summary-product-line.tpl',
      1 => 1521641571,
      2 => 'file',
    ),
    'c18de8811a64552ae2f8a610e947764bafa8bc9d' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/checkout/_partials/cart-voucher.tpl',
      1 => 1521641572,
      2 => 'file',
    ),
    '2db2ce99af4b6eb0a1e993c804483068e0924370' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/checkout/_partials/cart-summary-totals.tpl',
      1 => 1527276844,
      2 => 'file',
    ),
    '3a74beb4f1388da3b551f4296ea470ae16b13727' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/checkout/_partials/cart-summary.tpl',
      1 => 1521641572,
      2 => 'file',
    ),
    '659c695d0c158615665f1a2a16b20a88451f6296' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/checkout/_partials/footer.tpl',
      1 => 1521658584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20190337105b0c58c7c60566-70363295',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'page' => 0,
    'checkout_process' => 0,
    'cart' => 0,
    'javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0c58c7e189a2_44893989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0c58c7e189a2_44893989')) {function content_5b0c58c7e189a2_44893989($_smarty_tpl) {?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '20190337105b0c58c7c60566-70363295');
content_5b0c58c7c68007_77607449($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/head.tpl" */?>
    
  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames($_smarty_tpl->tpl_vars['page']->value['body_classes']), ENT_QUOTES, 'UTF-8');?>
">

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl);?>

    

    <header id="header">
      
        <?php /*  Call merged included template "checkout/_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('checkout/_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '20190337105b0c58c7c60566-70363295');
content_5b0c58c7ce8745_77343755($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "checkout/_partials/header.tpl" */?>
      
    </header>

    
      <?php /*  Call merged included template "_partials/notifications.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '20190337105b0c58c7c60566-70363295');
content_5b0c58c7d23f82_59225914($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/notifications.tpl" */?>
    

    <section id="wrapper">
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayWrapperTop"),$_smarty_tpl);?>

      <div class="container">

      
        <section id="content">
          <div class="row">
            <div class="col-md-8">
              
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0][0]->smartyRender(array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl);?>

              
            </div>
            <div class="col-md-4">

              
                <?php /*  Call merged included template "checkout/_partials/cart-summary.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('checkout/_partials/cart-summary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, '20190337105b0c58c7c60566-70363295');
content_5b0c58c7d59c81_23772508($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "checkout/_partials/cart-summary.tpl" */?>
              

              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayReassurance'),$_smarty_tpl);?>

            </div>
          </div>
        </section>
      
      </div>
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayWrapperBottom"),$_smarty_tpl);?>

    </section>

    <footer id="footer">
      
        <?php /*  Call merged included template "checkout/_partials/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('checkout/_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '20190337105b0c58c7c60566-70363295');
content_5b0c58c7e07b02_15074205($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "checkout/_partials/footer.tpl" */?>
      
    </footer>

    
      <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '20190337105b0c58c7c60566-70363295');
content_5b0c58c7cc3a17_10516111($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>
    

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>

    

  </body>

</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:30:15
         compiled from "/bitnami/prestashop/themes/aqua/templates/_partials/head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c58c7c68007_77607449')) {function content_5b0c58c7c68007_77607449($_smarty_tpl) {?>

  <meta charset="utf-8">


  <meta http-equiv="x-ua-compatible" content="ie=edge">



  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</title>
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots']!=='index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>



  <?php $_smarty_tpl->tpl_vars["alternative_langs"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['urls']->value['alternative_langs'])===null||$tmp==='' ? array() : $tmp), null, 0);?>
  <?php  $_smarty_tpl->tpl_vars['pageUrl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pageUrl']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['alternative_langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pageUrl']->key => $_smarty_tpl->tpl_vars['pageUrl']->value) {
$_smarty_tpl->tpl_vars['pageUrl']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['pageUrl']->key;
?>
    <link rel="alternate" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageUrl']->value, ENT_QUOTES, 'UTF-8');?>
" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
">
  <?php } ?>



  <meta name="viewport" content="width=device-width, initial-scale=1">



  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">



  <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '20190337105b0c58c7c60566-70363295');
content_5b0c58c7cadb39_79088952($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '20190337105b0c58c7c60566-70363295');
content_5b0c58c7cc3a17_10516111($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>




<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:30:15
         compiled from "/bitnami/prestashop/themes/aqua/templates/_partials/stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c58c7cadb39_79088952')) {function content_5b0c58c7cadb39_79088952($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php } ?>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:30:15
         compiled from "/bitnami/prestashop/themes/aqua/templates/_partials/javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c58c7cc3a17_10516111')) {function content_5b0c58c7cc3a17_10516111($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
></script>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  </script>
<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)&&count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <script type="text/javascript">
    <?php  $_smarty_tpl->tpl_vars['var_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var_value']->_loop = false;
 $_smarty_tpl->tpl_vars['var_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var_value']->key => $_smarty_tpl->tpl_vars['var_value']->value) {
$_smarty_tpl->tpl_vars['var_value']->_loop = true;
 $_smarty_tpl->tpl_vars['var_name']->value = $_smarty_tpl->tpl_vars['var_value']->key;
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['var_value']->value);?>
;
    <?php } ?>
  </script>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:30:15
         compiled from "/bitnami/prestashop/themes/aqua/templates/checkout/_partials/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c58c7ce8745_77343755')) {function content_5b0c58c7ce8745_77343755($_smarty_tpl) {?>

  <div class="header-banner">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBanner'),$_smarty_tpl);?>

  </div>



  <nav class="header-nav ">  
    <div class="right-nav">
       <ul class="follow">
        <li><a href="https://www.facebook.com/aquaberkeyfilters/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
        <li class="instagram"><a href="https://www.instagram.com/aquaberkeyfilters/" target="_blank"><i class="fab fa-instagram"></i></a></li> 
        <li class="youtube"><a href="https://www.youtube.com/channel/UCSad12V3KZIdFiYr2MNYhFA" target="_blank"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
youtube.svg" alt=""></a></li>
      </ul>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav2'),$_smarty_tpl);?>

    </div>
  </nav>



  <div id="logorow" class="logo grid">
    
      <a class="" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
logo<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']=='qc') {?>qc<?php }?>.svg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" width="560px">
      </a>
  
    
      
        <div class="freeshipping">
          
            <div class="icon"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
ship.svg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" ></div>
            <div class="text">
              <div class="title text-uppercase bfirst"><?php echo smartyTranslate(array('s'=>'Free Shipping','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</div>
              <div class="subtitle bthird"><?php echo smartyTranslate(array('s'=>'on Berkey® Systems','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</div>
            </div>
          
        </div>
        <div class="experts">
          <div class="text-uppercase bthird title"><?php echo smartyTranslate(array('s'=>'Call the water experts toll free','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</div>
          <a href="tel:18444237539"><div class="text-uppercase bsecundary subtitle"><i class="fas fa-phone" data-fa-transform="flip-h"></i> <?php echo smartyTranslate(array('s'=>'[1]844-4-BERKEY[/1]  (1-844-423-7539)','d'=>'Shop.Theme.Global','sprintf'=>array('[1]'=>'<strong>','[/1]'=>'</strong>')),$_smarty_tpl);?>
</div></a>
          <div class="contact">
            <ul class="d-flex justify-content-center contactus">
              <li class="bthird"><i class="icon fal fa-envelope"></i><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Email Us','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
              <li class="bthird"><i class="icon fab fa-facebook-messenger"></i><a href=""><?php echo smartyTranslate(array('s'=>'Messenger','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
            </ul>
          </div>
        </div>
      
    
  </div>
 


  
  
    <div class="menu-top row navbar navbar-expand-lg navbar-dark bg-third">
     <div><i class="far fa-bars bfirst"></i> 
      <a class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <?php echo smartyTranslate(array('s'=>"Menu",'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

      </a></div>
      <div id="navbarSupportedContent" class="collapse navbar-collapse">
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNavFullWidth'),$_smarty_tpl);?>

      </div>
    </div>




<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:30:15
         compiled from "/bitnami/prestashop/themes/aqua/templates/_partials/notifications.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c58c7d23f82_59225914')) {function content_5b0c58c7d23f82_59225914($_smarty_tpl) {?>
<aside id="notifications">

  <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
    
      <article class="notification notification-danger" role="alert" data-alert="danger">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
          <?php } ?>
        </ul>
      </article>
    
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
    
      <article class="notification notification-warning" role="alert" data-alert="warning">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['warning']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
          <?php } ?>
        </ul>
      </article>
    
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
    
      <article class="notification notification-success" role="alert" data-alert="success">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['success']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
          <?php } ?>
        </ul>
      </article>
    
  <?php }?>

  <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
    
      <article class="notification notification-info" role="alert" data-alert="info">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
          <?php } ?>
        </ul>
      </article>
    
  <?php }?>

</aside>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:30:15
         compiled from "/bitnami/prestashop/themes/aqua/templates/checkout/_partials/cart-summary.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c58c7d59c81_23772508')) {function content_5b0c58c7d59c81_23772508($_smarty_tpl) {?>
<section id="js-checkout-summary" class="card js-cart" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
?ajax=1&action=refresh">
  <div class="card-block">
    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCheckoutSummaryTop'),$_smarty_tpl);?>

    

    
      <div class="cart-summary-products">

        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</p>

        <p>
          <a href="#" data-toggle="collapse" data-target="#cart-summary-product-list">
            <?php echo smartyTranslate(array('s'=>'show details','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

          </a>
        </p>

        
          <div class="collapse" id="cart-summary-product-list">
            <ul class="media-list">
              <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                <li class="media"><?php /*  Call merged included template "checkout/_partials/cart-summary-product-line.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('checkout/_partials/cart-summary-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, '20190337105b0c58c7c60566-70363295');
content_5b0c58c7d6dc27_54225519($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "checkout/_partials/cart-summary-product-line.tpl" */?></li>
              <?php } ?>
            </ul>
          </div>
        
      </div>
    

    
      <?php  $_smarty_tpl->tpl_vars["subtotal"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["subtotal"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['subtotals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["subtotal"]->key => $_smarty_tpl->tpl_vars["subtotal"]->value) {
$_smarty_tpl->tpl_vars["subtotal"]->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['subtotal']->value&&$_smarty_tpl->tpl_vars['subtotal']->value['type']!=='tax') {?>
          <div class="cart-summary-line cart-summary-subtotals" id="cart-subtotal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
            <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</span>
          </div>
        <?php }?>
      <?php } ?>
    

  </div>

  
    <?php /*  Call merged included template "checkout/_partials/cart-voucher.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('checkout/_partials/cart-voucher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '20190337105b0c58c7c60566-70363295');
content_5b0c58c7d9e758_67845495($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "checkout/_partials/cart-voucher.tpl" */?>
  

  <hr class="separator">

  
    <?php /*  Call merged included template "checkout/_partials/cart-summary-totals.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('checkout/_partials/cart-summary-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, '20190337105b0c58c7c60566-70363295');
content_5b0c58c7ddb561_50575915($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "checkout/_partials/cart-summary-totals.tpl" */?>
  

</section>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:30:15
         compiled from "/bitnami/prestashop/themes/aqua/templates/checkout/_partials/cart-summary-product-line.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c58c7d6dc27_54225519')) {function content_5b0c58c7d6dc27_54225519($_smarty_tpl) {?>

  <div class="media-left">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
      <img class="media-object" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['small']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
    </a>
  </div>
  <div class="media-body">
    <span class="product-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="product-quantity">x<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="product-price float-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl);?>

  </div>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:30:15
         compiled from "/bitnami/prestashop/themes/aqua/templates/checkout/_partials/cart-voucher.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c58c7d9e758_67845495')) {function content_5b0c58c7d9e758_67845495($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['allowed']) {?>
  
    <div class="block-promo">
      <div class="cart-voucher">
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['added']) {?>
          
            <ul class="promo-name card-block">
              <?php  $_smarty_tpl->tpl_vars['voucher'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['voucher']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['vouchers']['added']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->key => $_smarty_tpl->tpl_vars['voucher']->value) {
$_smarty_tpl->tpl_vars['voucher']->_loop = true;
?>
                <li class="cart-summary-line">
                  <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['delete_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="remove-voucher"><i class="material-icons">&#xE872;</i></a>
                  <div class="float-xs-right">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['reduction_formatted'], ENT_QUOTES, 'UTF-8');?>

                  </div>
                </li>
              <?php } ?>
            </ul>
          
        <?php }?>

        <p>
          <a class="collapse-button promo-code-button" data-toggle="collapse" href="#promo-code" aria-expanded="false" aria-controls="promo-code">
            <?php echo smartyTranslate(array('s'=>'Have a promo code?','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>

          </a>
        </p>

        <div class="promo-code collapse<?php if (count($_smarty_tpl->tpl_vars['cart']->value['discounts'])>0) {?> in<?php }?>" id="promo-code">
          
            <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="add-voucher" method="post">
              <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
              <input type="hidden" name="addDiscount" value="1">
              <input class="promo-input" type="text" name="discount_name" placeholder="<?php echo smartyTranslate(array('s'=>'Promo code','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
">
              <button type="submit" class="btn btn-primary"><span><?php echo smartyTranslate(array('s'=>'Add','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span></button>
            </form>
          

          
            <div class="alert alert-danger js-error" role="alert">
              <i class="material-icons">&#xE001;</i><span class="ml-1 js-error-text"></span>
            </div>
          
        </div>

        <?php if (count($_smarty_tpl->tpl_vars['cart']->value['discounts'])>0) {?>
          <p class="block-promo promo-highlighted">
            <?php echo smartyTranslate(array('s'=>'Take advantage of our exclusive offers:','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

          </p>
          <ul class="js-discount card-block promo-discounts">
          <?php  $_smarty_tpl->tpl_vars['discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['discounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['discount']->key => $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->_loop = true;
?>
            <li class="cart-summary-line">
              <span class="label"><span class="code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['code'], ENT_QUOTES, 'UTF-8');?>
</span> - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
            </li>
          <?php } ?>
          </ul>
        <?php }?>
      </div>
    </div>
  
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:30:15
         compiled from "/bitnami/prestashop/themes/aqua/templates/checkout/_partials/cart-summary-totals.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c58c7ddb561_50575915')) {function content_5b0c58c7ddb561_50575915($_smarty_tpl) {?>
<div class="card-block cart-summary-totals">

  
    <div class="cart-summary-line cart-total">
       
     <span class="label"><?php echo smartyTranslate(array('s'=>"Total (tax excl.)",'d'=>'Shop.Theme.Cart'),$_smarty_tpl);?>
</span>
      <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
  

  
    <div class="cart-summary-line">
      <span class="label sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
      <span class="value sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
  

</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:30:15
         compiled from "/bitnami/prestashop/themes/aqua/templates/checkout/_partials/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c58c7e07b02_15074205')) {function content_5b0c58c7e07b02_15074205($_smarty_tpl) {?>



<?php }} ?>
