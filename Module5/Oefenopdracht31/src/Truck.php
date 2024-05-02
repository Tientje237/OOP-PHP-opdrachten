<?php

namespace Oefen31;

class Truck extends Vehicle
{
    private int $loadcapacity;

    public function __construct(string $brand, string $model, string $year, string $color, string $fueltype, int $loadcapacity)
    {
        parent::__construct($brand, $model, $year, $color, $fueltype);
        $this->loadcapacity = $loadcapacity;
    }

    public function getLoadcapacity(): string
    {
        return strval($this->loadcapacity);
    }

    public function printVehicleInfo(): string
    {
        return $this->brand . " " . $this->model . " " . $this->year . " " . $this->color . " " . $this->fueltype . " " . $this->loadcapacity . " ";
    }

}