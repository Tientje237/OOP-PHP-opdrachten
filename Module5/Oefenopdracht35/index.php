<?php

require_once 'vendor/autoload.php';

use \Oefen35\Vehicle as Vehicle;
use \Oefen35\GasolineCar as GasCar;
use \Oefen35\ElectricCar as ElecCar;
use \Oefen35\HydrogenCar as HydroCar;
use \Oefen35\Motorcycle as Motorcycle;
use \Oefen35\Truck as Truck;
use \Oefen35\VehicleList;

$vehicleList = new VehicleList();

$car = new GasCar('Volkswagen', 'Passat', '2021', 'Blue', 'Diesel', '5', '2.0', '5.1');
$vehicleList->addVehicle($car);
$Ecar = new ElecCar('Tesla', 'Model 3', '2021', 'White', '5', '78.1');
$vehicleList->addVehicle($Ecar);
$Hcar = new HydroCar('Toyota', 'Mirai', '2021', 'Blue', '5', '5.6');
$vehicleList->addVehicle($Hcar);
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
$vehicleList->addVehicle($motorcycle);
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

$truck = new Truck('DAF', 'XG+ 450', '2023', 'Yellow', 'Diesel', '200000');
$vehicleList->addVehicle($truck);
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


$vehicles = $vehicleList->getAllVehicles();
foreach ($vehicles as $vehicle) {
    echo $vehicle . "<br>";
}
echo "<br><br>";


$car2 = new GasCar("Porsche", "911 GT3 RS", 2021, "Shark Blue", "Benzine", 2, 4.0, 12.0);
$vehicleList->addVehicle($car2);
$motorcycle2 = new Motorcycle("Honda", "CRF450", 2021, "Red", "Benzine", true);
$vehicleList->addVehicle($motorcycle2);
$truck2 = new Truck("Volvo", "FH16", 2022, "White", "Diesel", "20000");
$vehicleList->addVehicle($truck2);

$vehicles = $vehicleList->getAllVehicles();
foreach ($vehicles as $vehicle) {
    echo $vehicle . "<br>";
}
