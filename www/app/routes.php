<?php

$routes = $app->router;

$routes->get('/', null, function() {
  echo 'return';
});