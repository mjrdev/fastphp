<?php

include 'server/server.php';
include 'controllers.php';

$contents = file_get_contents('users.json');
$json = json_encode($contents);

$app = new Server(true);
$controllers = new Controllers($contents);

$route = '/';
$response = $app->router('/', $controller->get_users);

echo $contents;