<?php

require_once __DIR__ . '/functions.php';

define('BASE_URL', 'http://localhost:8000');
define('PUBLIC_PATH', '/public');
define('VIEW_PATH', realpath(__DIR__ . '/../src/views/') . '/');

define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'php_mvc');