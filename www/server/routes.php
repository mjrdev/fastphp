<?php

class Controller {
    private function controller() {
        
    }
}

class Routes extends Controller {
    public function __construct() {
        $this->routes = [];
    }

    public function route($way) {
        return $way;
    }
}