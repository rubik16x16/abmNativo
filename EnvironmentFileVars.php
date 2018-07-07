<?php

class EnvironmentFileVars{

  private $envVars;

  public function __construct(){
    $this->envVars= $this->readEnvFile();
  }

  private function readEnvFile(){
    $envFileUrl= $_SERVER['DOCUMENT_ROOT'] . "/abmNativo/.env";
    if(file_exists($envFileUrl)){
      $envFile= fopen($envFileUrl, 'r');
      while(($buffer= fgets($envFile)) != false){
        list($k, $v)=(explode('=', $buffer));
        $envVars[$k]= rtrim($v);
      }
      return $envVars;
    }
    throw new exception('Archivo .env no existe');
  }

  public function get($key){
    if(isset($this->envVars[$key])){
      return $this->envVars[$key];
    }
    throw new exception("La variable {$key} no esta definida en su archivo env");
  }

}
