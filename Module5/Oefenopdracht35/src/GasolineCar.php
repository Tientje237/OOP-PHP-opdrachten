<?php

namespace Oefen35;

Class GasolineCar extends Car
{
    Private string $engineSize;
    Private string $consumption;

    public function __construct(string $brand, string $model, string $year, string $color, string $fueltype, int $seats, string $engineSize, string $consumption)
    {
        parent::__construct($brand, $model, $year, $color, $fueltype, $seats);
        $this->engineSize = $engineSize;
        $this->consumption = $consumption;
    }

    public function printVehicleInfo(): string
    {
        $vehicleInfo = parent::printVehicleInfo();
        $vehicleInfo .= $this->engineSize . "L " . $this->calculateMileage() . "KM " . $this->consumption . "km/l ";
        return $vehicleInfo;
    }

    public function setEngineSize(string $engineSize): void
    {
        $this->engineSize = $engineSize;
    }

    public function setConsumption(string $consumption): void
    {
        $this->consumption = $consumption;
    }

    public function calculateMileage(): string
    {
        return number_format(100 / (int)$this->consumption, 2);
    }


}