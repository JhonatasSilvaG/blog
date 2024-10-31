<?php

$routes = require '../routes.php';

if(key_exists($path, $routes)) {
    require $routes[$path];
}