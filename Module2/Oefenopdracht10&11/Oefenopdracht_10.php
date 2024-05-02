<?php

class Game
{

    /**
     * @param string $name
     * @param string $description
     * @param float $price
     * @param array $tag
     */

    public function __construct(public string $name, public string $description, public float $price, public array $tag)
    {
        $this->price = number_format($price);
    }

    public function getGame()
    {
    return 'gamenaam: ' . $this->name . '<br> Omschrijving: ' . $this->description . '<br> Prijs: ' . $this->price . '<br> Tag: ' .implode(', ', $this->tag). '<br><br>';

    }

}