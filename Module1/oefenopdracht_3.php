<?php

class Product
{

    public $name = "Een bepaald product";
    public $price;

    public function showSalesPrice()
    {

        return number_format($this->price * 1.09, 2);
    }
}

$chair = new Product();
$chair->name = "Lounge stoel";
$chair->price = 90;

$desk = new Product();
$desk->name = "gaming desk";
$desk->price = 130;

$screen = new Product();
$screen->name = "HP EliteDisplay";
$screen->price = 110;


echo $chair->name. "<br>";
echo $chair->showSalesPrice(). "<br>";

echo $desk->name. "<br>";
echo $desk->showSalesPrice(). "<br>";

echo $screen->name. "<br>";
echo $screen->showSalesPrice(). "<br>";


$chair->name = "Gaming stoel";

echo $chair->name. "<br>";