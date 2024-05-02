<?php

namespace Oefen33;

abstract class Vehicle
{
    public string $brand;
    public string $model;
    public string $year;
    public string $color;
    public string $fueltype;
    public static $allVehicles = [];


    public function __construct(string $brand, string $model, string $year, string $color, string $fueltype)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
        $this->fueltype = $fueltype;
        self::$allVehicles[] = $this;
    }

    public function printVehicleInfo(): string
    {
        return $this->brand . " " . $this->model . " " . $this->year . " " . $this->color . " " . $this->fueltype . " ";
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getYear(): string
    {
        return $this->year;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getFueltype(): string
    {
        return $this->fueltype;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function setYear(string $year): void
    {
        $this->year = $year;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function setFueltype(string $fueltype): void
    {
        $this->fueltype = $fueltype;
    }

}