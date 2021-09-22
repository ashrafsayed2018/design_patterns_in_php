<?php

namespace App\OOP\PHP;



class Bmw extends Car
{

    public function move(): int
    {
        return $this->speed;
    }

    public function turnOff(): bool
    {
        return $this->turnedOn;
    }

    public function turnOn(): bool
    {
        $this->turnedOn =  true;
        return $this->turnedOn;
    }

    public function accelerate(int $speed): bool
    {

        $this->speed = $speed;
        return true;
    }

    public function park(): bool
    {
        return true;
    }
}
