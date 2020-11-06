<?php

require_once('Services/Classroom/ClassroomService.php');
require_once('Services/Assignment/AssignmentService.php');
require_once('Services/Assignment/TaskService.php');

use Services\Classroom\ClassroomService as Classroom;
use Services\Assignment\AssignmentService as Assignment;
use Services\Assignment\TaskService as Task;

$name = 'A Class Room';
$class_room = new Classroom($name);

// $assignment = new Assignment;
// $assignment->setTitle('A title');
// echo $assignment->getTitle();

$task = new Task;
$task->setTitle('Homework JST');
$task->setDeadline('12-12-1999');

echo $task->getTitle();
echo "<br>";
echo $task->getDeadline();