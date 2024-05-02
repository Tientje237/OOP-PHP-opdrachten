<?php

namespace beord;

class Game extends Product
{
    private string $genre;

    private array $requirements;

    private string $recommendedAge;

    public function __construct(string $name, string $description, string $brand, float $price, string $genre, array $requirements)
    {
        parent::__construct($name, $description, $brand, $price, 'Game');
        $this->genre = $genre;
        $this->requirements = $requirements;
        $this->calculateRecommendedAge();
    }

    public function addRequirement(): string
    {

    }

    public function removeRequirement(): string
    {

    }

    private function calculateRecommendedAge(): void
    {
        switch ($this->genre) {
            case 'Action':
                $this->recommendedAge = '18+';
                break;
            case 'Adventure':
                $this->recommendedAge = '12+';
                break;
            default:
                $this->recommendedAge = '0+';
        }
    }

    public function productInfo(): string
    {
        $accountDetails = parent::productInfo();
        $accountDetails .= "Genre: {$this->genre}<br>"."requirements: ". implode(', ', $this->requirements)."<br>";
        return $accountDetails;
    }

    public function getInfo(): array
    {
        $test = implode(', ', $this->requirements);
        return array_merge(parent::getInfo(), [
            'Genre' => $this->genre,
            'Aanbevolen Leeftijd' => $this->recommendedAge,
            'Requirements' => $test
        ]);
    }




}
