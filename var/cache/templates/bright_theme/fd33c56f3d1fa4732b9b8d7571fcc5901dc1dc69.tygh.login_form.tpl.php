<?php /* Smarty version Smarty-3.1.21, created on 2021-06-07 18:55:48
         compiled from "C:\xampp\htdocs\cscart2\design\themes\responsive\templates\views\auth\login_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118734508760be4184ace327-70630604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd33c56f3d1fa4732b9b8d7571fcc5901dc1dc69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart2\\design\\themes\\responsive\\templates\\views\\auth\\login_form.tpl',
      1 => 1621871055,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '118734508760be4184ace327-70630604',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'id' => 0,
    'style' => 0,
    'config' => 0,
    'redirect_url' => 0,
    'stored_user_login' => 0,
    'login_error' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60be4184b40021_56857680',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60be4184b40021_56857680')) {function content_60be4184b40021_56857680($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart2/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart2/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('returning_customer','email','password','forgot_password_question','error_incorrect_login','register_new_account','remember_me','sign_in','returning_customer','email','password','forgot_password_question','error_incorrect_login','register_new_account','remember_me','sign_in'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "main_login" : $tmp), null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("login", null, null); ob_start(); ?>
    <form name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" <?php if ($_smarty_tpl->tpl_vars['style']->value=="popup") {?>class="cm-ajax cm-ajax-full-render"<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['style']->value=="popup") {?>
            <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_login_popup_form_container" />
            <input type="hidden" name="login_block_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="quick_login" value="1" />
        <?php }?>

        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['return_url'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['redirect_url']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" />

        <?php if ($_smarty_tpl->tpl_vars['style']->value=="checkout") {?>
            <div class="ty-checkout-login-form"><?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("returning_customer")), 0);?>

        <?php }?>

        <div class="ty-control-group">
            <label for="login_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__filed-label ty-control-group__label cm-required cm-trim cm-email"><?php echo $_smarty_tpl->__("email");?>
</label>
            <input type="text" id="login_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="user_login" size="30" value="<?php if ($_smarty_tpl->tpl_vars['stored_user_login']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['stored_user_login']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['demo_username'], ENT_QUOTES, 'UTF-8');
}?>" class="ty-login__input cm-focus" />
        </div>

        <div class="ty-control-group ty-password-forgot">
            <label for="psw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__filed-label ty-control-group__label ty-password-forgot__label cm-required"><?php echo $_smarty_tpl->__("password");?>
</label><a href="<?php echo htmlspecialchars(fn_url("auth.recover_password"), ENT_QUOTES, 'UTF-8');?>
" class="ty-password-forgot__a"  tabindex="5"><?php echo $_smarty_tpl->__("forgot_password_question");?>
</a>
            <input type="password" id="psw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="password" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['demo_password'], ENT_QUOTES, 'UTF-8');?>
" class="ty-login__input" maxlength="32" />
        </div>

        <?php if ($_smarty_tpl->tpl_vars['style']->value=="popup") {?>
            <?php if ($_smarty_tpl->tpl_vars['login_error']->value) {?>
                <div class="ty-login-form__wrong-credentials-container">
                    <span class="ty-login-form__wrong-credentials-text ty-error-text"><?php echo $_smarty_tpl->__("error_incorrect_login");?>
</span>
                </div>
            <?php }?>

            <div class="ty-login-reglink ty-center">
                <a class="ty-login-reglink__a" href="<?php echo htmlspecialchars(fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("register_new_account");?>
</a>
            </div>
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('option'=>"login",'align'=>"left"), 0);?>


        <?php if ($_smarty_tpl->tpl_vars['style']->value=="checkout") {?>
            </div>
        <?php }?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:login_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:login_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="buttons-container clearfix">
                <div class="ty-float-right">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[auth.login]",'but_role'=>"submit"), 0);?>

                </div>
                <div class="ty-login__remember-me">
                    <label for="remember_me_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__remember-me-label"><input class="checkbox" type="checkbox" name="remember_me" id="remember_me_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" /><?php echo $_smarty_tpl->__("remember_me");?>
</label>
                </div>
            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:login_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['style']->value=="popup") {?>
    <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_login_popup_form_container">
        <?php echo Smarty::$_smarty_vars['capture']['login'];?>

    <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_login_popup_form_container--></div>
<?php } else { ?>
    <div class="ty-login">
        <?php echo Smarty::$_smarty_vars['capture']['login'];?>

    </div>

    <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->__("sign_in");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/auth/login_form.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/auth/login_form.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "main_login" : $tmp), null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("login", null, null); ob_start(); ?>
    <form name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_form" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" <?php if ($_smarty_tpl->tpl_vars['style']->value=="popup") {?>class="cm-ajax cm-ajax-full-render"<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['style']->value=="popup") {?>
            <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_login_popup_form_container" />
            <input type="hidden" name="login_block_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="quick_login" value="1" />
        <?php }?>

        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['return_url'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['redirect_url']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" />

        <?php if ($_smarty_tpl->tpl_vars['style']->value=="checkout") {?>
            <div class="ty-checkout-login-form"><?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("returning_customer")), 0);?>

        <?php }?>

        <div class="ty-control-group">
            <label for="login_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__filed-label ty-control-group__label cm-required cm-trim cm-email"><?php echo $_smarty_tpl->__("email");?>
</label>
            <input type="text" id="login_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="user_login" size="30" value="<?php if ($_smarty_tpl->tpl_vars['stored_user_login']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['stored_user_login']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['demo_username'], ENT_QUOTES, 'UTF-8');
}?>" class="ty-login__input cm-focus" />
        </div>

        <div class="ty-control-group ty-password-forgot">
            <label for="psw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__filed-label ty-control-group__label ty-password-forgot__label cm-required"><?php echo $_smarty_tpl->__("password");?>
</label><a href="<?php echo htmlspecialchars(fn_url("auth.recover_password"), ENT_QUOTES, 'UTF-8');?>
" class="ty-password-forgot__a"  tabindex="5"><?php echo $_smarty_tpl->__("forgot_password_question");?>
</a>
            <input type="password" id="psw_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="password" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['demo_password'], ENT_QUOTES, 'UTF-8');?>
" class="ty-login__input" maxlength="32" />
        </div>

        <?php if ($_smarty_tpl->tpl_vars['style']->value=="popup") {?>
            <?php if ($_smarty_tpl->tpl_vars['login_error']->value) {?>
                <div class="ty-login-form__wrong-credentials-container">
                    <span class="ty-login-form__wrong-credentials-text ty-error-text"><?php echo $_smarty_tpl->__("error_incorrect_login");?>
</span>
                </div>
            <?php }?>

            <div class="ty-login-reglink ty-center">
                <a class="ty-login-reglink__a" href="<?php echo htmlspecialchars(fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("register_new_account");?>
</a>
            </div>
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('option'=>"login",'align'=>"left"), 0);?>


        <?php if ($_smarty_tpl->tpl_vars['style']->value=="checkout") {?>
            </div>
        <?php }?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:login_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:login_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="buttons-container clearfix">
                <div class="ty-float-right">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[auth.login]",'but_role'=>"submit"), 0);?>

                </div>
                <div class="ty-login__remember-me">
                    <label for="remember_me_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__remember-me-label"><input class="checkbox" type="checkbox" name="remember_me" id="remember_me_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" /><?php echo $_smarty_tpl->__("remember_me");?>
</label>
                </div>
            </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:login_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['style']->value=="popup") {?>
    <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_login_popup_form_container">
        <?php echo Smarty::$_smarty_vars['capture']['login'];?>

    <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_login_popup_form_container--></div>
<?php } else { ?>
    <div class="ty-login">
        <?php echo Smarty::$_smarty_vars['capture']['login'];?>

    </div>

    <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->__("sign_in");
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>
<?php }?><?php }} ?>
