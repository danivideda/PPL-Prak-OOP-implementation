<?php

namespace Services\Assignment;

use Services\Assignment\AssignmentService;

class TaskService extends AssignmentService
{
    public function taskDone() {
        return 'Task done';
    }
}