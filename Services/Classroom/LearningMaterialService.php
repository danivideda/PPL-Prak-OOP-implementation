<?php

namespace Services\Classroom;

class LearningMaterial
{
    protected $title;
    protected $materials_data;

    public function __construct($title, $data = NULL)
    {
        $this->title = $title;
        $this->materials_data = $data;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setMaterialsData($data) {
        $this->materials_data = $data;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getMaterialsData() {
        return $this->materials_data;
    }

}