<?php

namespace App\OOP\PHP;

class OrganizationSalary extends Salary
{

    protected float $organizationTax;


    public function __construct(float $salary, float $tax, int $absent, int $overtime, int $overtimeRate, int $absentRate, float $organizationTax)
    {

        parent::__construct($salary, $tax, $absent, $overtime, $overtimeRate, $absentRate);
        $this->organizationTax = $organizationTax;
    }

    public function calculateSalary(): float
    {
        return $this->salary - ($this->salary * $this->tax) - ($this->salary * $this->organizationTax);
    }
}
