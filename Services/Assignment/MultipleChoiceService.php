<?php

namespace Services\Assignment;

use Services\Assignment\QuestionService; 

class MultipleChoiceService extends QuestionService 
{
    protected $desc;
    protected $choices;
    protected $correct_answer;
    protected $student_answer;
}