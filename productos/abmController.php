<?php

require "../boot.php";

$asd= 'Hola mundo';

class abmController{

  private $mysqli;

  public function __construct(mysqli $mysqli){
    $this->mysqli= $mysqli;
  }

  public function store(){

    $query="INSERT INTO productos(nombre, precio) VALUES ('{$_POST['nombre']}', '{$_POST['precio']}')";
    $this->mysqli->query($query);
    return header("Location:index.php");

  }

}

$abmController= new abmController($mysqli);

switch ($_GET['type']) {
  case 1:
    echo $abmController->store();
    break;

  default:
    break;
}
