<?php

global $router;

use Controllers\HomeController;

$router->addRoute('', HomeController::class, 'index');