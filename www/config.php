<?php

$rota = $_SERVER['REDIRECT_URL'];
$file = '.' . '/routes' . $rota . '.php';

if(file_exists($file)) {
    require $file;
} else if($rota == '/') {
    require './index.php';
} else {
    require './404.php';       
}