<?php /* Smarty version Smarty-3.1.8, created on 2015-04-10 22:02:46
         compiled from "C:\xampp\htdocs\mvc\modules\usuarios\views\registro\activar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77755282c66cbe315-76233135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '121216eb1c3e40d38d48c27cd931b87a78046dea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc\\modules\\usuarios\\views\\registro\\activar.tpl',
      1 => 1428694796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77755282c66cbe315-76233135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55282c66e05135_50283528',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55282c66e05135_50283528')) {function content_55282c66e05135_50283528($_smarty_tpl) {?><h2>Activaci&oacute;n de Cuenta</h2>

<p> </p>

<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
">Ir al Inicio</a>

<?php if (!Session::get('autenticado')){?>
	
	| <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login">Iniciar Sesi&oacute;n</a>

<?php }?><?php }} ?>