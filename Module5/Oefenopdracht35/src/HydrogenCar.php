<?php

namespace Oefen35;

Class HydrogenCar extends Car
{
    Private string $fuelCellSize;

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

        return number_format( 115 . $this->fuelCellSize, 2);
    }

}

