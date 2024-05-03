<?php

namespace DTO;

class FuelCheckDTO
{
    private $licensePlate;
    private $dateTime;
    private $petrolStation;
    private $fuelType;
    private $refuelLiters;
    private $totalAmount;
    private $mileage;

    public function __construct($licensePlate, $dateTime, $petrolStation, $fuelType, $refuelLiters, $totalAmount, $mileage)
    {
        $this->licensePlate = $licensePlate;
        $this->dateTime = $dateTime;
        $this->petrolStation = $petrolStation;
        $this->fuelType = $fuelType;
        $this->refuelLiters = $refuelLiters;
        $this->totalAmount = $totalAmount;
        $this->mileage = $mileage;
    }

    public function getLicensePlate()
    {
        return $this->licensePlate;
    }

    public function getDateTime()
    {
        return $this->dateTime;
    }

    public function getPetrolStation()
    {
        return $this->petrolStation;
    }

    public function getFuelType()
    {
        return $this->fuelType;
    }

    public function getRefuelLiters()
    {
        return $this->refuelLiters;
    }

    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    public function getMileage()
    {
        return $this->mileage;
    }
}
