<?php

require_once 'router.php';
class FastPHP {
  public function __construct() {
    $this->router = new Router();
  }

  public function getPath() {
    $rota = $_SERVER['REDIRECT_URL'];
  }

  public function listen() {

    $path = $this->getPath();
    $route = $this->router->search_route($path);
    call_user_func($route->exec);
  }
}
