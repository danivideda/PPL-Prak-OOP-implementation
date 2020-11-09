<?php

require_once('Services/Classroom/ClassroomService.php');
require_once('Services/Assignment/AssignmentService.php');
require_once('Services/Assignment/TaskService.php');
require_once('Services/Assignment/ExamService.php');
require_once('Services/Assignment/ReviewService.php');
require_once('Services/Actor/StudentService.php');
require_once('Services/Actor/TeacherService.php');

use Services\Classroom\ClassroomService as Classroom;
use Services\Assignment\AssignmentService as Assignment;
use Services\Assignment\TaskService as Task;
use Services\Assignment\ExamService as Exam;
use Services\Assignment\ReviewService as Review;
use Services\Actor\StudentService as Student;
use Services\Actor\TeacherService as Teacher;

//COMPOSITION IMPLEMENTATION
$student_name = 'Fariq Alfarizi Buchanan';
$student_id = 13;
$student1 = new Student($student_id, $student_name);

$student_name = 'Fajar Ali G';
$student_id = 14;
$student2 = new Student($student_id, $student_name);

$teacher_name = 'Dani Ihza Farrosi';
$teacher_id = 32;
$teacher = new Teacher($teacher_id, $teacher_name);

$class_name = 'A Class Room';
$class_id = 1;
$class_room = new Classroom($class_id, $class_name, $teacher, [$student1]);
$class_room->addStudentIntoClassroom($student2);

//OUTPUT: Nama Class Room Teacher, Nama Class Room Students
echo $class_room->getClassroomTeacher()->getTeacherName();

$students = $class_room->getClassroomStudents();

foreach($students as $student) {
    echo $student->getStudentName();
}


//GENERALIZATION IMPLEMENTATION
$task = new Task;
$task->setTitle('Homework JST');
$task->setDeadline('12-12-1999');

$exam = new Exam;
$exam->setTitle('Exam Algoritma Lanjut');
$exam->setDeadline('12-11-2000');

//OUTPUT: Task Details, Test Details. Both derived from Assignment Class.

echo $task->getTitle();
echo "<br>";
echo $task->getDeadline();
echo "<br>";
echo $task->alertDeadline();

echo $exam->getTitle();
echo "<br>";
echo $exam->getDeadline();
echo "<br>";
echo $exam->timeLeft();