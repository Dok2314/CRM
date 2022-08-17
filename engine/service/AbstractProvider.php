<?php

namespace Engine\service;

use Engine\DI\DI;

abstract class AbstractProvider
{
    /**
     * @var
     */
    protected $di;

    /**
     * @param DI $di
     */
    public function __construct(DI $di)
    {
        $this->di = $di;
    }

    /**
     * @return mixed
     */
    abstract function init();
}