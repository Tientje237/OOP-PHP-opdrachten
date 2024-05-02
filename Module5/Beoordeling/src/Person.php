<?php

namespace Beoordeling;

abstract class Person
{
    protected string $name;
    protected int $age;
    public static float $totalCollectedAmount = 0;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    abstract public function getInfo(): string;

    public static function collectPayment(float $amount): void
    {
        self::$totalCollectedAmount += $amount;
    }
}
