<?php

require_once 'vendor/autoload.php';

use Beoordeling\Student;
use Beoordeling\Teacher;
use Beoordeling\SchooltripList;


$student1 = new Student("Bryan", 16, "Klas A");
$student2 = new Student("Jack", 15, "Klas A");
$student3 = new Student("Jan", 17, "Klas B");
$student4 = new Student("Mark", 16, "Klas B");
$student5 = new Student("Lars", 15, "Klas C");
$student6 = new Student("Tim", 17, "Klas C");

$student1->payForTrip(50);
$student3->payForTrip(50);
$student5->payForTrip(50);


$teacher1 = new Teacher("Mnr. van Schaik", 30);
$teacher2 = new Teacher("Mnr. Koningstein", 45);


$schooltripList = new SchooltripList();
$schooltripList->addStudent($student1);
$schooltripList->addStudent($student2);
$schooltripList->addStudent($student3);
$schooltripList->addStudent($student4);
$schooltripList->addStudent($student5);
$schooltripList->addStudent($student6);
$schooltripList->addTeacher($teacher1);
$schooltripList->addTeacher($teacher2);


echo "Schooluitje naar Walibi:<br>";
$schooltripList->generateTripList();