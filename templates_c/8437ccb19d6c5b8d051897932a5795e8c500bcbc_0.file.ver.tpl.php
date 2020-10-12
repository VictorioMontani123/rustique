<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-12 22:01:34
  from 'C:\xampp\htdocs\rustique-main\templates\ver.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f84b61e972f41_52381503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8437ccb19d6c5b8d051897932a5795e8c500bcbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rustique-main\\templates\\ver.tpl',
      1 => 1602355545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5f84b61e972f41_52381503 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <li>
        <?php echo $_smarty_tpl->tpl_vars['productos']->value->nombre;?>

        <?php echo $_smarty_tpl->tpl_vars['productos']->value->color;?>

        <?php echo $_smarty_tpl->tpl_vars['productos']->value->precio;?>

    </li><?php }
}
