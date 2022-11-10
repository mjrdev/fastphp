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

  // methods routes

  public function get($path, $middleware, $callback) {

    $route = new Route('GET', $path, $middleware, $callback);

    array_push($this->routes, $route);
  }

  public function post($path, $middleware, $callback) {

    $route = new Route('POST', $path, $middleware, $callback);

    array_push($this->routes, $route);
  }

  public function put($path, $middleware, $callback) {

    $route = new Route('PUT', $path, $middleware, $callback);

    array_push($this->routes, $route);
  }

  public function delete($path, $middleware, $callback) {

    $route = new Route("DELETE", $path, $middleware, $callback);

    array_push($this->routes, $route);
  }

  // other methods for config routes

  public function search_route(string $path, ) {

    $paths = [];
    foreach ($this->routes as $key => $value) {
      array_push($paths, $value->path);
    }

    $has_path = array_search($path, $paths);
    
    if($has_path)

    if($has_path === false) {

      return false;
    } elseif($this->routes[$has_path]->type !== $_SERVER['REQUEST_METHOD']) {

      return false;
    } else {

      return $this->routes[$has_path];
    }
  }

  public function get_routes() {
    return $this->routes;
  }
}
?>