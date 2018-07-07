<?php

require "../boot.php";

$query= $mysqli->query("SELECT * from productos");
while($buffer= $query->fetch_assoc()){
  $productos[] = $buffer;
}

$tabla= '
<table>
  <tr>
    <th>Nombre</th>
    <th>Precio</th>
  </tr>';

foreach($productos as $producto){
  $tabla.="
  <tr>
    <td>{$producto['nombre']}</td>
    <td>{$producto['precio']}</td>
  </tr>";
}

$tabla.= '</table>';

echo $tabla;
echo '<a href="create.php">Agregar</a>';
