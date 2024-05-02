<?php

class Product
{
    public $name;
    public $price;
    public $category;
    public $stock;

    public function __construct($name, $price, $stock)
    {
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->stock = $stock;

    }

    public function setCategory($category)
    {
        $this->category = strtoupper($category);

    }
    public function showSalesPrice()
    {

        return number_format($this->price * 1.09, 2);
    }
}

$chair = new Product("lounge stoel", 40, 2);
$chair->setCategory("chairs");
//$chair->price = 90;

$desk = new Product("gaming desk", 130, 4);
$desk->setCategory("desks");
//$desk->price = 130;

$screen = new Product("HP EliteDisplay", 110, 8);
$screen->setCategory("displays");
//$screen->price = 110;


echo $chair->name. "<br>";
echo $chair->category. "<br>";
echo $chair->showSalesPrice(). "<br>";
echo $chair->stock. "<br>";

echo $desk->name. "<br>";
echo $desk->category. "<br>";
echo $desk->showSalesPrice(). "<br>";
echo $desk->stock. "<br>";

echo $screen->name. "<br>";
echo $screen->category. "<br>";
echo $screen->showSalesPrice(). "<br>";
echo $screen->stock. "<br>";


$chair->name = "Gaming stoel";

echo $chair->name. "<br>";