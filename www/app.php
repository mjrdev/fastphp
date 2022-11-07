<?php 

require_once 'config.php';

$app = init();
$app->get('/', null, 'a');
$r = $app->getRoutes();