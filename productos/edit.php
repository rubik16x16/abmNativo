<?php

require "../boot.php";

$query="SELECT * from productos WHERE id={$_GET['id']}";
$buffer= $mysqli->query($query);
$producto= $buffer->fetch_assoc();

 ?>

<span>Crear producto</span>
<form action="abmController.php?type=2" method="post">
  <input type="hidden" name="id" value="<?php echo $producto['id'] ?>">
  <input type="text" name="nombre" placeholder="nombre" value="<?php echo $producto['nombre'] ?>">
  <input type="text" name="precio" placeholder="precio" value="<?php echo $producto['precio'] ?>">
  <input type="submit" value="guardar">
</form>
