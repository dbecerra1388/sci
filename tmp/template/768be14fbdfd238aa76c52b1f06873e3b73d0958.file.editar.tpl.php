<?php /* Smarty version Smarty-3.1.8, created on 2015-05-06 20:16:13
         compiled from "C:\xampp\htdocs\mvc\views\post\editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17443554a5a6d72f323-08413200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '768be14fbdfd238aa76c52b1f06873e3b73d0958' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc\\views\\post\\editar.tpl',
      1 => 1428694803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17443554a5a6d72f323-08413200',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_554a5a6d9515a1_77075702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554a5a6d9515a1_77075702')) {function content_554a5a6d9515a1_77075702($_smarty_tpl) {?><form id="form1" method="post" action="">
    <input type="hidden" name="guardar" value="1" />
    
    <table class="table table-bordered" style="width: 350px;">
        <tr>
            <td style="text-align: right;">Titulo: </td>
            <td><input type="text" name="titulo" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['titulo'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
    
        <tr>
            <td style="text-align: right;">Cuerpo: </td>
            <td><textarea name="cuerpo"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['datos']->value['cuerpo'])===null||$tmp==='' ? '' : $tmp);?>
</textarea></td>
        </tr>
    </table>
        
    <p><button class="btn btn-primary"><i class="icon-ok icon-white"> </i> Guardar</button></p>
</form><?php }} ?>