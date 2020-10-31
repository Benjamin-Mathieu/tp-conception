<?php

class Pizza extends Product
{

    public function __construct($pizza_name) {
        $this->product_type = "pizza";
        $this->product_name = $pizza_name;
    }
   
}
