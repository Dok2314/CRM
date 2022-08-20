<?php

namespace Engine;

use Engine\DI\DI;
use Engine\Helper\Common;

class Cms
{

    /**
     * @var DI
     */
    private DI $di;

    public $router;

    /**
     * @param DI $di
     */
    public function __construct(DI $di)
    {
        $this->di = $di;
        $this->router = $this->di->get('router');
    }

    /**
     * @return void
     */
    public function run()
    {
        $this->router->add('home', '/', 'HomeController::index');
        $this->router->add('product', '/product/12', 'ProductController::index');
        $routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());

        var_dump($routerDispatch);
    }
}