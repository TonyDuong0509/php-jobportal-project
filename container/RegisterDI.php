<?php

use Container\ServiceContainer;

$serviceContainer = new ServiceContainer();

// Admin 
$serviceContainer->add(App\Repositories\Interfaces\UserRepositoryInterface::class, new App\Repositories\UserRepository());
$serviceContainer->add(App\Services\UserService::class, new App\Services\UserService($serviceContainer->resolve(App\Repositories\Interfaces\UserRepositoryInterface::class)));


// Category
$serviceContainer->add(App\Repositories\Interfaces\CategoryRepositoryInterface::class, new App\Repositories\CategoryRepository());
$serviceContainer->add(App\Services\CategoryService::class, new App\Services\CategoryService($serviceContainer->resolve(App\Repositories\Interfaces\CategoryRepositoryInterface::class)));


// Company 
$serviceContainer->add(App\Repositories\Interfaces\CompanyRepositoryInterface::class, new App\Repositories\CompanyRepository());
$serviceContainer->add(App\Services\CompanyService::class, new App\Services\CompanyService($serviceContainer->resolve(App\Repositories\Interfaces\CompanyRepositoryInterface::class)));
