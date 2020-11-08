<?php

namespace Services\Actor;

use Services\Classroom\ClassroomService as Classroom;

class StudentService
{
    protected $id;
    protected $name;
    protected $joined_classroom = [];

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function setStudentName($name) {
        $this->name = $name;
    }

    public function addJoinedClassroom(Classroom $classroom) {
        $this->joined_classroom[] = $classroom;
    }

    public function getStudentID() {
        return $this->id;
    }

    public function getStudentName() {
        return $this->name;
    }

    public function getJoinedClassroom() {
        return $this->joined_classroom;
    }

}