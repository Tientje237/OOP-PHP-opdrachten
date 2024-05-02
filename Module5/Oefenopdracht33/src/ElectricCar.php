<?php

namespace Oefen33;

Class ElectricCar extends Car
{
    public string $batteryCapacity;

    public function __construct(string $brand, string $model, string $year, string $color, int $seats, string $batteryCapacity)
    {
        parent::__construct($brand, $model, $year, $color, 'Electric', $seats);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function printVehicleInfo(): string
    {
        $vehicleInfo = parent::printVehicleInfo();
        $vehicleInfo .= $this->batteryCapacity . "KWh " . $this->calculateMileage() . "KM ";
        return $vehicleInfo;
    }

    public function calculateMileage(): string
    {
        return number_format( $this->batteryCapacity * 5, 2);
    }

}