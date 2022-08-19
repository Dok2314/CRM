<?php

namespace Engine;

use Engine\DI\DI;

class Cms
{

    /**
     * @var DI
     */
    private DI $di;

    /**
     * @param DI $di
     */
    public function __construct(DI $di)
    {
        $this->di = $di;
    }

    /**
     * @return void
     */
    public function run()
    {
    }
}