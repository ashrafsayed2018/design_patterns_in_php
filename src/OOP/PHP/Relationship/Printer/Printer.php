<?php

namespace App\OOP\PHP\Relationship\Printer;

abstract class Printer
{

    protected string $stringToBePrinted;

    public function setName($stringToBePrinted)
    {
        $this->stringToBePrinted = $stringToBePrinted;
    }


    abstract public function printToScreen(): string;
}
