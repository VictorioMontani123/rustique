<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-12 23:03:14
  from 'C:\xampp\htdocs\rustique-main\templates\tpusuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f84c4927bef96_32272706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b5c27fe173f6fb33f1608d687f171f3d32f8f3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rustique-main\\templates\\tpusuarios.tpl',
      1 => 1602534418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5f84c4927bef96_32272706 (Smarty_Internal_Template $_smarty_tpl) {
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
   <select name=" " id="filtrocategoria"> <option value="value1">TODOS</option> <option value="value1">EXTERIOR</option>  <option value="value1">INTERIOR</option> </select> </th>
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
      
      <th scope="row"><a href="ver/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
"> VER</a> </th>

      
      <td> <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</td>
      <td> <?php echo $_smarty_tpl->tpl_vars['producto']->value->color;?>
</td>
      <td> <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
 </td>
      <td> <?php echo $_smarty_tpl->tpl_vars['producto']->value->especificacion;?>
 </td>
     
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

    </tr>
  </tbody>




  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


</table>
<?php }
}
