<?php

class Product
{
    public $name = "Een bepaald product";
    public $price;
    public $category;

    public function setName($name)
    {
        $this->name = strtolower($name);

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

$chair = new Product();
$chair->setName("lounge stoel");
$chair->setCategory("chairs");
$chair->price = 90;

$desk = new Product();
$desk->setName("gaming desk");
$desk->setCategory("desks");
$desk->price = 130;

$screen = new Product();
$screen->setName("HP EliteDisplay");
$screen->setCategory("displays");
$screen->price = 110;


echo $chair->name. "<br>";
echo $chair->category. "<br>";
echo $chair->showSalesPrice(). "<br>";

echo $desk->name. "<br>";
echo $desk->category. "<br>";
echo $desk->showSalesPrice(). "<br>";

echo $screen->name. "<br>";
echo $screen->category. "<br>";
echo $screen->showSalesPrice(). "<br>";


$chair->name = "Gaming stoel";

echo $chair->name. "<br>";