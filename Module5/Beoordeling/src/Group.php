<?php

namespace Beoordeling;

class Group
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
