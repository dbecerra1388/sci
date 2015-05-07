<?php /* Smarty version Smarty-3.1.8, created on 2015-04-10 21:41:53
         compiled from "C:\xampp\htdocs\mvc\views\acl\nuevo_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22594552827813e2a42-06531427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eea39197bc8d5a802441f6423e35a501437c9037' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc\\views\\acl\\nuevo_role.tpl',
      1 => 1428694799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22594552827813e2a42-06531427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5528278150b706_08067085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5528278150b706_08067085')) {function content_5528278150b706_08067085($_smarty_tpl) {?><style type="text/css">
    table.table td { vertical-align: middle; }
    table.table td input { margin: 0; }
</style>

<h2>Nuevo Role</h2>

<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="guardar">
    
    <table class="table table-bordered" style="width: 350px;">
        <tr>
            <td style="text-align: right;">Role: </td>
            <td><input type="text" name="role" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['role'])===null||$tmp==='' ? '' : $tmp);?>
"></td>
        </tr>
    </table>
        
    <p><button type="submit" class="btn btn-primary"><li class="icon-ok icon-white"> </li> Guardar</button></p>
</form><?php }} ?>