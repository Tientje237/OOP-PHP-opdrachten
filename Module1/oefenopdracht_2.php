<?php

class Product
{
//    public $name = "Een bepaald spel";
    public $name = "Een bepaald product";
}

//$game1 = new Product();
//$game1 ->name = "F1 23";
//
//$game2 = new Product();
//$game2 ->name = "GTA V";
//
//$game3 = new Product();
//
//var_dump($game1);
//var_dump($game2);
//
//echo $game1->name. "<br>";
//echo $game2->name. "<br>";
//echo $game3->name. "<br>";
//
//$game1->name = "F1 22";
//
//echo $game1->name. "<br>";

$chair = new Product();
$chair->name = "Lounge stoel";

$desk = new Product();
$desk->name = "gaming desk";

$screen = new Product();
$screen->name = "HP EliteDisplay";



echo $chair->name. "<br>";
echo $desk->name. "<br>";
echo $screen->name. "<br>";


$chair->name = "Gaming stoel";

echo $chair->name. "<br>";