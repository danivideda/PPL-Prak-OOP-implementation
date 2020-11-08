<?php

namespace Services\Classroom;

use Services\Actor\StudentService as Student;
use Services\Actor\TeacherService as Teacher;
use Services\Assignment\TaskService as Task;

class ClassroomService
{
    protected $id;
    protected $classroom_name;
    protected $pass_token;
    protected $teacher; #Single instance of teacher class
    protected $students = []; #Array of student class instances
    protected $materials= []; #Array of LearningMaterials class instances
    protected $assignments = []; #Array of Task / Exam class instances

    public function __construct($id, $roomName, Teacher $teacher) {
        $this->id = $id;
        $this->classroom_name = $roomName;
        $this->teacher = $teacher;
    }

    public function setTeacher(Teacher $teacher) {
        $this->teacher = $teacher;
    }

    public function setPassToken($token) {
        $this->pass_token = $token;
    }

    public function setClassroomName($classroom_name){
        $this->classroom_name = $classroom_name;
    }

    public function createLearningMaterial($title, $material) {
        // TODO: create LearningMaterial Class. And then insert into materials[]
    }

    public function createTask($title) {
        // TODO: new Task instance, then insert it into assignments[]
    }

    public function createExam($title) {
        // TODO: new Exam instance, then insert it into assignments[]
    }

    public function addStudentIntoClassroom(Student $student) {
        //TODO: Tambahkan student instance ke array students
        $this->students[] = $student;
    }

    public function getClassroomID() {
        return $this->id;
    }

    public function getClassroomName() {
        return $this->classroom_name;
    }

    public function getClassroomTeacher() {
        return $this->teacher;
    }

    public function getClassroomStudents() {
        return $this->students;
    }

    public function getLearningMaterials() {
        return $this->materials;
    }

    public function getTasks() {
        foreach ($this->assignments as $assignment) {
            if ($assignment->type == 'task') {
                $tasks[] = $assignment;
            }
        }

        return $tasks;
    }

    public function getExams() {
        foreach ($this->assignments as $assignment) {
            if ($assignment->type == 'exam') {
                $exams[] = $assignment;
            }
        }

        return $exams;
    }

}