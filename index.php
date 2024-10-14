<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

$router = new AltoRouter();

require 'config.php';
require ABSPATH . '/database.php';
require ABSPATH . '/bootstrap.php';
require ABSPATH . '/routes/userRoute.php';

if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    echo "Page not found 404 error";
}
