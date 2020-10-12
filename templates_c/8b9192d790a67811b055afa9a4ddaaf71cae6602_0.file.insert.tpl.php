<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-12 21:32:09
  from 'C:\xampp\htdocs\rustique-main\templates\insert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f84af3977a9d9_50570626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b9192d790a67811b055afa9a4ddaaf71cae6602' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rustique-main\\templates\\insert.tpl',
      1 => 1602367876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f84af3977a9d9_50570626 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="insert" method="POST">
<label for="Nombre"> Nombre: </label> <input type="text" class="formato" name="InsertNombre" id="InsertNombre" value="">
<label for="Color"> Color: </label> <input type="text" class="formato" name="InsertColor" id="InsertColor" value="">
<label for="especificaciones"> Especificaciones: </label> <textarea name="InsertEspecificaciones" id="InsertEspecificaciones" cols="30" rows="1"class="formato"></textarea>
<label for="Precio"> Precio: </label><input type="number" name="InsertPrecio" id="InsertPrecio" class="formato">
<label for="Precio"> Categoria: </label><input type="number" name="InsertCategoria" id="InsertCategoria" class="formato">
<button type="submit" class="formatoboton" id="boton" >Enviar</button><?php }
}
