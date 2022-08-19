<?php

namespace Engine;

use Engine\DI\DI;

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
        $this->router->add('home', '/', 'HomeController:index');
        $this->router->add('product', '/product/{id}', 'ProductController:index');
        var_dump($this->di->get('router'));
    }
}