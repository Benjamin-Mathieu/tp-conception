<?php

class Drink extends Product
{

    public function __construct($drink_name)
    {
        $this->product_type = "Boissons";
        $this->product_name = $drink_name;
    }
}
