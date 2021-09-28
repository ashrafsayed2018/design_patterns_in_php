<?php

namespace App\OOP\PHP\relationship;

use App\OOP\PHP\Relationship\Printer\Printer;
use App\OOP\PHP\Relationship\Student;

abstract class Teacher
{
    protected string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }


    public function sayWelcome(Printer $printer): string
    {

        $printer->setName($this->name);
        return $printer->printToScreen();
    }

    abstract public function assingAHomeWork(): string;

    public function evaluteHomework(Student $student): string
    {
        if ($student->getScores() > 50) {
            return "success";
        } else {
            return "failed";
        }
    }
}
