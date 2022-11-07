<?php

require_once './app/server.php';

header('Acess-Control-Allow-Origin: *');
header('Content-type: aplication/text');

date_default_timezone_set("America/Sao_Paulo");

function init() {
  if(isset($_GET['path'])) {
    $path = explode("/", $_GET['path']);
  
    if($path[0] == 'api') {
  
      $server = new Server();

      return $server;
    } else {
      echo new Error("adicionar '/api' após dominio.");
    }
  } else {
    echo new Error("Ocorreu um erro no servidor");
  }
}