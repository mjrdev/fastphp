<?php

class Route {
  public function __construct(
    public $type,
    public $path,
    public $middleware,
    public $exec
  ) {
    $this->type = $type;
    $this->path = $path;
    $this->middleware = $middleware;
    $this->exec = $exec;
  }
}

class Router {
  public $routes;

  public function __construct(
    public string $base_url = '/'
  )
  {
    $this->routes = [];
    $this->base_url = $base_url;
  }



  public function get($path, $middleware, $callback) {

    $route = new Route('get', $path, $middleware, $callback);

    array_push($this->routes, $route);
  }

  public function search_route(string $path = null) {

    if($path) {
      return $this->routes;
    } else {
      return $this->routes[0];
    }
  }

  public function get_routes() {
    return $this->routes;
  }
}
?>