<?php

trait Turbo
{
    public function boost(){
        echo "Turbo started".PHP_EOL;
    }
}

//PROBANDO ENUMS
enum Fuel 
{
    case Gasoline;
    case Diesel;
    case Electric;
}

class Car
{
    use Turbo;

    protected string $brand;
    protected string $licensePlate;
    protected Fuel $typeFuel;
    protected int $maxSpeed;

    
    public function __construct(string $brand, string $licensePlate,Fuel $typeFuel, int $maxSpeed) 
    {
        $this->brand = $brand;
        $this->licensePlate = $licensePlate;
        $this->typeFuel = $typeFuel;
        $this->maxSpeed = $maxSpeed;
    }

    public function __toString(): string
    {
        return $this->brand. ", ". $this->licensePlate. ", ". $this->typeFuel->name. ", ". $this->maxSpeed.PHP_EOL;
    }

    public function __invoke()
    {
        var_dump($this->brand, $this->licensePlate,$this->typeFuel,$this->maxSpeed);
    }
}

?>