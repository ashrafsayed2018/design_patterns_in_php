<?php

namespace App;

use App\OOP\PHP\Bmw;
use App\OOP\PHP\Orders;
use App\OOP\PHP\OrganizationSalary;
use App\OOP\PHP\Employee;
use App\OOP\PHP\Merceedes;
use App\OOP\PHP\TCPClient;
use App\OOP\PHP\CarDashboard;

require_once __DIR__ . "/../vendor/autoload.php";

$ashraf = new Employee('ashraf sayed', 36, new OrganizationSalary(4500, .2, 2, 30, .75, 20, .1));

var_dump($ashraf->getSalary()->calculateSalary());
