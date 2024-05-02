<?php

namespace Beoordeling;

require_once 'Person.php';

class Student extends Person
{
    private string $class;
    private bool $hasPaid;

    public function __construct(string $name, int $age, string $class, bool $hasPaid = false)
    {
        parent::__construct($name, $age);
        $this->class = $class;
        $this->hasPaid = $hasPaid;
    }

    public function getInfo(): string
    {
        return "Naam: $this->name, Leeftijd: $this->age, Klas: $this->class, Betaald: " . ($this->hasPaid ? "Ja" : "Nee");
    }

    public function payForTrip(float $amount): void
    {
        if (!$this->hasPaid) {
            $this->hasPaid = true;
            Person::collectPayment($amount);
        }
    }
}
