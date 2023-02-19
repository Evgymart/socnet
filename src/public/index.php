<?php

use Phalcon\Mvc\Application;
use Phalcon\Mvc\Url;

require_once realpath(dirname(dirname(__FILE__))) . '/app/config/env.php';
require_once APP_PATH . 'config/loader.php';
require_once APP_PATH . 'config/services.php';

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
