<?php
require_once 'LightableInterface.php';
class Vehicle
{
   protected int $numberWheels;
  
   protected  int $currentSpeed;
    
   protected  string $color;
    
   protected  int $numberSeats;

    public function __construct(string $color, int $numberSeats)
    {
        $this->color = $color;
        $this->numberset = $numberSeats;
    }
    public function start()
  {
    $this->currentSpeed = 0;
    $cont = "";
   while ($this->currentSpeed < 39) 
   {
    $this->currentSpeed++;
    $cont .= '  '.$this->currentSpeed . 'km/h';
   }
    return $cont;
   }
    public function forward()
    {
      return '20 km';
    }  
    public function brake(): string
    {
      $cont = "";
      while($this->currentSpeed > 0)
      {
        $this->currentSpeed--;
        $cont .= ' '.$this->currentSpeed . 'km/h';
      }
      return $cont . " Stop";
    }
    public function setCurrentSpeed(int $currentSpeed)
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }
    public function getCurrentspeed()
    {
        return $this->currentSpeed;
    }
    public function getColor(){
        return $this->color;
    }
    public function setColor(string $color){
        $this->color =$color;
    }
    public function getNbSeats(): int
    {
        return $this->numberbSeats;
    }

    public function setNbSeats(int $numberSeats): void
    {
        $this->numberbSeats = $numberSeats;
    }

    public function getNbWheels(): int
    {
        return $this->numberWheels;
    }

    public function setNbWheels(int $numberWheels): void
    {
        $this->numberWheels = $numberWheels;
    }

}
    
