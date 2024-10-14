<?php

use Container\ServiceContainer;

$router = new AltoRouter();

$serviceContainer = new ServiceContainer();

$router->map('GET', '/', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\User\HomeController::class);
    $controller->index();
}, 'home');

$match = $router->match();
