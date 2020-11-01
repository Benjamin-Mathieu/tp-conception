<?php

class Product
{
    public string $name;
    public int $price;
    public string $type;
    public array $ingredients;
    public int $stock;

    public function __construct(string $type, string $name, int $price, array $ingredients, int $stock)
    {
        $this->type = $type;
        $this->name = $name;
        $this->price = $price;
        $this->ingredients = $ingredients;
        $this->stock = $stock;
    }

    public function __toString()
    {
        $string = "<ul>Type : $this->type 
        <li>Nom : $this->name</li> 
        <li>Prix : $this->price €</li>
        <li>Ingredients: " . implode(", ", $this->ingredients) . "</li>
        <li>Stock: $this->stock</li>
        </ul>";
        return $string;
    }


    public function setStock(int $stock)
    {
        $this->$stock = $stock;
    }

    public function setPrice(int $price)
    {
        $this->price = $price;
    }
}
