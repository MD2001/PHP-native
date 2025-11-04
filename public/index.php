<?php



use Core\Router;

const BASE_PATH = __DIR__ . "/../";

require BASE_PATH . "vendor/autoload.php";

session_start();
require BASE_PATH . "Core/functions.php";

// spl_autoload_register(function ($class) {

//     $class = str_replace("\\", "/", $class);
//     // if ($class != 'Core/Container') {
//     //     if ($class != 'Core/App') {
//     //         if ($class != 'Core/Router') {
//     //             dd($class);
//     //         }
//     //     }
//     // }
//     require base_path("{$class}.php");
// });

require base_path('bootstarp.php');

$router = new Router();
require base_path("Routes.php");

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
$method = $_POST["__method"] ?? $_SERVER["REQUEST_METHOD"];
$router->route($uri, $method);
