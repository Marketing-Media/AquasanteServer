<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:29:56
         compiled from "module:amazzingblog/views/templates/front/content-17.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12036976155b0c58b4df8df8-65059533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f167ada839dd66fad26c945fd68ac58a50542115' => 
    array (
      0 => 'module:amazzingblog/views/templates/front/content-17.tpl',
      1 => 1521474314,
      2 => 'module',
    ),
    '03602118e03055ce110678d2949d0e3483de17a4' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/page.tpl',
      1 => 1521637375,
      2 => 'file',
    ),
    '439d3358ea25b85836cb854bc0e2c37ac39fb58d' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/layouts/layout-left-column.tpl',
      1 => 1521637386,
      2 => 'file',
    ),
    'bfa9da007edb17d03c080d6e9c4b14983959379e' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/layouts/layout-both-columns.tpl',
      1 => 1521731876,
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
    '3805a9d9201cabdb106e6e537dffddd512355889' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/_partials/header.tpl',
      1 => 1527275919,
      2 => 'file',
    ),
    '34582c3c43cf0bda6c5eeede721787bde9d50f25' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/_partials/notifications.tpl',
      1 => 1521637388,
      2 => 'file',
    ),
    '419f39af0aed4b264931c7729cbe0f86ec6cae85' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/_partials/breadcrumb.tpl',
      1 => 1521637387,
      2 => 'file',
    ),
    '4d997111ede6c631ac4bac016b6059f2b1dc5e06' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/_partials/footer.tpl',
      1 => 1527275898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12036976155b0c58b4df8df8-65059533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout' => 0,
    'language' => 0,
    'page' => 0,
    'javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0c58b50d1998_43966793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0c58b50d1998_43966793')) {function content_5b0c58b50d1998_43966793($_smarty_tpl) {?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['locale'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12036976155b0c58b4df8df8-65059533');
content_5b0c58b4e2b210_45814670($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/head.tpl" */?>
    
  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames($_smarty_tpl->tpl_vars['page']->value['body_classes']), ENT_QUOTES, 'UTF-8');?>
"> 

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl);?>

      
    

    <header id="header" class="container-fluid">
      <div class="test"></div>
      
        <?php /*  Call merged included template "_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12036976155b0c58b4df8df8-65059533');
content_5b0c58b4ea7870_50110089($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
      
    </header>

    
      <?php /*  Call merged included template "_partials/notifications.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12036976155b0c58b4df8df8-65059533');
content_5b0c58b4ed2c97_55099085($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/notifications.tpl" */?>
    

    <div id="wrapper" class="container-fluid">
    
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayWrapperTop"),$_smarty_tpl);?>

            
        <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']!='index'&&$_smarty_tpl->tpl_vars['page']->value['page_name']!='cart') {?>
        
          <?php /*  Call merged included template "_partials/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12036976155b0c58b4df8df8-65059533');
content_5b0c58b4efb8b4_18513492($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/breadcrumb.tpl" */?>
        
        <?php }?>
        
      
      <div <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']!='index'&&$_smarty_tpl->tpl_vars['page']->value['page_name']!='product') {?>  class="row"  <?php }?>>
     
        
          <div id="left-column" class="col-xs-12 col-md-3">
            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='product') {?>
              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayLeftColumnProduct'),$_smarty_tpl);?>

            <?php } else { ?>
              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayLeftColumn"),$_smarty_tpl);?>

            <?php }?>
          </div>
        
  
    
  
        
  <div id="content-wrapper" class="left-column col-12 col-md-9">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayContentWrapperTop"),$_smarty_tpl);?>

    

  <section id="main">
          
  <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']!='index') {?>
    
      <header class="page-header">
        
          <h1></h1>
        
      </header>
    
  <?php }?>
    
      <section id="content" class="page-content">
        <?php echo $_smarty_tpl->tpl_vars['html']->value;?>

      </section>
    
    
    
    
    
      <footer class="page-footer">
        
          <!-- Footer content -->
        
      </footer>
    

  </section>


    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayContentWrapperBottom"),$_smarty_tpl);?>

  </div>

        
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayWrapperBottom"),$_smarty_tpl);?>

      </div>
    
    </div>
    

    
    <footer id="footer" class="container-fluid">
      <div class="row">
        
          <?php /*  Call merged included template "_partials/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12036976155b0c58b4df8df8-65059533');
content_5b0c58b50364f4_28660023($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
        
      </div> 
     
    </footer>

    
      <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '12036976155b0c58b4df8df8-65059533');
content_5b0c58b4e7ec60_29518800($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>
    

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>

    

  </body>

</html>
                  <?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:29:56
         compiled from "/bitnami/prestashop/themes/aqua/templates/_partials/head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c58b4e2b210_45814670')) {function content_5b0c58b4e2b210_45814670($_smarty_tpl) {?>

  <meta charset="utf-8">


  <meta http-equiv="x-ua-compatible" content="ie=edge">



  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8');?>
</title>
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8');?>
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '12036976155b0c58b4df8df8-65059533');
content_5b0c58b4e6e7e4_21325315($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '12036976155b0c58b4df8df8-65059533');
content_5b0c58b4e7ec60_29518800($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>




<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:29:56
         compiled from "/bitnami/prestashop/themes/aqua/templates/_partials/stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c58b4e6e7e4_21325315')) {function content_5b0c58b4e6e7e4_21325315($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:29:56
         compiled from "/bitnami/prestashop/themes/aqua/templates/_partials/javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c58b4e7ec60_29518800')) {function content_5b0c58b4e7ec60_29518800($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:29:56
         compiled from "/bitnami/prestashop/themes/aqua/templates/_partials/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c58b4ea7870_50110089')) {function content_5b0c58b4ea7870_50110089($_smarty_tpl) {?>

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



  <div id="logorow" class=" grid">
    
      <a class="logo" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
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
          <a href="tel:18774112782"><div class="text-uppercase bsecundary subtitle"><i class="fas fa-phone" data-fa-transform="flip-h"></i> <?php echo smartyTranslate(array('s'=>'[1]1-877-411-AQUA[/1]  (1-877-411-2782)','d'=>'Shop.Theme.Global','sprintf'=>array('[1]'=>'<strong>','[/1]'=>'</strong>')),$_smarty_tpl);?>
</div></a>
          <div class="contact">
            <ul class="d-flex justify-content-center contactus">
              <li class="bthird"><i class="icon fal fa-envelope"></i><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Email Us','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
              <li class="bthird"><i class="icon fab fa-facebook-messenger"></i><a href="https://m.me/aquaberkeyfilters" target="_blank"><?php echo smartyTranslate(array('s'=>'Messenger','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
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
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:29:56
         compiled from "/bitnami/prestashop/themes/aqua/templates/_partials/notifications.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c58b4ed2c97_55099085')) {function content_5b0c58b4ed2c97_55099085($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:29:56
         compiled from "/bitnami/prestashop/themes/aqua/templates/_partials/breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c58b4efb8b4_18513492')) {function content_5b0c58b4efb8b4_18513492($_smarty_tpl) {?>
<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
">
  <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">
    <?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
?>
      
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
            <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
          </a>
          <meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration'], ENT_QUOTES, 'UTF-8');?>
">
        </li>
      
    <?php } ?>
  </ol>
</nav>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:29:57
         compiled from "/bitnami/prestashop/themes/aqua/templates/_partials/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c58b50364f4_28660023')) {function content_5b0c58b50364f4_28660023($_smarty_tpl) {?>
  
  <div class="whyus grid">
    <div class="title">
      <h2><?php echo smartyTranslate(array('s'=>'Why shop [1]with us?[/1]','d'=>'Shop.Theme.Global','sprintf'=>array('[1]'=>'<strong>','[/1]'=>'</strong>')),$_smarty_tpl);?>
</h2>
      </div>
      <div class="reasons">
        <div class="ico"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
ship.svg"  height="48px" alt=""></div>
        <h3><?php echo smartyTranslate(array('s'=>'Free Shipping','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h3>
        <p><?php echo smartyTranslate(array('s'=>'We offer free shipping on all new[1] Berkey® Systems','sprintf'=>array('[1]'=>'<br>'),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</p>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'1'),$_smarty_tpl);?>
" class="btn btn-outline-secondary btn-lg"><?php echo smartyTranslate(array('s'=>'Learn More','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
      </div>
      <div class="reasons">
        <div class="ico">
          <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
reason2.svg" height="48px"  alt="">
        </div>
        <h3><?php echo smartyTranslate(array('s'=>'WE ARE CANADIAN','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h3>
        <p><?php echo smartyTranslate(array('s'=>'Orders ship from Canada. [1] No hidden shipping or import fees','sprintf'=>array('[1]'=>'<br>'),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</p>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'4'),$_smarty_tpl);?>
" class="btn btn-outline-secondary btn-lg"><?php echo smartyTranslate(array('s'=>'Learn More','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
      </div>
      <div class="reasons">
        <div class="ico">
          <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
reason3.svg" height="48px"  alt="">
        </div> 
        <h3><?php echo smartyTranslate(array('s'=>'WE ARE WATER EXPERTS','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h3>
        <p><?php echo smartyTranslate(array('s'=>'We have been providing healthy water[1] solutions to Canadians since 2010','sprintf'=>array('[1]'=>'<br>'),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</p>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'4'),$_smarty_tpl);?>
" class="btn btn-outline-secondary btn-lg"><?php echo smartyTranslate(array('s'=>'About Us','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
      </div>
      <div class="reasons">
        <div class="ico">
          <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
reason4.svg" height="48px"  alt="">
        </div>
        <h3><?php echo smartyTranslate(array('s'=>'SOCIAL RESPONSIBILITY','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h3>
        <p><?php echo smartyTranslate(array('s'=>'We donate a portion of our annual[1] proceeds to water-conservation efforts','sprintf'=>array('[1]'=>'<br>'),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</p>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'4'),$_smarty_tpl);?>
" class="btn btn-outline-secondary btn-lg"><?php echo smartyTranslate(array('s'=>'Learn More','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
      </div>
    </div>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterBefore'),$_smarty_tpl);?>

    
    
    
    <!-- hook h='displayFooter'} -->
    <div id="footer-links" class="grid">
      <div class="link-list">
        <h2 class="title"><?php echo smartyTranslate(array('s'=>'Products','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h2>
        <ul>        
          <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'20'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'How to choose my Berkey?','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'category','id'=>'4'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Multi-Use Systems','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'category','id'=>'5'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Portable Systems','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'category','id'=>'11'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Replacement Filters','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'category','id'=>'12'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Berkey Accessories','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'category','id'=>'13'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Vortex Water Revitalizers','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
        </ul>
      </div>
       <div class="link-list">
        <h2 class="title"><?php echo smartyTranslate(array('s'=>'Why Choose Berkey','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h2>
        <ul>
          <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'13'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Features and Benefits','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'14'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Cleanable Filters','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'16'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Cost Comparison','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'17'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Performance Comparison','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'21'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Water Types Comparison','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'22'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Environmentally Friendly','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'23'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'pH Balanced Healthful Water','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'24'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Travel & Emergency Preparedness','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
        </ul>
      </div>
      <div class="link-list">
        <h2 class="title"><?php echo smartyTranslate(array('s'=>'Learning Center','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h2>
        <ul>
          <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'6'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'How Do Berkey Systems Work?','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'7'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Independent Lab Test Results','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'8'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'FAQ & Troubleshooting','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'9'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Videos','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'10'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'User Instructions','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'19'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Warranty Information','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>
          <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'18'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Testimonials','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a></li>

          <li>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
/blog"><?php echo smartyTranslate(array('s'=>'Blog','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
          </li>
        </ul>
      </div>
     
      <div class="link-list">
        <h2 class="title"><?php echo smartyTranslate(array('s'=>'Information','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h2>
        <ul>
          <li>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Contact Us','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
          </li>
          <li>
            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'4'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'About Us','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
          </li>
          <li>
            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'3'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Terms & Conditions of Sale','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
          </li>
          
          <li>
            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'1'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Shipping & Returns','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
          </li>
           <li>
            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'5'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Secure Payment','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
          </li>
           <li>
            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'25'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Privacy Policy','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
          </li>
          <li>
            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cms','id'=>'2'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Legal Notice','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
          </li>
          
         
          <li>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['sitemap'], ENT_QUOTES, 'UTF-8');?>
 "><?php echo smartyTranslate(array('s'=>'Sitemap','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
          </li>
        </ul>
      </div>
      <div class="authorized">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
authorized.jpg" alt="">
      </div>
    </div>
    
    
    
    
    <div class="pageend">
      <div class="follow">
        <h2><?php echo smartyTranslate(array('s'=>"Follow Us",'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h2>
        <ul>
          <li><a href="https://www.facebook.com/aquaberkeyfilters/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
        <li class="instagram"><a href="https://www.instagram.com/aquaberkeyfilters/" target="_blank"><i class="fab fa-instagram"></i></a></li>
          
          <li class="youtube"><a href="https://www.youtube.com/channel/UCSad12V3KZIdFiYr2MNYhFA" target="_blank"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
youtube.svg" alt=""></a></li>
        </ul>
      </div>
      <div class="cards">
        <h2><?php echo smartyTranslate(array('s'=>"We Accept",'d'=>"Shop.Theme.Global"),$_smarty_tpl);?>
</h2>
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
cards.svg" alt="">
      </div>
      <div class="copyrights">
        <div class="left"><?php echo smartyTranslate(array('s'=>"Aqua Health Products Inc.",'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
 © <?php echo smartyTranslate(array('s'=>"All rights reserved",'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</div>
        <div class="rigth"><a target="_blank" href="<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']=='en') {?>https://marketingmedia.ca/services/website/website-creation/e-commerce-development/<?php } else { ?>https://marketingmedia.ca/fr/services/site-internet/conception-de-sites-internet/commerce-electronique/<?php }?>"><?php echo smartyTranslate(array('s'=>"E-commerce Development Agency:",'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a> <a href="<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']=='en') {?>https://marketingmedia.ca<?php } else { ?>https://marketingmedia.ca/fr<?php }?>"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
mm.svg" alt=""></a></div>
      </div>
    </div>
    
    
    <?php }} ?>
