<?php

$routes = $app->router;

$routes->get('/', null, function($a) {

  echo 'rota get';
});
