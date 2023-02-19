<?php

use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Url;
use Phalcon\Mvc\View\Engine\Volt;
use Phalcon\Mvc\ViewBaseInterface;

$container = new FactoryDefault();
$container->setShared(
	'voltService',
	function (ViewBaseInterface $view) use ($container) {
		$volt = new Volt($view, $container);
		$volt->setOptions(
			[
				'always'    => true,
				'extension' => '.php',
				'separator' => '_',
				'stat'      => true,
				'path'      => BASE_ROOT . 'cache/volt/',
				'prefix'    => '-prefix-',
			]
		);

		return $volt;
	}
);

$container->set(
    'view',
    function () {
        $view = new View();
        $view->setViewsDir(APP_PATH . '/views/');
		$view->registerEngines(
            [
                '.volt' => 'voltService',
            ]
        );

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

return $container;
