<?php

namespace App\OOP\PHP\Relationship\Printer;



class PlaintTextPrinter extends Printer
{

    public function printToScreen(): string
    {
        return " this is html format of string:  $this->stringToBePrinted";
    }
}
