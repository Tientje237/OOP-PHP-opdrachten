<?php

class Game
{

    /**
     * @param string $name
     * @param string $description
     * @param float $price
     * @param array $tag
     */

    public function __construct(private string $name, private string $description, private float $price, private array $tag)
    {
        $this->price = number_format($price);
    }

    public function getGame()
    {
    return 'gamenaam: ' . $this->name . '<br> Omschrijving: ' . $this->description . '<br> Prijs: ' . $this->price . '<br> Tag: ' .implode(', ', $this->tag). '<br><br>';

    }

}