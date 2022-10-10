<?php

require_once 'Router.php';

class Application {
    function __construct($config) {
        $this->config = $config;
        $this->routes = [];
    }

    public function route() {
        return $this->routes;
    }
}