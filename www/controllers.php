<?php

class Controllers {
    public function __construct($contents) {
        $this->contents = $contents;
    }

    public function get_users() {
        return $this->contents;
    }
}