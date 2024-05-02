<?php



class Book
{

    private string $title;
    private string $author;
    private float $price;

    public function __construct(string $title, string $author, float $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->price = number_format($this->price, 2);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getBook()
    {
    return '<tr>' . '<th>Titel</th>' . '<th>Autheur</th>' . '<th>Prijs</th>' . '</tr>' .
            '<tr>' . '<td>' . $this->title . '</td>' . '<td>' . $this->author . '</td>' . '<td>' . $this->price . '</td>' . '</tr>';
    }

}