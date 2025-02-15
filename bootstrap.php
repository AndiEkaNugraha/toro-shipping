<?php

declare(strict_types= 1);

require_once __DIR__ . '/vendor/autoload.php';

use Core\App;
use Core\Database;
use Core\ErrorHandler;

function loadEnv($path)
{
    if (!file_exists($path)) {
        return;
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos($line, '#') === 0) {
            continue; // Lewati komentar
        }

        list($key, $value) = explode('=', $line, 2);
        $key = trim($key);
        $value = trim($value);

        if (!array_key_exists($key, $_SERVER) && !array_key_exists($key, $_ENV)) {
            putenv("$key=$value");
            $_ENV[$key] = $value;
        }
    }
}
loadEnv(__DIR__ . '/.env');
set_exception_handler([ErrorHandler::class, 'handleException']);
set_error_handler([ErrorHandler::class, 'handleError']);
$config = require_once __DIR__ . '/config.php';

App::bind('config', $config);
App::bind('database', new Database($config['database']));
