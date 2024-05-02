<?php

namespace Beoordeling;



class Teacher extends Person
{
    private static array $teachers = [];

    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age);
        self::$teachers[] = $this;
    }

    public function getInfo(): string
    {
        return "Naam: $this->name, Leeftijd: $this->age";
    }

    public static function getAvailableTeacher()
    {
        return array_shift(self::$teachers);
    }
}
