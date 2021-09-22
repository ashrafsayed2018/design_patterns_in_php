<?php

namespace App\OOP\PHP;



abstract class Car
{
    protected int $speed;

    protected string $numOfDoors;

    protected string $gearBoxSystem;

    protected string $color;

    protected bool $turnedOn = false;
    private CarDashboard $carDashboard;

    public function __construct($speed, $numOfDoors, $gearBoxSystem, $color)
    {
        $this->speed = $speed;
        $this->numOfDoors = $numOfDoors;
        $this->gearBoxSystem = $gearBoxSystem;
        $this->color = $color;

        return $this->color;
    }


    public abstract function move(): int;
    public abstract function turnOn(): bool;
    public abstract function turnOff(): bool;
    public abstract function accelerate(int $speed): bool;
    public abstract function park(): bool;

    public function installDashboard(CarDashboard $carDashboard)
    {
        $this->carDashboard = $carDashboard;
    }

    public function carInfo(): string
    {
        if ($this->carDashboard) {
            return "the speed is {$this->speed} more info .. \n . {$this->carDashboard->readDashborad()}";
        } else {
            return "the speed is {$this->speed}";
        }
    }
}
