<?php

require('Product.php');
require('Pizza.php');
require('Paste.php');

$calzone = new Pizza('calzone');
$calzone->product_price = 15;
$calzone->createProduct();
echo $calzone;

echo '<hr>';

$carbonara = new Paste('carbonara');
$carbonara->product_price = 12;
$carbonara->createProduct();
echo $carbonara;

echo '<hr>';

$product = new Product();
echo $product->getMenu();