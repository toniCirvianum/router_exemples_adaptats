<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->render('home/index', ['title' => 'Inici']);
    }
    public function notFound()
    {
        http_response_code(404);
        $this->render('errors/404', ['title' => 'Pàgina no trobada']);
    }
}
