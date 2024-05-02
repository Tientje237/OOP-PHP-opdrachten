<?php

namespace beord;

require_once 'Catelog.php';
require_once 'Product.php';
require_once 'Game.php';
require_once 'Music.php';
require_once 'Movie.php';

$list = new Catelog();

$game1 = new Game('F1 23', 'test', 'EA sports', 60, 'Racing, simulater', ['Quad-core processor', '8GB RAM', 'GTX 1080', 'Windows 10']);
$game2 = new Game('Assetto Corsa', 'Realistic racing simulator', 'Kunos Simulazioni', 40, 'Racing, simulator', ['Quad-core processor', '8GB RAM', 'GTX 1080', 'Windows 10']);
$game3 = new Game("Assassin's Creed", "Een spannende actiegame", "Ubisoft", 49.99, "Action", ["Windows", "PlayStation", "Xbox"]);
$song1 = new Music("Unfinished Sympathy", "Iconisch nummer van Massive Attack", "Wild Bunch Records", 1.29, 5, ["Massive Attack"]);
$song2 = new Music("Thriller", "Iconisch album van Michael Jackson", "Epic Records", 9.99, 3, ["Thriller", "Beat It", "Billie Jean"]);
$movie1 = new Movie("The Matrix", "Classic sci-fi movie", "Warner Bros", 15, "Blu-ray");
$movie2 = new Movie("Cars", "Animated comedy-adventure film", "Pixar", 12.99, "DVD");



$list->addProduct($game1);
$list->addProduct($game2);
$list->addProduct($song1);
$list->addProduct($movie1);

echo $game1->printInfo()."<br>";
echo $game2->printInfo()."<br>";
echo $game3->printInfo()."<br>";
echo $song1->printInfo()."<br>";
echo $song2->printInfo()."<br>";
echo $movie1->printInfo()."<br>";
echo $movie2->printInfo()."<br>";

$list->removeProduct($game1);





echo '<br><br>Dit zit in uw catalogus: <br><br>';
foreach ($list->getProducts() as $product)
{
    echo $product->printInfo()."<br>";
}