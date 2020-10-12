<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-12 21:32:14
  from 'C:\xampp\htdocs\rustique-main\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f84af3e7711d2_83661671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7f99c7af8cfcfe3e81826ebc0934ce050b0e1f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rustique-main\\templates\\login.tpl',
      1 => 1602451403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f84af3e7711d2_83661671 (Smarty_Internal_Template $_smarty_tpl) {
?> 
 
 <form action="verificado" method="POST">
 
 
 <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
 <input type="text" name="usuario" id="" placeholder="Ingresa usuario">
 <?php echo $_smarty_tpl->tpl_vars['contrasenia']->value;?>
 <input type="password" name="contrasenia" id="" placeholder="Ingresa contraseña">
 <button type="submit" class="formatoboton" id="boton" >Enviar</button>

 </form><?php }
}
