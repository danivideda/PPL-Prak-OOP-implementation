<?php

namespace Services\Assignment;

class AssignmentService
{
    protected $title;
    protected $deadline;

    // public function __construct($title, DateTime $deadline)
    // {
    //     $this->title = $title;
    //     $this->deadline = $deadline;
    // }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setDeadline($date) {
        $formatted_date = date_create_from_format('j-n-Y', $date);
        $this->deadline = $formatted_date;
    }

    public function getTitle() {
        return $this->title;
        // echo $this->title;
    }

    public function getDeadline() {
        return date_format($this->deadline, 'D, M Y');
    }
}