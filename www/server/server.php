<?php

include 'routes.php';

class Server {
    function __construct($config) {
        $this->config = $config;
        $this->routes = [];
    }

    public function response($data) {
        return;
    }

    public function request($data) {
        return;
    }

    public function router($route, $controller) {
        array_push($this->routes, $route);
        
        return $this->routes;
    } 
}