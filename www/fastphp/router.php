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
  private $routes;

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

  public function search_route(string $path, string $method) {

    $paths = [];
    foreach ($this->routes as $key => $value) {
      array_push($paths, $value->path);
    }

    return $has_path = $this->search_path($path, $method);
  }

  private function search_path(string $path, string $method) {
    $routes = $this->get_routes();
    $resul = null;
    foreach($routes as $key => $route) {
      if($route->path === $path && $route->type === $method) {
        $resul = $route;
      }
    }

    return $resul;
  }

  public function get_routes() : array {
    return $this->routes;
  }
}
?>