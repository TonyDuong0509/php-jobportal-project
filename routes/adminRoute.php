<?php

use Container\ServiceContainer;

$router = new AltoRouter();

$serviceContainer = new ServiceContainer();

$router->map('GET', '/admin/dashboard', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\Admin\DashboardController::class);
    $controller->index();
}, 'admin.dashboard');

$router->map('GET', '/admin/register/form', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\Admin\AuthController::class);
    $controller->registerForm();
}, 'admin.register.form');

$router->map('POST', '/admin/register', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\Admin\AuthController::class);
    $controller->register();
}, 'admin.register');

$router->map('GET', '/admin/login/form', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\Admin\AuthController::class);
    $controller->loginForm();
}, 'admin.login.form');

$router->map('POST', '/admin/login', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\Admin\AuthController::class);
    $controller->login();
}, 'admin.login');

$router->map('GET', '/admin/logout', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\Admin\AuthController::class);
    $controller->logout();
}, 'admin.logout');

$match = $router->match();
