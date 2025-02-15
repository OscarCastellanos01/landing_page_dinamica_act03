<?php

global $router;

use Controllers\HomeController;
use Controllers\UserController;

$router->addRoute('', HomeController::class, 'index');
$router->addRoute('/users', UserController::class, 'index');