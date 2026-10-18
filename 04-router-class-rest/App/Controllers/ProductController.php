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
        $this->render('products/index', [
            'title' => 'Productes',
            'products' => $products
        ]);
    }
    public function store()
    {
        $this->render('products/action', [
            'title' => 'POST /products',
            'message' => 'Exemple de creació de producte'
        ]);
    }
    public function update($id)
    {
        $this->render('products/action', [
            'title' => 'PUT /products/' . $id,
            'message' => 'Exemple de modificació del producte ' . $id
        ]);
    }
    public function destroy($id)
    {
        $this->render('products/action', [
            'title' => 'DELETE /products/' . $id,
            'message' => 'Exemple d eliminació del producte ' . $id
        ]);
    }
    public function show($id)
    {
        $products = [
            (new Product(1, 'Mouse', 30, 'Perifèrics'))->getAll(),
            (new Product(2, 'Keyboard', 45, 'Perifèrics'))->getAll()
        ];
        foreach ($products as $product) {
            if ((string)$product['id'] === (string)$id) {
                $this->render('products/show', [
                    'title' => 'Detall del producte', 
                    'product' => $product]);
                return;
            }
        }
        (new HomeController())->notFound();
    }
}
