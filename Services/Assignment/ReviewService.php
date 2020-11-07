<?php

namespace Services\Assignment;

use Services\Assignment\AssignmentService;

class ReviewService extends AssignmentService
{
    protected $review; #string of review or comment

    public function getReview() {
        #TODO: return deadline time - current time
        return '2 hours left';
    }

    public function setReview($review) {
        $this->review = $review;
    }
}