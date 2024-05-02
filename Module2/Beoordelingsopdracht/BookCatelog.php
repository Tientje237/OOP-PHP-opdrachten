<?php

class BookCatelog
{
    private array $books = [];

    public function addBook(Book $books)
    {
        $this->books[] = $books;
        return "Boek " . $books->getTitle();
    }

    public function removeBook(Book $book): string
    {
        $key = array_search($book, $this->books);
        if ($key !== false) {
            unset($this->books[$key]);
            return "<li>Boek: ".$book->getTitle()." is verwijderd</li>";
        }
        return "<li>Boek: ".$book->getTitle()." is niet gevonden</li>";
    }

    public function getCatelog()
    {
        return $this->books;
    }

    public function getAvgPrice() :float
    {
        $totalPrice = 0;
        $count = count($this->books);
        foreach ($this->books as $book){
            $totalPrice += $book->getPrice();
        }
        $average = $totalPrice / $count;
        return number_format($average, 2);
    }


}