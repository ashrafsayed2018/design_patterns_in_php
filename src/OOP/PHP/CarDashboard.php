<?php

namespace App\OOP\PHP;

class CarDashboard
{
    protected int $oilLevel;
    protected int $fuelLevel;
    protected int $airPresure;

    /**
     * Get the value of oilLevel
     */
    private function getOilLevel(): int
    {
        return $this->oilLevel = 10;
    }



    /**
     * Get the value of fuelLevel
     */
    private function getFuelLevel(): int
    {
        return $this->fuelLevel = 20;
    }

    /**
     * Get the value of airPresure
     */
    private function getAirPresure(): int
    {
        return $this->airPresure = 30;
    }

    public function readDashborad(): string
    {
        return "showing the following analysis :\n
            fuel: {$this->getFuelLevel()} \n
            oil : {$this->getOilLevel()} \n
            air : {$this->getAirPresure()}";
    }
}
