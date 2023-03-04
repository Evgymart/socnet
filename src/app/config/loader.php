<?php
declare(strict_types=1);

use Phalcon\Autoload\Loader;

$loader = new Loader();
$loader->setDirectories(
    [
        'Socnet\Controllers' => APP_PATH . '/controllers/',
        'Socnet\Modelrs' => APP_PATH . '/models/',
    ]
);

$loader->register();
