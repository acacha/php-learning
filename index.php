<?php

require "core/bootstrap.php";

//$tasks = $query->all('todos');

$routes = [
    ''           => 'controllers/tasks.php',
    'persons'    => 'controllers/persons.php',
//    'persons/'    => 'controllers/persons.php',
//    '/persons/'    => 'controllers/persons.php',
//    '/persons'    => 'controllers/persons.php',
    'about'      => 'controllers/about.php',
    'contact'    => 'controllers/contact.php',
];

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