<?php

class Shop
{
    public $products = [];
    public $commands = [];

    public function addProduct($product)
    {
        array_push($this->products, $product);
    }

    public function addCommand($command)
    {
        array_push($this->commands, $command);
    }

    public function showMenu()
    {
        foreach ($this->products as $product) {
            echo $product;
        }
    }
}
