<?php

namespace Oefen35;

class VehicleList {
    private array $vehicles = [];

    public function addVehicle(ElectricCar|HydrogenCar|GasolineCar|Motorcycle|Truck $vehicle): void
    {
        $this->vehicles[] = $vehicle;
    }

    public function getAllVehicles()
    {
        return $this->vehicles;
    }
}
