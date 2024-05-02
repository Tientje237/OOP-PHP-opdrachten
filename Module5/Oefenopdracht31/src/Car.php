<?php

namespace Oefen31;

class Car extends Vehicle
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

    public function printVehicleInfo(): string
    {
        return $this->brand . " " . $this->model . " " . $this->year . " " . $this->color . " " . $this->fueltype . " " . $this->seats . " ";
    }

}