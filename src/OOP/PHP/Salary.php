<?php

namespace App\OOP\PHP;

class Salary
{
    protected float $salary;
    protected float $tax;
    protected int $absent;
    protected int $overtime;
    protected int $overtimeRate;
    protected int $absentRate;

    public function __construct(float $salary, float $tax, int $absent, int $overtime, int $overtimeRate, int $absentRate)
    {
        $this->salary = $salary;
        $this->tax = $tax;
        $this->absent = $absent;
        $this->overtime = $overtime;
        $this->overtimeRate = $overtimeRate;
        $this->absentRate = $absentRate;
    }

    public function calculateSalary(): float
    {
        return $this->salary - ($this->salary * $this->tax);
    }
}
