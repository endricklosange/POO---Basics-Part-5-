<?php
require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
  
  private string$typeEnergy;
  public const ALLOWED_ENERGIES =['fuel',
  'electric'];
  
  private int $fuelLevel;

  public function __construct(string $color, int $numberseats, string $typeEnergy)
  {
    $this->$color = $color;
    $this->$numberseats = $numberseats;
    $this->setEnergy($typeEnergy);
  }
  public function setEnergy(string $energy): Car
  {
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    }
    return $this;
  }
  public function switchOn()
  {
    return true;
  }
  public function switchOff()
  {
    return false;
  }
}   


  

