<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-07 01:19:07
  from 'C:\xampp\htdocs\tpe-web2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7cfb6b924ab3_02668909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f15bbac824bd2cde20170f0e313b84e386bdd94c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\home.tpl',
      1 => 1601838352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5f7cfb6b924ab3_02668909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 <!-- SECTION QUE EXPLICA QUIENES SOMOS Y DONDE NOS ENCONTRAMOS  -->
    <section class="QS">
        <!-- titulo del quienes somos  -->
        <h1 class="tituloQS">¿Quienes somos?</h1>
        <!-- fin del titulo quienes somos -->
        
        <!-- ARTICULO CON PARRAFO QUIENES SOMOS -->
        <article class="articuloQS">
            <!-- parrafo explicativo de quienes somos -->
            <p class="parrafoQS">
                Somos una fábrica de revestimientos para pisos y paredes de fabicación propia; que con la llegada de la
                nueva década METALCOOP LTDA, decidió lanzar al mercado RUSTIQUE, ubicada en la ciudad de Tandil.
                La marca cuenta con una gran variedad de modelos tradicionales y rusticos, que combinan utilidad, diseño
                y
                practicidad a la hora de proyectar un estilo en los diversos espacios públicos y privados, contemplando
                las
                necesidades que se presentan en la actualidad.
            </p>
            <!-- finaliza el parrafo explicativo de quienes somos  -->
        </article>
        <!-- FINALIZA EL ARTICULO DEL PARRAFO QUIENES SOMOS -->

        <!-- ARTICULO CON MAPA DE DONDE NOS ENCONTRAMOS -->
        <article class="ubicacion">
            <!-- titulo del mapa de donde nos encontramos -->
            <h2 class="tituloubicacion">¿Dónde nos encontramos? </h2>
            <!-- finaliza el titulo del mapa de donde nos encontramos -->

            <!-- mapa donde nos encontramos -->
            <iframe class="mapa"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2180.0744970110577!2d-59.108764830426516!3d-37.308585019082464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95911ffe902b837d%3A0xf95557a80be784c!2sCooperativa%20de%20Trabajo%20Metalcoop%20Limi!5e0!3m2!1ses-419!2sar!4v1588805123768!5m2!1ses-419!2sar"
                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
            <!-- finaliza el mapa de donde nos encontramos -->
        </article>
        <!-- FINALIZA EL ARTICULO CON EL MAPA DE DONDE NOS ENCONTRAMOS -->
    </section>
    <!-- FINALIZA LA SECTION DE QUIENES SOMOS Y DONDE NOS ENCONTAMOS -->


    <?php echo '<script'; ?>
 type="text/javascript" src="JS/index.js"><?php echo '</script'; ?>
><?php }
}
