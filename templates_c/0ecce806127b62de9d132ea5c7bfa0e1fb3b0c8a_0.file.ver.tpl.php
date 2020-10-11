<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-10 20:45:49
  from 'C:\xampp\htdocs\tpe-web2\templates\ver.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f82015de76197_10431319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ecce806127b62de9d132ea5c7bfa0e1fb3b0c8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\ver.tpl',
      1 => 1602355545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5f82015de76197_10431319 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <li>
        <?php echo $_smarty_tpl->tpl_vars['productos']->value->nombre;?>

        <?php echo $_smarty_tpl->tpl_vars['productos']->value->color;?>

        <?php echo $_smarty_tpl->tpl_vars['productos']->value->precio;?>

    </li><?php }
}
