<?php

namespace App\OOP\PHP;

class Employee
{
    private string $name;
    private int $age;
    private Salary $salary;



    public function __construct(string $name, int $age, Salary $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Get the value of Salary
     */
    public function getSalary(): Salary
    {
        return $this->salary;
    }
}
