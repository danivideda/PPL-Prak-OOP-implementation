<?php

namespace Services\Assignment;

use Services\Assignment\AssignmentService;

class ReviewService extends AssignmentService
{
    protected $review; #string of review or comment
    protected $score;

    public function getReview() {
        return $this->review;
    }

    public function setReview($review) {
        $this->review = $review;
    }

    public function getScore() {
        return $this->score;
    }

    public function setScore($score) {
        $this->score = $score;
    }
}