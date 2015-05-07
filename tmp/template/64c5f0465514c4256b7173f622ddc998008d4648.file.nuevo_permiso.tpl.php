<?php /* Smarty version Smarty-3.1.8, created on 2015-04-11 13:55:19
         compiled from "C:\xampp\htdocs\mvc\views\acl\nuevo_permiso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2976555290ba7a4b228-53613486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64c5f0465514c4256b7173f622ddc998008d4648' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc\\views\\acl\\nuevo_permiso.tpl',
      1 => 1428694799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2976555290ba7a4b228-53613486',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55290ba7d0d9a0_59242353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55290ba7d0d9a0_59242353')) {function content_55290ba7d0d9a0_59242353($_smarty_tpl) {?><style type="text/css">
    table.table td { vertical-align: middle; }
    table.table td input { margin: 0; }
</style>

<h2>Nuevo Permiso</h2>

<form name="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1">
    
    <table class="table table-bordered" style="width: 350px;">
        <tr>
            <td style="text-align: right;">Permiso: </td>
            <td><input type="text" name="permiso" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['permiso'])===null||$tmp==='' ? '' : $tmp);?>
"></td>
        </tr>

        <tr>
            <td style="text-align: right;">Key: </td>
            <td><input type="text" name="key" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['key'])===null||$tmp==='' ? '' : $tmp);?>
"></td>
        </tr>
    </table>
        
    <p><button type="submit" class="btn btn-primary"><li class="icon-ok icon-white"> </li> Guardar</button></p>
</form><?php }} ?>