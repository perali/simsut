<?php /* Smarty version Smarty-3.1.13, created on 2014-09-22 15:26:56
         compiled from ".\app\view\welcome\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20410541cf0b61b2954-96742556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbb86b32c1bfee202229dd55c10ed3f983ce70b0' => 
    array (
      0 => '.\\app\\view\\welcome\\index.tpl',
      1 => 1411370800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20410541cf0b61b2954-96742556',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_541cf0b6227807_17237628',
  'variables' => 
  array (
    'a' => 0,
    're' => 0,
    'temp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541cf0b6227807_17237628')) {function content_541cf0b6227807_17237628($_smarty_tpl) {?><html>
    <body>
                这里是welcome的index页面！
                <?php echo $_smarty_tpl->tpl_vars['a']->value;?>

				<?php  $_smarty_tpl->tpl_vars['temp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['temp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['re']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['temp']->key => $_smarty_tpl->tpl_vars['temp']->value){
$_smarty_tpl->tpl_vars['temp']->_loop = true;
?>
					<?php echo $_smarty_tpl->tpl_vars['temp']->value['name'];?>

				<?php } ?>
    </body>
</html><?php }} ?>