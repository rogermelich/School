<?php

namespace Com\iesebre\Dam2\rogermelich\Curriculum;

/**
 * Created by PhpStorm.
 * User: roger
 * Date: 5/10/15
 * Time: 19:56
 */
class Course extends ClassroomGroup
{
    public $course;

    /**
     * @return mixed
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param mixed $course
     */
    public function setCourse($course)
    {
        $this->course = $course;
    }



}