<?php
require_once __DIR__ . '/autoload.php';

use App\Core\Router;
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\LoginController;

$router = new Router();
//definicio de rutes
$router->get('/', [HomeController::class, 'index']);
$router->get('/products', [ProductController::class, 'index']);
$router->get('/products/{id}', [ProductController::class, 'show']);
$router->get('/login', [LoginController::class, 'index']);
$router->post('/login', [LoginController::class, 'authenticate']);
$router->post('/products', [ProductController::class, 'store']);
$router->put('/products/{id}', [ProductController::class, 'update']);
$router->delete('/products/{id}', [ProductController::class, 'destroy']);

$method = $_SERVER['REQUEST_METHOD'];
//strtoupper --> converteix a majuscules
if ($method === 'POST' && 
    isset($_POST['_method']) && 
    in_array(strtoupper($_POST['_method']), ['PUT', 'DELETE'], true)) {
    $method = strtoupper($_POST['_method']);
}
$router->dispatch($method, parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
