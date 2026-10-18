<?php

namespace App\Models;

Class Product{
    private $id;
    public $name;
    private $price;
    private $category;

    public function __construct($i,$n,$p,$c){
        $this->id = $i;
        $this->name = $n;
        $this->price = $p;
        $this->category = $c;
    }

    public function getAll() {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "price" => $this->price,
            "category" => $this->category
        ];
    }



}

?>