<?php

namespace Engine;

class Cms
{
    /**
     * @var
     */
    private $di;

    /**
     * @var
     */
    public $db;

    /**
     * @param $di
     */
    public function __construct($di)
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