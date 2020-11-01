<?php

class Command
{
    public $products = [];
    public $status = StatusCommand::IN_PREPARATION;

    public function addProduct(Product $product)
    {
        array_push($this->products, $product);
    }

    public function setStatus(int $status)
    {
        $this->status = $status;
    }

    public function showInvoice()
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->price;
            echo "<div>$product->name : $product->price €</div>";
        }
        echo "<div>=> TOTAL =  $total €</div>";
    }
}

class StatusCommand
{
    const IN_PREPARATION = 0;
    const READY = 1;
    const SERVED = 2;
}
