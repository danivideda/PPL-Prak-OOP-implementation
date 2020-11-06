<?php

namespace Services\Classroom;

class ClassroomService
{
    protected $room_name;

    public function __construct(string $roomName)
    {
        $this->room_name = $roomName;
    }

    public function getRoomName() {
        return $this->room_name;
    }
}