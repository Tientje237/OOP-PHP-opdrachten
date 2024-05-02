<?php

namespace beord;

class Movie extends Product
{
    private string $quality;
    private float $imdbRating;

    public function __construct(string $name, string $description, string $brand, float $price, string $quality)
    {
        parent::__construct($name, $description, $brand, $price, 'Movie');
        $this->quality = $quality;
        $this->simulateIMDbRating();
    }



    private function simulateIMDbRating(): void
    {
        $this->imdbRating = mt_rand(0, 100) / 10;
    }

    public function productInfo(): string
    {
        $accountDetails = parent::productInfo();
        $accountDetails .= "qualiteit: {$this->quality}<br>";
        return $accountDetails;
    }

    public function getInfo(): array
    {
        return array_merge(parent::getInfo(), [
            'Kwaliteit' => $this->quality,
            'IMDb Rating' => $this->imdbRating
        ]);
    }

}