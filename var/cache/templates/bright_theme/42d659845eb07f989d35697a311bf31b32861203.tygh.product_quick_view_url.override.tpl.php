<?php /* Smarty version Smarty-3.1.21, created on 2021-06-07 18:55:56
         compiled from "C:\xampp\htdocs\cscart2\design\themes\responsive\templates\addons\wishlist\hooks\products\product_quick_view_url.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201713009960be418ce4e000-83527044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42d659845eb07f989d35697a311bf31b32861203' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart2\\design\\themes\\responsive\\templates\\addons\\wishlist\\hooks\\products\\product_quick_view_url.override.tpl',
      1 => 1621871066,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '201713009960be418ce4e000-83527044',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'is_wishlist' => 0,
    'product' => 0,
    'current_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60be418ce77575_02763186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60be418ce77575_02763186')) {function content_60be418ce77575_02763186($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart2/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['is_wishlist']->value) {?>
    <?php echo htmlspecialchars("products.quick_view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['product']->value['combination']) {
echo htmlspecialchars("&combination=".((string)$_smarty_tpl->tpl_vars['product']->value['combination']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars("&prev_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value), ENT_QUOTES, 'UTF-8');?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/products/product_quick_view_url.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/hooks/products/product_quick_view_url.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['is_wishlist']->value) {?>
    <?php echo htmlspecialchars("products.quick_view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['product']->value['combination']) {
echo htmlspecialchars("&combination=".((string)$_smarty_tpl->tpl_vars['product']->value['combination']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars("&prev_url=".((string)$_smarty_tpl->tpl_vars['current_url']->value), ENT_QUOTES, 'UTF-8');?>

<?php }
}?><?php }} ?>
