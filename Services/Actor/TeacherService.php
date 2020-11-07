<?php

namespace Services\Actor;

class TeacherService
{
    protected $name;
    protected $ID;

    public function __construct(int $ID, string $name)
    {
        $this->ID = $ID;
        $this->name = $name;
    }

    public function getTeacherID() {
        return $this->ID;
    }

    public function getTeacherName() {
        return $this->name;
    }

    public function setTeacherName($name) {
        $this->name = $name;
    }
}