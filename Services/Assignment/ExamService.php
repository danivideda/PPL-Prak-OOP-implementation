<?php

namespace Services\Assignment;

use Services\Assignment\AssignmentService;

class ExamService extends AssignmentService
{
    protected $start_timestamp;
    protected $end_timestamp;
    protected $id;
    
    public function timeLeft() {
       #TODO: take time as parameter and return deadline time - current time
        return '2 hours left';
    }

    public function setStartTime($timestamp) {
        $this->start_timestamp = $timestamp;
    }

    public function setEndTime($timestamp) {
        $this->end_timestamp = $timestamp;
    }
}