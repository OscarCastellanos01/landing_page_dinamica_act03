<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../src/app/Router.php';

$router = new App\Router();

// Declaramos una variable global antes de incluir routes.php
global $router;
require_once __DIR__ . '/../src/app/routes.php';

$uri = str_replace(PUBLIC_PATH, '', $_SERVER['REQUEST_URI']);
$uri = rtrim($uri, '/');
$router->dispatch($uri);
