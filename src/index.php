<?php

namespace App;

use App\OOP\PHP\Relationship\MathTeacher;
use App\OOP\PHP\Relationship\Printer\PlaintTextPrinter;
use App\OOP\PHP\Relationship\ScienceTeacher;
use App\OOP\PHP\Relationship\Student;
use App\OOP\PHP\Relationship\Teacher;

require_once __DIR__ . "/../vendor/autoload.php";
$science = new ScienceTeacher('mohammed ali');
$math = new MathTeacher('ibrahim mansoure');
$ahmed = new Student('ahmed ali');
$ahmed->assingTempTeacher($math);

var_dump($math->evaluteHomework($ahmed));
