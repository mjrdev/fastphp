<?php

$routes = $app->router;

$routes->get('/', null, function($a) {

  echo 'ok';
});

$routes->post('/', null, function($a) {

  echo '<h1>Uma rota post</h1>';
});