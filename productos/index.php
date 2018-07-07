<?php

require "../boot.php";

$query="SELECT * from productos";
$buffer= $mysqli->query($query);
while($row= $buffer->fetch_assoc()){
  $productos[] = $row;
}

$tabla= '
<table>
  <tr>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Acciones</th>
  </tr>';

foreach($productos as $producto){
  $tabla.='
  <tr>
    <td>'.$producto['nombre'].'</td>
    <td>'.$producto['precio'].'</td>
    <td>
      <a href="edit.php?id='.$producto['id'].'">Editar</a>/
      <a href="abmController.php?id='.$producto['id'].'&type=3">Eliminar</a>
    </td>
  </tr>';
}

$tabla.= '</table>';

echo $tabla;
echo '<a href="create.php">Agregar</a>';
