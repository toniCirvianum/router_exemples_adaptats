<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            (new Product(1, 'Mouse', 30, 'Perifèrics'))->getAll(),
            (new Product(2, 'Keyboard', 45, 'Perifèrics'))->getAll()
        ];
        $this->render('products/index', ['title' => 'Productes', 'products' => $products]);
    }
    public function show($id)
    {
        $products = [
            (new Product(1, 'Mouse', 30, 'Perifèrics'))->getAll(),
            (new Product(2, 'Keyboard', 45, 'Perifèrics'))->getAll()
        ];
        foreach ($products as $product) {
            if ($product['id'] == $id) {
                $this->render('products/show', ['title' => 'Detall del producte', 'product' => $product]);
                return;
            }
        }
        (new HomeController())->notFound();
    }
}
