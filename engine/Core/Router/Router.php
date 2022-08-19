<?php

namespace Engine\Core\Router;

class Router
{
    /**
     * @var array
     */
    private array $routes = [];

    private $dispatcher;

    /**
     * @var
     */
    private $host;

    /**
     * @param $host
     */
    public function __construct($host)
    {
        $this->host = $host;
    }

    /**
     * @param $key
     * @param $pattern
     * @param $controller
     * @param string $method
     * @return void
     */
    public function add($key, $pattern, $controller, string $method = 'GET')
    {
        $this->routes[$key] = [
            'pattern'    => $pattern,
            'controller' => $controller,
            'method'     => $method
        ];
    }

    public function dispatch($method, $uri)
    {
        
    }

    public function getDispatcher()
    {
        if($this->dispatcher == null) {

        }

        return $this->dispatcher;
    }
}