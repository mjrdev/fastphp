<?php

class Route {
  function __construct($method, $route, $middleware, $controller) {
    $this->method = $method;
    $this->route = $route;
    $this->middlewareFunction = $middleware;
    $this->controllerFunction = $controller;
  }

  
}