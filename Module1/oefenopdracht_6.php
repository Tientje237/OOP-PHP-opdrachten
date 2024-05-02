<?php

class Product
{
    public $name;
    public $price;
    public $category;
    public $stock;
    public $currency;
    public $rating;

    public function __construct($name = "een bepaald product", $price, $stock, $currency = "&euro", $category = "dranken", $rating = 3)
    {
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->stock = $stock;
        $this-> currency = $currency;
        $this->category = strtoupper($category);
        $this->rating=$rating;

    }


    public function showSalesPrice()
    {

        return number_format($this->price * 1.09, 2);
    }
}

$chair = new Product("lounge stoel", 40, 2, currency: "$", category: "chairs", rating: 4);
//$chair->setCategory("chairs");
//$chair->price = 90;

$desk = new Product("gaming desk", 130, 4, currency: "$", category: "desks", rating: 2);
//$desk->setCategory("desks");
//$desk->price = 130;

$screen = new Product("HP EliteDisplay", 110, 8, currency: "$", category: "displays", rating: 3);
//$screen->setCategory("displays");
//$screen->price = 110;


echo $chair->name. "<br>";
echo $chair->category. "<br>";
echo $chair->currency;
echo $chair->showSalesPrice(). "<br>";
echo $chair->stock. "<br>";
echo $chair->rating. "<br>";


echo $desk->name. "<br>";
echo $desk->category. "<br>";
echo $desk->currency;
echo $desk->showSalesPrice(). "<br>";
echo $desk->stock. "<br>";
echo $desk->rating. "<br>";

echo $screen->name. "<br>";
echo $screen->category. "<br>";
echo $screen->currency;
echo $screen->showSalesPrice(). "<br>";
echo $screen->stock. "<br>";
echo $screen->rating. "<br>";


$chair->name = "Gaming stoel";

echo $chair->name. "<br>";