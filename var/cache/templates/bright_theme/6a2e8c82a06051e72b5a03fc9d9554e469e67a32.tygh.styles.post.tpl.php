<?php /* Smarty version Smarty-3.1.21, created on 2021-09-06 23:46:08
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\vendor_communication\hooks\index\styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186958663061367e108f2b46-57171368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a2e8c82a06051e72b5a03fc9d9554e469e67a32' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\vendor_communication\\hooks\\index\\styles.post.tpl',
      1 => 1629025927,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '186958663061367e108f2b46-57171368',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61367e109165e2_83604352',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61367e109165e2_83604352')) {function content_61367e109165e2_83604352($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.style.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_style(array('src'=>"addons/vendor_communication/styles.less"),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_style(array('src'=>"addons/vendor_communication/styles.less"),$_smarty_tpl);?>

<?php }?><?php }} ?>