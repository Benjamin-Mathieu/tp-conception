<?php

class Product
{

    public $product_id;
    public $product_name;
    public $product_price;
    public $product_type;
    public static $products = [];

    public function createProduct()
    {
        self::$products[$this->product_type][] = array($this->product_name, $this->product_price);
    }

    public function __toString()
    {
        $string = "Type : $this->product_type <br> Name : $this->product_name <br> Price : $this->product_price €";
        return $string;
    }

    public function removeProduct()
    {
        unset($this->product_name, $this->product_price);
    }

    public function updateProduct()
    {
    }

    public static function getMenu()
    {
        foreach (self::$products as $type => $produit) {

            echo "<br><b>$type</b>";

            foreach ($produit as $key => $description) {
                for ($i = 0; $i < count($description); $i++) {
                    echo "<br>" . $description[$i];
                }
            }
        }
    }
}
