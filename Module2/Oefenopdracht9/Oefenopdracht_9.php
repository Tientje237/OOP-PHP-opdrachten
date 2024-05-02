<?php

class Game
{
    public $name;
    public $description;
    public $price;
    public $tag;

    /**
     * @param string $name
     * @param string $description
     * @param string $price
     * @param string $tag
     */

    public function __construct($name, $description, $price, $tag)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = number_format($price);
        $this->tag = $tag;
    }

    public function getGame()
    {
    return 'gamenaam: ' . $this->name . '<br> Omschrijving: ' . $this->description . '<br> Prijs: ' . $this->price . '<br> Tag: ' .implode(', ', $this->tag). '<br><br>';

    }

}