<?php

namespace Services\Actor;

class StudentService
{
    protected $name;
    protected $ID;

    public function __construct(int $ID, string $name)
    {
        $this->ID = $ID;
        $this->name = $name;
    }

    public function getStudentID() {
        return $this->ID;
    }

    public function getStudentName() {
        return $this->name;
    }

    public function setStudentName($name) {
        $this->name = $name;
    }
}