<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-11 23:23:38
  from 'C:\xampp\htdocs\tpe-web2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8377daa12213_35598239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0c6cd918768e6819782f09251a9a5db4fc84f56' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\login.tpl',
      1 => 1602451403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8377daa12213_35598239 (Smarty_Internal_Template $_smarty_tpl) {
?> 
 
 <form action="verificado" method="POST">
 
 
 <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
 <input type="text" name="usuario" id="" placeholder="Ingresa usuario">
 <?php echo $_smarty_tpl->tpl_vars['contrasenia']->value;?>
 <input type="password" name="contrasenia" id="" placeholder="Ingresa contraseña">
 <button type="submit" class="formatoboton" id="boton" >Enviar</button>

 </form><?php }
}
