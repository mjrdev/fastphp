<?php

require_once './fastphp/index.php';
require_once './config.php';

$app = new FastPHP();

require './app/routes.php';

$app->listen(function() {
  echo 'Not found 404';
});