<?php

namespace Services\Classroom;

require_once('Services/Actor/StudentService.php');
require_once('Services/Actor/TeacherService.php');

use Services\Actor\StudentService as Student;
use Services\Actor\TeacherService as Teacher;

class ClassroomService
{
    protected $room_name;
    protected $ID;
    protected $teacher; #Single instance of teacher class
    protected $students = []; #Array of student class instances

    public function __construct(int $ID, string $roomName, Teacher $teacher, $students = []) 
    {
        $this->ID = $ID;
        $this->room_name = $roomName;
        $this->teacher = $teacher;
        $this->students = $students;
    }

    public function getRoomID() {
        return $this->ID;
    }

    public function getRoomName() {
        return $this->room_name;
    }

    public function setRoomName($room_name){
        $this->room_name = $room_name;
    }

    public function getRoomTeacher() {
        return $this->teacher;
    }

    public function getRoomStudents() {
        return $this->students;
    }

    public function getRoomStudentByID($ID) {
        //TODO:
    }

    public function addRoomStudents($student) {
        //TODO: Tambahkan student instance ke array students
        $this->students[] = $student;
    }
}