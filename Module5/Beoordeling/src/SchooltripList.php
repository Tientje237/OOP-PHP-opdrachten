<?php

namespace Beoordeling;


class SchooltripList
{
    private array $students = [];
    private array $teachers = [];

    public function addStudent(Student $student): void
    {
        $this->students[] = $student;
    }

    public function addTeacher(Teacher $teacher): void
    {
        $this->teachers[] = $teacher;
    }

    public function generateTripList(): void
    {
        $groupedStudents = array_chunk($this->students, 5);
        $numGroups = count($groupedStudents);

        for ($i = 0; $i < $numGroups; $i++) {
            $group = new Group("Groep " . ($i + 1));
            $teacher = Teacher::getAvailableTeacher();
            if ($teacher === null) {
                echo "Niet genoeg leraren voor alle groepen.";
                return;
            }
            $this->addTeacher($teacher);

            echo "Schooluitje groep: " . $group->name . "<br>";
            foreach ($groupedStudents[$i] as $student) {
                $this->addStudent($student);
                echo $student->getInfo() . "<br>";
            }
            echo "Docent voor groep: " . $teacher->getInfo() . "<br><br>";
        }

        echo "Totaal ingezameld bedrag: $" . Person::$totalCollectedAmount . "<br>";
    }
}
