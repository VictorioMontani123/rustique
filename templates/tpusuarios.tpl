{include "header.tpl"}


<table class="table table-sm">
    <thead>
    <tr>
      <th scope="col">{$titulo}</th>
      <th scope="col">{$nombre}</th>
      <th scope="col">{$color}</th>
      <th scope="col"> {$precio}</th>
      <th scope="col"> {$especificacion}</th>
      <th scope="col" >  {$TituloCategoria}   <select name=" " id="filtrocategoria"> <option value="value1">TODOS</option> <option value="value1">EXTERIOR</option>  <option value="value1">INTERIOR</option> </select> </th>
    </tr>
  </thead>
  {foreach from=$productos item=producto}
  
  <tbody>
    <tr>
      
      <th scope="row"><a href="ver/{$producto->id}"> VER</a> </th>

      
      <td> {$producto->nombre}</td>
      <td> {$producto->color}</td>
      <td> {$producto->precio} </td>
      <td> {$producto->especificacion} </td>
     
      {foreach from=$Categorias item=categoria}
      

      
      {if $categoria->id eq $producto->id_categoria}  <!-- este no se tiene que poder editar   !!!-->
      <td> {$categoria->nombre_categoria}</td> 
      {/if}
      {/foreach}

    </tr>
  </tbody>




  {/foreach}


</table>
