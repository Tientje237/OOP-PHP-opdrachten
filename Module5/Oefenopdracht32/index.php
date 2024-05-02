<?php

require_once 'vendor/autoload.php';

use \Oefen32\GasolineCar as GasCar;
use \Oefen32\ElectricCar as ElecCar;
use \Oefen32\HydrogenCar as HydroCar;
use \Oefen32\Motorcycle as Motorcycle;
use \Oefen32\Truck as Truck;


$car = new GasCar('Volkswagen', 'Passat', '2021', 'Blue', 'Diesel', '5', '2.0', '5.1');
$Ecar = new ElecCar('Tesla', 'Model 3', '2021', 'White', '5', '78.1');
$Hcar = new HydroCar('Toyota', 'Mirai', '2021', 'Blue', '5', '5.6');
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
$car->setFueltype('Petrol');
$car->setEngineSize('4.0');
$car->setConsumption('9.6');
echo $car->getBrand() . " ";
echo $car->getModel() . " ";
echo $car->getYear() . " ";
echo $car->getColor() . " ";
echo $car->getSeats() . " ";
echo $car->getFueltype() . "<br>";
echo $car->printVehicleInfo() . "<br><br>";
echo $Ecar->printVehicleInfo() . "<br><br>";
echo $Hcar->printVehicleInfo() . "<br><br>";

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
