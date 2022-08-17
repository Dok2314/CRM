<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Engine\DI\DI;
use Engine\Cms;
use Engine\core\database\Connection;

try {
    $di = new DI();

    $services = require_once __DIR__ . '/config/service.php';

    // Init services
    foreach ($services as $service) {
        $provider = new $service($di);
        $provider->init();
    }

    $cms = new Cms($di);
    $cms->run();
}catch (\ErrorException $e) {
    echo $e->getMessage();
}