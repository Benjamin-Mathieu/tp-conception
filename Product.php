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
        self::$products[$this->product_type][$this->product_name] = array($this->product_price);
    }

    public function __toString()
    {
        $string = "Type : $this->product_type <br> Name : $this->product_name <br> Price : $this->product_price €";
        return $string;
    }

    public function removeProduct()
    {
        unset(self::$products[$this->product_type][$this->product_name]);
    }

    public function updateProduct()
    {
    }

    public static function getMenu()
    {
        foreach (self::$products as $type => $produit) {

            echo "<br><b>$type</b>";

            foreach ($produit as $name => $description) {
                for ($i = 0; $i < count($description); $i++) {
                    echo "<br>$name<br>" . $description[$i];
                }
            }
        }
    }
}
