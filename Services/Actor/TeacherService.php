<?php

namespace Services\Actor;

use Services\Classroom\ClassroomService as Classroom;

class TeacherService
{
    protected $id;
    protected $name;
    protected $teached_classroom = [];

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function setTeacherName($name) {
        $this->name = $name;
    }

    public function addTeachedClassroom(Classroom $classroom) {
        $this->teached_classroom[] = $classroom;
    }

    public function getTeacherID() {
        return $this->id;
    }

    public function getTeacherName() {
        return $this->name;
    }

    public function getTeachedClassroom() {
        return $this->teached_classroom;
    }

}