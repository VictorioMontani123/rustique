<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-11 22:06:15
  from 'C:\xampp\htdocs\tpe-web2\templates\tp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8365b7aaeeb2_32931025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2649f9b482a2ea2629ffc58a36c8c4ef224a35b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\tp.tpl',
      1 => 1602446774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:insert.tpl' => 1,
  ),
),false)) {
function content_5f8365b7aaeeb2_32931025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<table class="table table-sm">
    <thead>
    <tr>
      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</th>
      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</th>
      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
</th>
      <th scope="col"> <?php echo $_smarty_tpl->tpl_vars['precio']->value;?>
</th>
      <th scope="col"> <?php echo $_smarty_tpl->tpl_vars['especificacion']->value;?>
</th>
      <th scope="col" >  <?php echo $_smarty_tpl->tpl_vars['TituloCategoria']->value;?>
   <select name=" " id="">  <option value="value1">EXTERIOR</option>  <option value="value1">INTERIOR</option> </select> </th>
    
    </tr>
  </thead>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
  
  <tbody>
    <tr>
      <form action="edit" method="POST">
      <th scope="row"><a href="ver/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
"> VER</a> </th>
      <td> <input type="text" name="EditNombre" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
" id=""> </td>
      <td> <input type="text" name="EditColor" id="" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->color;?>
"> </td>
      <td> <input type="number" name="EditPrecio" id="" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
"> </td>
      <td> <input type="text" name="EditEspecificacion" id="" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->especificacion;?>
"> </td>
     
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
      
      <?php if ($_smarty_tpl->tpl_vars['categoria']->value->id == $_smarty_tpl->tpl_vars['producto']->value->id_categoria) {?>  <!-- este no se tiene que poder editar   !!!-->
      <td> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre_categoria;?>
</td> 
      <?php }?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      <td> <input type="numer" name="EditIdCategoria" id="" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_categoria;?>
"> </td>
         <!-- aca tenemos que agregar un input que nos muestre el id_categoria del producto para poder editarlo -->


       <td> <input type="number" name="EditId" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
" style="display:none"> </td>
         <!-- Como mostsramos el nombre de la categoria??? -->
      <td>  <button> <a href="delete/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
"> BORRAR</a> </button> </td>
      <td> <button type="submit" class="formatoboton" id="boton" >  EDITAR </button> </td>
      </form>
    </tr>
  </tbody>




  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


</table>

<?php $_smarty_tpl->_subTemplateRender("file:insert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
