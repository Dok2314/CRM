<?php

namespace Engine\Service\Router;

use Engine\Core\Router\Router;
use Engine\Service\AbstractProvider;

class Provider extends AbstractProvider
{
    public string $serviceName = 'router';

    public function init()
    {
        $router = new Router('http://crm:8889/');

        $this->di->set($this->serviceName, $router);
    }
}