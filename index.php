<?php

require 'Autoloader.php';
Autoloader::register();

$shop = new Shop();

// création des produits
$ingredients = ['tomato', 'cheese'];
$pizzaCalzone = new Product('Pizza', 'Calzone', 10, $ingredients, 5);

$shop->addProduct($pizzaCalzone);
$shop->showMenu();


//gestion des produits
$pizzaCalzone->setStock(10);
$pizzaCalzone->setPrice(15);

// création d'une commande
$command = new Command();
$command->addProduct($pizzaCalzone);
$shop->addCommand($command);

// gestion des commandes
$command->setStatus(StatusCommand::IN_PREPARATION);

// génération de la facture
$command->showInvoice();
