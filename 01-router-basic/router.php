<?php

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\LoginController;

function route($url)
{
    switch ($url) {
        case '/':
            (new HomeController())->index();
            break;
        case '/products':
            (new ProductController())->index();
            break;
        case '/login':
            (new LoginController())->index();
            break;
        default:
            (new HomeController())->notFound();
    }
}
