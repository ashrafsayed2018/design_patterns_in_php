<?php

use App\OOP\PHP\Employee;

require_once __DIR__ . "./../vendor/autoload.php";

$ashraf = new Employee('ashraf', 36, 2000);

var_dump($ashraf->getName());
