<?php

namespace Beoordeling;



class Schooltrip
{
    private string $destination;
    private array $schooltripLists = [];

    public function __construct(string $destination)
    {
        $this->destination = $destination;
    }

    public function addSchooltripList(SchooltripList $schooltripList): void
    {
        $this->schooltripLists[] = $schooltripList;
    }
}
