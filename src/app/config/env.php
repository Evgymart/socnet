<?php
declare(strict_types=1);

error_reporting(E_ALL);

/**
 * @const BASE_ROOT Document root
 */
define('BASE_ROOT', dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR);

if (!file_exists(BASE_ROOT . 'vendor/autoload.php')) {
    throw new \RuntimeException(
        'Unable to locate autoloader. ' .
        'Install dependencies from the project root directory to run test suite: `composer install`.'
    );
}

/**
 * Include Composer autoloader
 */
include BASE_ROOT . 'vendor/autoload.php';

/**
 * @const BASE_ROOT Main application path
 */
define('APP_PATH', BASE_ROOT . 'app' . DIRECTORY_SEPARATOR);
