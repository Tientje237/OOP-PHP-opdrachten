<?php

namespace Oefen34;

abstract class Car extends Vehicle
{
    private int $seats;


    public function __construct(string $brand, string $model, string $year, string $color, string $fueltype, int $seats)
    {
        parent::__construct($brand, $model, $year, $color, $fueltype);
        $this->seats = $seats;
    }

    public function getSeats(): string
    {
        return strval($this->seats);
    }

    abstract public function calculateMileage(): string;

}