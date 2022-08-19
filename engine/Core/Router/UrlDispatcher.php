<?php

namespace Engine\Core\Router;

class UrlDispatcher
{
    /**
     * @var array|string[]
     */
    private array $methods = [
        'GET',
        'POST'
    ];

    /**
     * @var array|array[]
     */
    private array $routes = [
        'GET'  => [],
        'POST' => []
    ];

    /**
     * @var array|string[]
     */
    private array $patterns = [
        'int' => '[0-9]+',
        'str' => '[a-zA-Z\.\-_%]+',
        'any' => '[a-zA-Z0-9\.\-_%]+'
    ];

    /**
     * @param $key
     * @param $pattern
     * @return void
     */
    public function addPattern($key, $pattern)
    {
        $this->patterns[$key] = $pattern;
    }

    private function routes($method)
    {
        return $this->routes[$method] ?? null;
    }

    public function dispatch($method, $uri)
    {
        $routes = $this->routes(strtoupper($method));

        if(array_key_exists($uri, $routes)) {
            return new DispatchedRoute($routes[$uri]);
        }
    }
}