<?php

use Container\ServiceContainer;

$router = new AltoRouter();

$serviceContainer = new ServiceContainer();

// Admin routes
$router->map('GET', '/admin/dashboard', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\Admin\DashboardController::class);
    $controller->index();
}, 'admin.dashboard');

$router->map('GET', '/admin/login/form', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\Auth\AuthController::class);
    $controller->loginForm();
}, 'admin.login.form');

$router->map('POST', '/admin/login', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\Auth\AuthController::class);
    $controller->loginAdmin();
}, 'auth.admin.login');

$router->map('GET', '/admin/logout', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\Auth\AuthController::class);
    $controller->logoutAdmin();
}, 'auth.admin.logout');


// Category routes
$router->map('GET', '/admin/manage-category', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\Admin\CategoryController::class);
    $controller->manageCategory();
}, 'all.category');

$router->map('GET', '/admin/add-category-page', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\Admin\CategoryController::class);
    $controller->addCategoryPage();
}, 'add.category.page');

$router->map('POST', '/admin/add-category', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\Admin\CategoryController::class);
    $controller->addCategory();
}, 'add.category');

$router->map('GET', '/admin/edit-category-page/[i:id]', function ($id) use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\Admin\CategoryController::class);
    $controller->editCategoryPage($id);
}, 'edit.category.page');

$router->map('POST', '/admin/update-category', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\Admin\CategoryController::class);
    $controller->updateCategory();
}, 'update.category');

$router->map('GET', '/admin/delete-category/[i:id]', function ($id) use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\Admin\CategoryController::class);
    $controller->deleteCategory($id);
}, 'delete.category');


// Jobseeker routes
$router->map('GET', '/', function () use ($serviceContainer) {
    $controller = $serviceContainer->resolve(App\Controllers\User\HomeController::class);
    $controller->index();
}, 'home');

$match = $router->match();
