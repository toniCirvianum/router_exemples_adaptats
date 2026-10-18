<?php

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\LoginController;

function route($method, $url)
{
    if ($method === 'GET') {
        switch ($url) {
            case '/':
                (new HomeController())->index();
                return;
            case '/products':
                (new ProductController())->index();
                return;
            case '/login':
                (new LoginController())->index();
                return;
        }
    }
    if ($method === 'POST' && $url === '/login') {
        (new LoginController())->authenticate();
        return;
    }
    (new HomeController())->notFound();
}
