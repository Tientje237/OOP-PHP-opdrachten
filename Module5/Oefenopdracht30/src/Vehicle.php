<?php

namespace Oefen30;

abstract class Vehicle
{
    public string $brand;
    public string $model;
    public string $year;
    public string $color;


    public function __construct(string $brand, string $model, string $year, string $color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
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

}