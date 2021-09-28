<?php

namespace App\OOP\PHP\Relationship\Printer;

class HTMLPrinter extends Printer
{

    public function printToScreen(): string
    {
        return "<h1> this is html format of string:  $this->stringToBePrinted </h1>";
    }
}
