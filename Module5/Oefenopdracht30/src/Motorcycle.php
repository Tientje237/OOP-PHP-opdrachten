<?php

namespace Oefen30;

class Motorcycle extends Vehicle
{
    private bool $offRoad;

    public function __construct(string $brand, string $model, string $year, string $color, bool $offRoad)
    {
        parent::__construct($brand, $model, $year, $color);
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



}