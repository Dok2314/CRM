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

    }
}