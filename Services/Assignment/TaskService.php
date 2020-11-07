<?php

namespace Services\Assignment;

use Services\Assignment\AssignmentService;

class TaskService extends AssignmentService
{
    public function taskDone() {
        return 'Task done';
    }

    public function alertDeadline() {
        #TODO: take time as parameter and return deadline time - current time
        return "Task needs to be submitted in 2 days";
    }
}