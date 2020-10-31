<?php

require('Product.php');
require('Pizza.php');
require('Paste.php');

// CREATION DES PRODUITS
$calzone = new Pizza('calzone');
$calzone->product_price = 15;
echo $calzone;

echo '<hr>';

$montagnarde = new Pizza('montagnarde');
$montagnarde->product_price = 17;
echo $montagnarde;

echo '<hr>';

$carbonara = new Paste('carbonara');
$carbonara->product_price = 12;
echo $carbonara;

echo '<hr>';

$bolognaise = new Paste('bolognaise');
$bolognaise->product_price = 10.50;
echo $bolognaise;

echo '<hr>';

// CREATION DES PRODUITS
$calzone->createProduct();
$carbonara->createProduct();
$montagnarde->createProduct();
$bolognaise->createProduct();

// SUPPRESSION DES PRODUITS
$bolognaise->removeProduct();

// AFFICHAGE DU MENU
echo "<h1 style='text-align: center'>MENU</h1><br>";
Product::getMenu();
