<?php

/**
 * Class Router
 */
class Router
{

    /**
     * @var array
     */
    protected $routes = [];

    /**
     * @param Array $routes Array with routes
     */
    public function define($routes) {
        $this->routes = $routes;
    }

    /**
     * @param $routes Path to file with routes
     * @return static
     */
    public static function load($routes)
    {
        $router = new static;
        $router->routes = require $routes;
        return $router;
    }

    /**
     * @param $uri
     * @throws Exception
     */
    public function direct($uri)
    {
        if ( array_key_exists($uri, $this->routes) ) {
            return $this->routes[$uri];
        } else {
            throw new Exception("No s'ha trobat la ruta");
        }
    }

}