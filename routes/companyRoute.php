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

$router->map('GET', '/company/profile/[i:id]', function ($id) use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\User\CompanyController::class);
    $controller->profile($id);
}, 'company.profile');

$router->map('POST', '/company/updateProfile', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\User\CompanyController::class);
    $controller->updateProfile();
}, 'company.update.profile');

$router->map('POST', '/company/uploadPhoto', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\User\CompanyController::class);
    $controller->uploadPhoto();
}, 'company.upload.photo');

$router->map('GET', '/company/change-password/[i:id]', function ($id) use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\User\CompanyController::class);
    $controller->changePasswordPage($id);
}, 'company.change.password.page');

$router->map('POST', '/company/change-password', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\User\CompanyController::class);
    $controller->changePassword();
}, 'company.change.password');

$router->map('GET', '/company/post-job-page', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\User\JobController::class);
    $controller->postJobPage();
}, 'company.job.page');

$router->map('POST', '/company/post-job', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\User\JobController::class);
    $controller->postJob();
}, 'company.post.job');

$match = $router->match();
