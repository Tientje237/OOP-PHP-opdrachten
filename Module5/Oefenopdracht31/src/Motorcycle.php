<?php

namespace Oefen31;

class Motorcycle extends Vehicle
{
    private bool $offRoad;

    public function __construct(string $brand, string $model, string $year, string $color, string $fueltype, bool $offRoad)
    {
        parent::__construct($brand, $model, $year, $color, $fueltype);
        $this->offRoad = $offRoad;
    }

    public function setOffRoad(bool $offRoad): void
    {
        $this->offRoad = $offRoad;
    }

    public function getOffRoad(): string
    {
        return var_export($this->offRoad, true);
    }

    public function printVehicleInfo(): string
    {
        return $this->brand . " " . $this->model . " " . $this->year . " " . $this->color . " " . $this->fueltype . " " . var_export($this->offRoad, true) . " ";
    }



}