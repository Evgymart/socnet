<?php
declare(strict_types=1);

use Phalcon\Config\Config;

return new Config(
    [
        'database' => [
            'adapter'  => 'Mysql',
            'host'     => '127.0.0.1',
            'username' => 'root',
            'password' => 'root',
            'dbname'   => 'database',
            'charset'  => 'utf8',
        ],
        'application' => [
            'logInDb'              => true,
            'migrationsDir'        => 'db/migrations',
            'exportDataFromTables' => [
                'users',
            ],
        ],
    ]
);
