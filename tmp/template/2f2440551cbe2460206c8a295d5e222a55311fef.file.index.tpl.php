<?php /* Smarty version Smarty-3.1.8, created on 2015-04-10 21:41:46
         compiled from "C:\xampp\htdocs\mvc\views\acl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130625528277acd8406-99017701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f2440551cbe2460206c8a295d5e222a55311fef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc\\views\\acl\\index.tpl',
      1 => 1428694799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130625528277acd8406-99017701',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5528277ae13bc3_36790834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5528277ae13bc3_36790834')) {function content_5528277ae13bc3_36790834($_smarty_tpl) {?><h2>Listas de control de acceso</h2>

<ul>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Roles</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Permisos</a></li>
</ul><?php }} ?>