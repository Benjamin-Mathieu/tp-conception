<?php

require('Product.php');
require('Pizza.php');

$calzone = new Pizza('calzone');
$calzone->product_price = 15;
$calzone->createProduct();
echo $calzone;

var_dump($products);

