<?php

include 'EnvironmentFileVars.php';

$env= new environmentFileVars();

var_dump($env->get('DB_HOST'));

$mysqli = new mysqli($env->get('DB_HOST'), $env->get('DB_USER'), $env->get('DB_PASS'), $env->get('DB_NAME'));
$query= $mysqli->query("SELECT * from productos");
$recordSet= $query->fetch_assoc();
var_dump($recordSet);
