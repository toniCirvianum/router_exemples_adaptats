<?php

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\LoginController;

function route($method, $url)
{
    if ($method === 'GET' && $url === '/') {
        (new HomeController())->index();
        return;
    }
    if ($method === 'GET' && $url === '/products') {
        (new ProductController())->index();
        return;
    }
    if ($method === 'GET' && preg_match('#^/products/([0-9]+)$#', $url, $matches)) {
        $product = new ProductController;
        $id = $matches[1];
        $product->show($id);
        return;
    }
    if ($method === 'GET' && $url === '/login') {
        (new LoginController())->index();
        return;
    }
    if ($method === 'POST' && $url === '/login') {
        (new LoginController())->authenticate();
        return;
    }
    (new HomeController())->notFound();
}
