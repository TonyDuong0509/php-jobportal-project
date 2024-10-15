<?php

// Repository Interface
require_once ABSPATH . '/app/Repositories/Interfaces/UserRepositoryInterface.php';
require_once ABSPATH . '/app/Repositories/Interfaces/CategoryRepositoryInterface.php';
require_once ABSPATH . '/app/Repositories/Interfaces/CompanyRepositoryInterface.php';

// Models - Repositories
require_once ABSPATH . '/app/Models/User.php';
require_once ABSPATH . '/app/Repositories/UserRepository.php';
require_once ABSPATH . '/app/Models/Category.php';
require_once ABSPATH . '/app/Repositories/CategoryRepository.php';
require_once ABSPATH . '/app/Models/Company.php';
require_once ABSPATH . '/app/Repositories/CompanyRepository.php';

// Services
require_once ABSPATH . "/Container/ServiceContainer.php";

require_once ABSPATH . '/app/Services/UserService.php';
require_once ABSPATH . '/app/Services/CategoryService.php';
require_once ABSPATH . '/app/Services/CompanyService.php';

//jobportal.local
function get_host_name()
{
    return $_SERVER['HTTP_HOST'];
}
//http://
function getProtocol()
{
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    return $protocol;
}

//http://jobportal.local
function get_domain()
{
    $protocol = getProtocol();
    return $protocol . $_SERVER['HTTP_HOST'];
}
