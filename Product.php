<?php

class Product {
    
    public $product_id;
    public $product_name;
    public $product_price;
    public $product_type;
    public $products = [];

    public function createProduct() {
        $products = $this->product_name;
    }

    public function __toString() {
        $string = "Type : $this->product_type <br> Name : $this->product_name <br> Price : $this->product_price €";
        return $string;
    }

    public function removeProduct()
    {
        echo "test";
    }

    public function updateProduct()
    {

    }

    public function getMenu() {
        foreach($products as $v) {
            echo $v;
        }
    }
}
