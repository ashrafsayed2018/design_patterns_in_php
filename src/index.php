<?php

namespace App;

use App\OOP\PHP\Bmw;
use App\OOP\PHP\CarDashboard;
use App\OOP\PHP\Merceedes;
use App\OOP\PHP\Orders;

require_once __DIR__ . "/../vendor/autoload.php";

$bmw = new Bmw(120, '4', 'FRONT', 'BLACK');

$order1 = new Orders('cairo', 'alex', 120);
$order2 = new Orders('sohage', 'aswan', 300);
$carDashboard = new CarDashboard();
$bmw->installDashboard($carDashboard);
print($bmw->carInfo());
