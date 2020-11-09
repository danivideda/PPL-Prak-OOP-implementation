<?php

namespace Services\Assignment;

class AssignmentService
{
    protected $assignment_ID;
    protected $type;
    protected $title;
    protected $finished_student;
    protected $number_of_question;
    protected $questions;
    protected $reviews;

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setDeadline($date) {
        $formatted_date = date_create_from_format('j-n-Y', $date);
        $this->deadline = $formatted_date;
    }

    public function setAssignmentID($id) {
        $this->assignment_ID = $id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDeadline() {
        return date_format($this->deadline, 'D, M Y');
    }

    public function announceAssignment() {
        #TODO: Return title, type, and number of question
    }

    public function createReview($reviews) {
        $this->reviews = $reviews;
    }

    public function getReview() {
        return $this->reviews;
    }
}