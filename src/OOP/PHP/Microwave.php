<?php

namespace App\OOP\PHP;

class Microwave
{
    private int $temp;
    private string $program;
    private int $time;
    private bool $status = false;

    public function __construct(int $temp, string $program, int $time)
    {
        $this->temp = $temp;
        $this->program = $program;
        $this->time = $time;
    }


    public function turnOn(): bool
    {

        $this->status = true;
        return $this->status;
    }

    public function turnOff(): bool
    {

        $this->status = false;
        return $this->status;
    }
    public function defreez(): string
    {
        $this->turnOnMicrowaveHeatingSystem();
        $this->loadingDefreezingProgram();
        $this->setTime();
        return "i am defreezing the food at {$this->temp} degree using program {$this->program}";
    }

    private function turnOnMicrowaveHeatingSystem(): string
    {
        return "starting on heating system";
    }

    private function loadingDefreezingProgram(): string
    {
        return "loading defreezing program {$this->program}";
    }

    private function setTime(): string
    {
        return "setting time to {$this->time} seconds";
    }
}
