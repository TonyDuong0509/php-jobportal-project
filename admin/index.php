<?php
require './../vendor/autoload.php';

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$router = new AltoRouter();
global $router;

require './../config.php';
require ABSPATH . '/database.php';
require ABSPATH . '/bootstrap.php';
require ABSPATH . '/container/UserDI.php';
require ABSPATH . '/routes/adminRoute.php';

if ($match === false) {
    header("Location: /admin/dashboard");
    exit;
}

$publicRoutes = [
    'admin.register',
    'admin.login',
    'admin.login.form',
    'admin.register.form',
];

if (!isset($_SESSION['admin']['email']) && !in_array($match['name'], $publicRoutes)) {
    header("Location: /admin/login/form");
    exit;
}

if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    echo "Error : Page not found !";
}
