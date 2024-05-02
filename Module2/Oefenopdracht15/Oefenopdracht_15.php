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
        $this->price = number_format($price, 2);
    }

    private function getInkoopprijs()
    {
        return number_format($this->price * 0.69, 2);
    }

    public function getGame()
    {
    return 'gamenaam: ' . $this->name . '<br> Omschrijving: ' . $this->description . '<br> Prijs: ' . $this->price . '<br> Inkoopprijs: '. $this->getInkoopprijs() . '<br> Tag: ' .implode(', ', $this->tag). '<br><br>';

    }



}