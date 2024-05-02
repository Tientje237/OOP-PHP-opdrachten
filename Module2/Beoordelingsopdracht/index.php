<?php

require_once 'Book.php';
require_once 'BookCatelog.php';

$catelog = new BookCatelog();

$book1 = new Book('Leren programmeren in C#', 'Mchiel Rotteveel', '45');
$book2 = new Book('Android en Kotlin', 'Krijn Hoogendorp', '44');
$book3 = new Book('Leren programmeren, meten en sturen met arduino', 'Jacco de Jong', '27.95');

$catelog->addBook($book1);
$catelog->addBook($book2);
$catelog->addBook($book3);
echo $book1->getTitle();

echo '<ul>';
    echo '<li>' . 'Boek: ' . $book1->getTitle() . ' is toegevoegd' . '</li>';
    echo '<li>' . 'Boek: ' . $book2->getTitle() . ' is toegevoegd' . '</li>';
    echo '<li>' . 'Boek: ' . $book3->getTitle() . ' is toegevoegd' . '</li>';
echo '</ul>';


echo '<table style =" border: 1px solid;">'. '<br>' . 'Lijst van boeken is nu:';
foreach ($catelog->getCatelog() as $book)
{
    echo $book->getBook();
}
echo '</table>' . 'De gemiddelde prijs is: ' . $catelog->getAvgPrice() . '<br><br>';


echo  $catelog->removeBook($book2). "<br>";

echo '<table style =" border: 1px solid;">' . 'Lijst van boeken is nu:';
foreach ($catelog->getCatelog() as $book)
{
    echo $book->getBook();
}
echo '</table>' . 'De gemiddelde prijs is: ' . $catelog->getAvgPrice();
