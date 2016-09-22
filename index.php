<?php

require "core/bootstrap.php";

require 'routes.php';

$uri = trim($_SERVER['REQUEST_URI'],'/');

if ( array_key_exists($uri,$routes) ) {
    require $routes[$uri];
} else {
    throw new Exception("No s'ha trobat la ruta");
}

//DRY: DON'T REPEAT YOURSELF
//WET: WRITE EVERITHING TWICE

// MVC

// FC Front Controller