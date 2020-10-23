<?php

abstract class Product
{
    public $product_id;
    public $product_name;
    public $product_price;
    public $product_type;
    public $products = [];

    public function createProduct() {
        array_push($this->products, $this->product_type);
    }

    public function __toString() {
        $string = "$this->product_name = $this->product_price €";
        return $string;
    }

    public function removeProduct()
    {

    }

    public function updateProduct()
    {

    }

    static public function getMenu() {
        foreach($products as $type_product => $product) {
            echo "Type de produit: $type_product <br>Produit: $product";
        }
    }
}
