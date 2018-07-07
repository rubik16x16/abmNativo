<?php

include 'EnvironmentFileVars.php';

$env= new environmentFileVars();

$mysqli = new mysqli($env->get('DB_HOST'), $env->get('DB_USER'), $env->get('DB_PASS'), $env->get('DB_NAME'));
