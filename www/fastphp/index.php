<?php

require_once 'router.php';
class FastPHP {
  public function __construct() {
    $this->router = new Router();
  }

  public function getPath() {
    return $rota = $_SERVER['REDIRECT_URL'];
  }

  public function listen($callback) {

    $path = $this->getPath();
    $route = $this->router->search_route($path, $_SERVER['REQUEST_METHOD']);

    if($route) {

      $middleware = null;

      if($route->middleware) {
        $middleware = call_user_func($route->middleware);

        if($middleware === false ) {
          return 'Unauthorized Middleware';
        }
      }
      
      try {

        call_user_func($route->exec, $middleware);

      } catch(Exception $err) {

        return 'ocorreu um erro';
      }
    }
    
    else {
      return $callback();
    }
  }
}
