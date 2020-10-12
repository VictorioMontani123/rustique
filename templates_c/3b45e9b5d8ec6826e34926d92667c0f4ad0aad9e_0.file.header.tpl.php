<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-12 23:17:46
  from 'C:\xampp\htdocs\rustique-main\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f84c7fa880d91_70174532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b45e9b5d8ec6826e34926d92667c0f4ad0aad9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rustique-main\\templates\\header.tpl',
      1 => 1602537450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f84c7fa880d91_70174532 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rustique</title>
     
    <link rel="shortcut icon" href="Imagenes/logosinfondo.png" /> 
    <link type="text/css" href="Css/css_index.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="portada">
            <img class="logoportada" src="Imagenes/logo1.jpg" alt="">
        </div>


        <nav class="botonera">
            <div class="boton_menu" id="boton_menu"><a>MENU</a></div>
            <li class="libotonera" id="libotonera">
                <ul id="mostrar"> <a href="home" class="botones">Home</a></ul>
                <ul id="mostrar"> <a href="productos" class="botones">Productos</a></ul>
                <ul id="mostrar"> <a href="login" class="botones">Login</a></ul>
            </li>
        </nav>
    </header>
<?php }
}
