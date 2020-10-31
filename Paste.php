<?php

class Paste extends Product
{

    public function __construct($paste_name) {
        $this->product_type = "paste";
        $this->product_name = $paste_name;
    }
   
}