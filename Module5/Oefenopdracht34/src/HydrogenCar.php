<?php

namespace Oefen34;

Class HydrogenCar extends Car
{
    public string $fuelCellSize;

    public function __construct(string $brand, string $model, string $year, string $color, int $seats, string $fuelCellSize)
    {
        parent::__construct($brand, $model, $year, $color, 'Hydrogen', $seats);
        $this->fuelCellSize = $fuelCellSize;
    }

    public function printVehicleInfo(): string
    {
        $vehicleInfo = parent::printVehicleInfo();
        $vehicleInfo .= $this->fuelCellSize . "KG " . $this->calculateMileage() . "KM ";
        return $vehicleInfo;
    }

    public function calculateMileage(): string
    {

        return number_format($this->fuelCellSize . 115, 2);
    }

}

