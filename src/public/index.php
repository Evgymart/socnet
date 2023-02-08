<?php

use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Application;
use Phalcon\Mvc\Url;

require_once realpath(dirname(dirname(__FILE__))) . '/app/config/env.php';
require_once APP_PATH . 'config/loader.php';

$container = new FactoryDefault();
$container->set(
    'view',
    function () {
        $view = new View();
        $view->setViewsDir(APP_PATH . '/views/');
        return $view;
    }
);

$container->set(
    'url',
    function () {
        $url = new Url();
        $url->setBaseUri('/');
        return $url;
    }
);

$application = new Application($container);

try {
    // Handle the request
    $response = $application->handle(
        $_SERVER["REQUEST_URI"]
    );

    $response->send();
} catch (\Exception $e) {
    echo 'Exception: ', $e->getMessage();
}
