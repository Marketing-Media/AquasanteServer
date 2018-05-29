<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:57:24
         compiled from "/bitnami/prestashop/themes/aqua/templates/catalog/listing/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2613202785b0c5f2496d074-65647526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba64cb3bf18a8e57ec12e1a9fa23388ef2224c7d' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/catalog/listing/category.tpl',
      1 => 1521637389,
      2 => 'file',
    ),
    'f71b2b21c59a39b311d9530e879cd3b1754c11a5' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/catalog/listing/product-list.tpl',
      1 => 1521637389,
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
    'a1edea7014ee972a71393c5464e1d12a8dda0ead' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/catalog/_partials/sort-orders.tpl',
      1 => 1521743287,
      2 => 'file',
    ),
    '80d9eb75efce015499c72c8484ff9b489c7e8843' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/catalog/_partials/products-top.tpl',
      1 => 1521637392,
      2 => 'file',
    ),
    'caa364cdc85695d9fb0e1050ee2ef043c2a285a4' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1521657023,
      2 => 'file',
    ),
    'a671238963d03b0b6947a42b79bcdb751d6b2ce3' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/_partials/pagination.tpl',
      1 => 1521638323,
      2 => 'file',
    ),
    'd408cfd1604d93cc640136e39dee436041f0d9b1' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/catalog/_partials/products.tpl',
      1 => 1521637392,
      2 => 'file',
    ),
    'e6285aff0f5996bb1edd78de2b2c77970188e9b2' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/catalog/_partials/products-bottom.tpl',
      1 => 1521637392,
      2 => 'file',
    ),
    'cf3f9150d8de72ebf39b3219bd90e0df74219769' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/errors/not-found.tpl',
      1 => 1521637385,
      2 => 'file',
    ),
    '4d997111ede6c631ac4bac016b6059f2b1dc5e06' => 
    array (
      0 => '/bitnami/prestashop/themes/aqua/templates/_partials/footer.tpl',
      1 => 1527275898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2613202785b0c5f2496d074-65647526',
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
  'unifunc' => 'content_5b0c5f24bfdf11_41689970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0c5f24bfdf11_41689970')) {function content_5b0c5f24bfdf11_41689970($_smarty_tpl) {?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['locale'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2613202785b0c5f2496d074-65647526');
content_5b0c5f249910f5_48442297($_smarty_tpl);
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2613202785b0c5f2496d074-65647526');
content_5b0c5f249e9a71_80177050($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
      
    </header>

    
      <?php /*  Call merged included template "_partials/notifications.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2613202785b0c5f2496d074-65647526');
content_5b0c5f24a13ed7_43797342($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/notifications.tpl" */?>
    

    <div id="wrapper" class="container-fluid">
    
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayWrapperTop"),$_smarty_tpl);?>

            
        <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']!='index'&&$_smarty_tpl->tpl_vars['page']->value['page_name']!='cart') {?>
        
          <?php /*  Call merged included template "_partials/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2613202785b0c5f2496d074-65647526');
content_5b0c5f24a377d3_83534297($_smarty_tpl);
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

    

  <div class="grid gbanner">
    <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
    <div id="category-description"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
">
  </div>
  
  

  



    <section id="products">
      <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>

        
          <?php /*  Call merged included template "catalog/_partials/products-top.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, '2613202785b0c5f2496d074-65647526');
content_5b0c5f24a6b2a8_61040610($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/products-top.tpl" */?>
        

        
          <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

        

        
          <?php /*  Call merged included template "catalog/_partials/products.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, '2613202785b0c5f2496d074-65647526');
content_5b0c5f24aa7449_37417787($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/products.tpl" */?>
        

        <div id="js-product-list-bottom">
          
            <?php /*  Call merged included template "catalog/_partials/products-bottom.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, '2613202785b0c5f2496d074-65647526');
content_5b0c5f24b1fea1_34721674($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/products-bottom.tpl" */?>
          
        </div>

      <?php } else { ?>

        <?php /*  Call merged included template "errors/not-found.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2613202785b0c5f2496d074-65647526');
content_5b0c5f24b26506_89556889($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "errors/not-found.tpl" */?>

      <?php }?>
    </section>

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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2613202785b0c5f2496d074-65647526');
content_5b0c5f24b69d65_06635164($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
        
      </div> 
     
    </footer>

    
      <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '2613202785b0c5f2496d074-65647526');
content_5b0c5f249c78b0_09119940($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>
    

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>

    

  </body>

</html>
                  <?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:57:24
         compiled from "/bitnami/prestashop/themes/aqua/templates/_partials/head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c5f249910f5_48442297')) {function content_5b0c5f249910f5_48442297($_smarty_tpl) {?>

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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '2613202785b0c5f2496d074-65647526');
content_5b0c5f249b75b8_03546246($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '2613202785b0c5f2496d074-65647526');
content_5b0c5f249c78b0_09119940($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>




<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:57:24
         compiled from "/bitnami/prestashop/themes/aqua/templates/_partials/stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c5f249b75b8_03546246')) {function content_5b0c5f249b75b8_03546246($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:57:24
         compiled from "/bitnami/prestashop/themes/aqua/templates/_partials/javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c5f249c78b0_09119940')) {function content_5b0c5f249c78b0_09119940($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:57:24
         compiled from "/bitnami/prestashop/themes/aqua/templates/_partials/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c5f249e9a71_80177050')) {function content_5b0c5f249e9a71_80177050($_smarty_tpl) {?>

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
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:57:24
         compiled from "/bitnami/prestashop/themes/aqua/templates/_partials/notifications.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c5f24a13ed7_43797342')) {function content_5b0c5f24a13ed7_43797342($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:57:24
         compiled from "/bitnami/prestashop/themes/aqua/templates/_partials/breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c5f24a377d3_83534297')) {function content_5b0c5f24a377d3_83534297($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:57:24
         compiled from "/bitnami/prestashop/themes/aqua/templates/catalog/_partials/products-top.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c5f24a6b2a8_61040610')) {function content_5b0c5f24a6b2a8_61040610($_smarty_tpl) {?>
<div id="js-product-list-top" class="row products-selection">
  <div class="total-products">
    <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items']>1) {?>
      <?php echo smartyTranslate(array('s'=>'There are %product_count% products.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%product_count%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items']>0) {?>
      <?php echo smartyTranslate(array('s'=>'There is 1 product.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

    <?php }?>
  </div>

  <div class="sort-by-row">

    
      <?php /*  Call merged included template "catalog/_partials/sort-orders.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, '2613202785b0c5f2496d074-65647526');
content_5b0c5f24a81515_93898992($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/sort-orders.tpl" */?>
    

    
  </div>

</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:57:24
         compiled from "/bitnami/prestashop/themes/aqua/templates/catalog/_partials/sort-orders.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c5f24a81515_93898992')) {function content_5b0c5f24a81515_93898992($_smarty_tpl) {?>
<span class="sort-by"><?php echo smartyTranslate(array('s'=>'Sort by:','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</span>
<div class="products-sort-order dropdown">
  <button
    class="btn-unstyle select-title"
    rel="nofollow"
    data-toggle="dropdown"
    aria-haspopup="true"
    aria-expanded="false">
    <?php if (isset($_smarty_tpl->tpl_vars['listing']->value['sort_selected'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['sort_selected'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Select','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
<?php }?>
    <i class="material-icons float-xs-right">&#xE5C5;</i>
  </button>
  <div class="dropdown-menu">
    <?php  $_smarty_tpl->tpl_vars['sort_order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sort_order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listing']->value['sort_orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sort_order']->key => $_smarty_tpl->tpl_vars['sort_order']->value) {
$_smarty_tpl->tpl_vars['sort_order']->_loop = true;
?>
      <a
        rel="nofollow"
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_order']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
        class="select-list <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames(array('current'=>$_smarty_tpl->tpl_vars['sort_order']->value['current'],'js-search-link'=>true)), ENT_QUOTES, 'UTF-8');?>
"
      >
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_order']->value['label'], ENT_QUOTES, 'UTF-8');?>

      </a>
    <?php } ?>
  </div>
</div>
<div class="onlymobil">
  <button id="search_filter_toggler" class="btn btn-secondary hidefilters" data-toggle="collapse" data-target="#search_filters_wrapper" aria-expanded="false" aria-controls="search_filters_wrapper">
            Filtrer
          </button>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:57:24
         compiled from "/bitnami/prestashop/themes/aqua/templates/catalog/_partials/products.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c5f24aa7449_37417787')) {function content_5b0c5f24aa7449_37417787($_smarty_tpl) {?>
<div id="js-product-list">
  <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listing']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
    
      <?php /*  Call merged included template "catalog/_partials/miniatures/product.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, '2613202785b0c5f2496d074-65647526');
content_5b0c5f24ab13a0_67656925($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/miniatures/product.tpl" */?>
    
  <?php } ?>


<div id="navigation">
      <?php /*  Call merged included template "_partials/pagination.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, '2613202785b0c5f2496d074-65647526');
content_5b0c5f24aed3d0_04650531($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/pagination.tpl" */?> 
</div>

</div>
 <?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:57:24
         compiled from "/bitnami/prestashop/themes/aqua/templates/catalog/_partials/miniatures/product.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c5f24ab13a0_67656925')) {function content_5b0c5f24ab13a0_67656925($_smarty_tpl) {?>
  <article class="product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">

    <div class="prod card">
      
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
          <img
            src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['medium']['url'], ENT_QUOTES, 'UTF-8');?>
"
            alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
            data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
          >
        </a>
      
      <div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">
        
          <a class="" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
            <i class="material-icons search">&#xE8B6;</i> <?php echo smartyTranslate(array('s'=>'Learn More','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

          </a>
        
        </div>
   <div class="product-description">
      
        <h1 class="product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h1>
      
  
       
      
        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
          <div class="product-price-and-shipping">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>

  
              <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
            
            <?php }?>
 
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl);?>

  
            <span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
  
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl);?>

  
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight"),$_smarty_tpl);?>

          </div>
        <?php }?>
      
  </div>
      
        <ul class="product-flags">
          <?php  $_smarty_tpl->tpl_vars['flag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['flag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['flags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->key => $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->_loop = true;
?>
            <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      
  

  </article>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:57:24
         compiled from "/bitnami/prestashop/themes/aqua/templates/_partials/pagination.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c5f24aed3d0_04650531')) {function content_5b0c5f24aed3d0_04650531($_smarty_tpl) {?>
<nav class="pagination">
  
    <?php echo smartyTranslate(array('s'=>'Showing %from%-%to% of %total% item(s)','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['pagination']->value['total_items']),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

  

  
  <?php if ($_smarty_tpl->tpl_vars['pagination']->value['should_be_displayed']) {?>
    <ul>
      <?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagination']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value) {
$_smarty_tpl->tpl_vars["page"]->_loop = true;
?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?> class="current" <?php }?>>
          <?php if ($_smarty_tpl->tpl_vars['page']->value['type']==='spacer') {?>
            <span class="spacer">&hellip;</span>
          <?php } else { ?>
            <a
              rel="<?php if ($_smarty_tpl->tpl_vars['page']->value['type']==='previous') {?>prev<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type']==='next') {?>next<?php } else { ?>nofollow<?php }?>"
              href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
              class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames(array('disabled'=>!$_smarty_tpl->tpl_vars['page']->value['clickable'],'js-search-link'=>true)), ENT_QUOTES, 'UTF-8');?>
"
            >
              <?php if ($_smarty_tpl->tpl_vars['page']->value['type']==='previous') {?>
                <?php echo smartyTranslate(array('s'=>'Previous','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

              <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type']==='next') {?>
                <?php echo smartyTranslate(array('s'=>'Next','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

              <?php } else { ?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>

              <?php }?>
            </a>
          <?php }?>
        </li>
      <?php } ?>
    </ul>
    <?php }?>
  

</nav>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:57:24
         compiled from "/bitnami/prestashop/themes/aqua/templates/catalog/_partials/products-bottom.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c5f24b1fea1_34721674')) {function content_5b0c5f24b1fea1_34721674($_smarty_tpl) {?>
<div id="js-product-list-bottom"></div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:57:24
         compiled from "/bitnami/prestashop/themes/aqua/templates/errors/not-found.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c5f24b26506_89556889')) {function content_5b0c5f24b26506_89556889($_smarty_tpl) {?>
<section id="content" class="page-content page-not-found">
  
    <p><?php echo smartyTranslate(array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</p>

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displaySearch'),$_smarty_tpl);?>

    

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNotFound'),$_smarty_tpl);?>

    
  
</section>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-28 12:57:24
         compiled from "/bitnami/prestashop/themes/aqua/templates/_partials/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b0c5f24b69d65_06635164')) {function content_5b0c5f24b69d65_06635164($_smarty_tpl) {?>
  
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
