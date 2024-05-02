<?php

namespace beord;

class Music extends Product
{
    private array $numbers;
    private int $durationInMinutes;
    private float $durationInHours;

    public function __construct(string $name, string $description, string $brand, float $price, string $durationInMinutes, array $numbers)
    {
        parent::__construct($name, $description, $brand, $price, 'Music');
        $this->durationInHours = $this->calculateDurationInHours($durationInMinutes);
        $this->durationInMinutes = $durationInMinutes;
        $this->numbers = $numbers;
    }

    public function addNumber(string $number): string
    {

    }

    public function removeNumber(string $number): string
    {

    }

    private function calculateDurationInHours(int $durationInMinutes): float
    {
        return $durationInMinutes / 60;
    }

    public function productInfo()
    {
        $accountDetails = parent::productInfo();
        $accountDetails .= "nummers: ". implode(', ', $this->numbers)."<br>"."duur in uren: {$this->durationInHours}<br>";
        return $accountDetails;
    }

    public function getInfo(): array
    {
        return array_merge(parent::getInfo(), [
            'Nummers' => $this->numbers,
            'Duur (uren)' => $this->durationInHours
        ]);
    }

}
