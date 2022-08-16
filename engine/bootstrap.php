<?php

require_once __DIR__ . '/../vendor/autoload.php';

use engine\Cms;
use engine\di\DI;

try {
    // Dependency injection
    $di = new DI();

    $di->set('test', ['db' => 'db_object']);
    $di->set('test2', ['mail' => 'mail_object']);

    $cms = new Cms($di);
    $cms->run();
}catch (\ErrorException $e) {
    echo $e->getMessage();
}