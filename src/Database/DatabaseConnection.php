<?php

namespace Database;

use DTO\FuelCheckDTO ;

class DatabaseConnection
{
    private $host;
    private $username;
    private $password;
    private $database;

    public function __construct($host, $username, $password, $database)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect()
    {
        $conn = new mysqli($this->host, $this->username, $this->password, $this->database); // iesaku izmnatot PDO
        // prompt: take this code and refactor to PDO (iepeisto visu sito klasi)

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }

    public function addFuelReceipt(FuelCheckDTO $receipt)
    {

        // IMPORTANT!!! PREVENT SQL INJECTION; // pdo prepare + execute
        $licensePlate = $receipt->getLicensePlate();
        $dateTime = $receipt->getDateTime();
        $petrolStation = $this->connection->real_escape_string($receipt->getPetrolStation());
        $fuelType = $this->connection->real_escape_string($receipt->getFuelType());
        $refuelLiters = $receipt->getRefuelLiters();
        $totalAmount = $receipt->getTotalAmount();
        $mileage = $receipt->getMileage();

        $sql = "INSERT INTO fuel_receipts (license_plate, date_time, petrol_station, fuel_type, refuel_liters, total_amount, mileage)
                VALUES ('$licensePlate', '$dateTime', '$petrolStation', '$fuelType', '$refuelLiters', '$totalAmount', '$mileage')";

        if ($this->connection->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}

// CREATE TABLE , connect with DB
// prompt: I have this compose.yaml file, how can I create database tables, how can i see phpmyadmin UI