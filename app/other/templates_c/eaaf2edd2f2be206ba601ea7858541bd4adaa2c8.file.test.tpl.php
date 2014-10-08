<?php /* Smarty version Smarty-3.1.13, created on 2014-10-07 11:03:55
         compiled from ".\app\view\welcome\test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128355433c838ce23b3-26943810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaaf2edd2f2be206ba601ea7858541bd4adaa2c8' => 
    array (
      0 => '.\\app\\view\\welcome\\test.tpl',
      1 => 1412679834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128355433c838ce23b3-26943810',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5433c838d2b040_61399984',
  'variables' => 
  array (
    'ssSPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5433c838d2b040_61399984')) {function content_5433c838d2b040_61399984($_smarty_tpl) {?><html>
    <body>
                这里是welcome控制器的test页面！
                <img src='<?php echo $_smarty_tpl->tpl_vars['ssSPath']->value;?>
/welcome/img/a.png'/>
  	</body>
</html><?php }} ?>