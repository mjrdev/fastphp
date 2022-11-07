<?php

class Route {
  public $path; private $middleware; private $exec;
  public function __construct($path, $middleware, $exec) {
    $this->path = $path;
    $this->middleware = $middleware;
    $this->exec = $exec;
  }
}

class Router extends route {
  private $routes;
  public function __construct() {
    $this->routes = [];
  }

  public function call() {
    
  }

  public function getRoutes() {
    return $this->routes;
  }

  public function get($path, $middleware, $exec) {
    echo 'ok';
    array_push($this->routes, new Route($path, $middleware, $exec));
  }
}