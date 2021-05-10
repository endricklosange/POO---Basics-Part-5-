<?php
require_once 'Vehicle.php';
class Truck extends Vehicle
{
    private int $capacity;
    private int $load = 0;
    private string$typeEnergy;
    
    public function __construct(int $capacity, string $color, int $numberSeats, string $typeEnergy)
    {
        $this->capcity = $capacity;
        $this->color = $color;
        $this->numberSeats = $numberSeats;
        $this->typeEnergy = $typeEnergy;

    }
    public function setLoad(){
        if($this->load === 100){
            return ' full';
        }
        else{
            return ' in filling';
        }
    }


}
