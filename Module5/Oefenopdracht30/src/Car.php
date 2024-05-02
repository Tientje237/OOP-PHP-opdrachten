<?php

namespace Oefen30;

class Car extends Vehicle
{
    private int $seats;


    public function __construct(string $brand, string $model, string $year, string $color, int $seats)
    {
        parent::__construct($brand, $model, $year, $color);
        $this->seats = $seats;
    }

    public function getSeats(): string
    {
        return strval($this->seats);
    }

}