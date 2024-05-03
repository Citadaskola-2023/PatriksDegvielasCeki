<?php

use DTO\FuelCheckDTO;

// Data validation
$dto = new FuelCheckDTO($_POST["license_plate"], ...);

$conn = new \DatabaseConnection();
$conn->addFuelReceipt($dto);

//    $licensePlate = ;
//    $dateTime = $_POST["date_time"];
//    $petrolStation = $_POST["petrol_station"];
//    $refuelLiters = $_POST["refuel_liters"];
//    $currency = $_POST["currency"];
//    $fuelPrice = $_POST["fuel_price"];