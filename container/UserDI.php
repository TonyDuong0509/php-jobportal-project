<?php

use Container\ServiceContainer;

$serviceContainer = new ServiceContainer();

$serviceContainer->add(App\Repositories\Interfaces\UserRepositoryInterface::class, new App\Repositories\UserRepository());
$serviceContainer->add(App\Services\UserService::class, new App\Services\UserService($serviceContainer->resolve(App\Repositories\Interfaces\UserRepositoryInterface::class)));
