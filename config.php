<?php

return [
    'app' => [
        'name' => 'Toro Shipping',
        'debug' => true,
    ],
    // 'database' => [
    //     'driver' => 'sqlite',
    //     'dbname' => __DIR__ . '/database/lab.sqlite'
    // ],
    'database' => [
        'driver'    => getenv('DB_CONNECTION') ?: 'mysql',
        'host'      => getenv('DB_HOST') ?: '127.0.0.1',
        'port'      => getenv('DB_PORT') ?: '3306',
        'dbname'    => getenv('DB_DATABASE') ?: 'toro',
        'username'  => getenv('DB_USERNAME') ?: 'root',
        'password'  => getenv('DB_PASSWORD') ?: '',
        'charset'   => getenv('DB_CHARSET') ?: 'utf8mb4',
        'collation' => getenv('DB_COLLATION') ?: 'utf8mb4_unicode_ci',
        'options' => [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
