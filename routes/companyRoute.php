<?php

use Container\ServiceContainer;

$router = new AltoRouter();

$serviceContainer = new ServiceContainer();

$router->map('GET', '/company/home', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\User\CompanyController::class);
    $controller->index();
}, 'company.home');

$router->map('GET', '/company/login/form', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\User\CompanyController::class);
    $controller->loginForm();
}, 'company.login.form');

$router->map('GET', '/company/register/form', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\User\CompanyController::class);
    $controller->registerForm();
}, 'company.register.form');

$router->map('POST', '/company/register', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\Auth\AuthController::class);
    $controller->registerCompany();
}, 'auth.company.register');

$router->map('POST', '/company/login', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\Auth\AuthController::class);
    $controller->loginCompany();
}, 'auth.company.login');

$router->map('GET', '/company/logout', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\Auth\AuthController::class);
    $controller->logoutCompany();
}, 'auth.company.logout');

$match = $router->match();
