<?php

require 'Autoloader.php';
Autoloader::register();

$shop = new Shop();

// création des produits
$ingredients = ['tomato', 'cheese'];
$pizzaCalzone = new Product('Pizza', 'Calzone', 10, $ingredients, 5);

$ingredients = ['cream', 'cheese', 'bacon', 'paste'];
$pateCarbonara = new Product('Paste', 'Carbonara', 12, $ingredients, 9);

$shop->addProduct($pizzaCalzone);
$shop->addProduct($pateCarbonara);

// affichage du menu
echo "<h1> MENU </h1>";
$shop->showMenu();

echo '<hr>';

//gestion des produits
$pizzaCalzone->setStock(10);
$pizzaCalzone->setPrice(15);

// création d'une commande
$command = new Command();
$command->addProduct($pizzaCalzone);
$command->addProduct($pateCarbonara);
$shop->addCommand($command);

// gestion des commandes
$command->setStatus(StatusCommand::IN_PREPARATION);
$command->getStatus();

echo '<hr>';

// génération de la facture
echo "<h1> FACTURE </h1>";
$command->showInvoice();
