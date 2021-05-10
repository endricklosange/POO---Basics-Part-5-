<?php
require_once 'Highway.php';
final class Motorway extends HighWay
{
    private int $nbLane = 4;
    private int $maxSpeed = 130;
    
    public function addVehicle(Vehicle $vehicle)
    {
        if(!$vehicle instanceof Bicycle){
            
            $this->setCurrentVehicle($vehicle);
        }
    }

}