<?php 
require_once 'Highway.php';
final class Pedestrianway extends HighWay
{
    private int $nbLane = 1;
    private int $maxSpeed = 10;
    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Bicycle ){
            
            $this->setCurrentVehicle($vehicle);
        }
    }
}