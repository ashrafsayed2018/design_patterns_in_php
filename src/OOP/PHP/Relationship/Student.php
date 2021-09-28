<?php

namespace App\OOP\PHP\Relationship;

class Student
{
    protected string $name;

    private int $scores = 50;

    private string $homeWork;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function assingTempTeacher(Teacher $teacher)
    {
        $this->homeWork =  $teacher->assingAHomeWork();
    }

    public function getScores()
    {
        return $this->scores;
    }
}
