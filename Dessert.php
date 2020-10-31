<?php

class Dessert extends Product
{

    public function __construct($dessert_name)
    {
        $this->product_type = "Desserts";
        $this->product_name = $dessert_name;
    }
}
