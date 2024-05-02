<?php

namespace Oefen30;

class Truck extends Vehicle
{
    private int $loadcapacity;

    public function __construct(string $brand, string $model, string $year, string $color, int $loadcapacity)
    {
        parent::__construct($brand, $model, $year, $color);
        $this->loadcapacity = $loadcapacity;
    }

    public function getLoadcapacity(): string
    {
        return strval($this->loadcapacity);
    }

}