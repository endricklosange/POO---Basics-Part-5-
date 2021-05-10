<?php

abstract class Highway
{
    private array $currentVehicle = [];
    private int $nbLane;
    private int $maxSpeed;
    
    public function getCurrentVehicle()
    {
       return $this->currentVehicle; 
    }
    public function setCurrentVehicle(Vehicle $vehicle)
    {
        $this->currentVehicle[] = $vehicle; 
    }
    public function getnbLane()
    {
       return $this->nbLane; 
    }
    public function setnbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane; 
    }
    public function getmaxSpeed()
    {
       return $this->maxSpeed; 
    }
    public function setmaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed; 
    }
    abstract public function addVehicle(Vehicle $vehicle);
    
}

