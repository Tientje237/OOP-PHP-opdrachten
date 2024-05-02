<?php

require_once 'vendor/autoload.php';

use \Oefen31\Car as Car;
use \Oefen31\Motorcycle as Motorcycle;
use \Oefen31\Truck as Truck;


$car = new Car('Volkswagen', 'Passat', '2021', 'Blue', 'Hybrid', '5');
echo $car->getBrand() . " ";
echo $car->getModel() . " ";
echo $car->getYear() . " ";
echo $car->getColor() . " ";
echo $car->getSeats() . " ";
echo $car->getFueltype() . "<br>";
echo $car->printVehicleInfo() . "<br><br>";
$car->setBrand("Audi");
$car->setModel("RS6");
$car->setYear("2016");
$car->setColor("Black");
$car->setFueltype('Benzine');
echo $car->getBrand() . " ";
echo $car->getModel() . " ";
echo $car->getYear() . " ";
echo $car->getColor() . " ";
echo $car->getSeats() . " ";
echo $car->getFueltype() . "<br>";
echo $car->printVehicleInfo() . "<br><br>";

$motorcycle = new Motorcycle('BMW', 'R 1250 GS Adventure', '2019', 'Grey','Benzine' ,true);
echo $motorcycle->getBrand() . " ";
echo $motorcycle->getModel() . " ";
echo $motorcycle->getYear() . " ";
echo $motorcycle->getColor() . " ";
echo $motorcycle->getOffRoad() . " ";
echo $motorcycle->getFueltype() . "<br>";
echo $motorcycle->printVehicleInfo() . "<br><br>";
$motorcycle->setBrand("Kawasaki");
$motorcycle->setModel("Ninja 650");
$motorcycle->setYear("2021");
$motorcycle->setColor("Black/Green");
$motorcycle->setOffRoad(false);
echo $motorcycle->getBrand() . " ";
echo $motorcycle->getModel() . " ";
echo $motorcycle->getYear() . " ";
echo $motorcycle->getColor() . " ";
echo $motorcycle->getOffRoad() . " ";
echo $motorcycle->getFueltype() . "<br>";
echo $motorcycle->printVehicleInfo() . "<br><br>";

$truck = new truck('DAF', 'XG+ 450', '2023', 'Yellow', 'Diesel', '200000');
echo $truck->getBrand() . " ";
echo $truck->getModel() . " ";
echo $truck->getYear() . " ";
echo $truck->getColor() . " ";
echo $truck->getLoadcapacity() . " ";
echo $truck->getFueltype() . "<br>";
echo $truck->printVehicleInfo() . "<br><br>";
$truck->setBrand("Scania");
$truck->setModel("770S");
$truck->setYear("2022");
$truck->setColor("Black");
echo $truck->getBrand() . " ";
echo $truck->getModel() . " ";
echo $truck->getYear() . " ";
echo $truck->getColor() . " ";
echo $truck->getLoadcapacity() . " ";
echo $truck->getFueltype() . "<br>";
echo $truck->printVehicleInfo() . "<br><br>";
