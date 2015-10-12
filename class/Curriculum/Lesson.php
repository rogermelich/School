<?php

namespace Com\Iesebre\Dam2\rogermelich\Curriculum;

use Com\iesebre\Dam2\rogermelich\Person\Teacher;

/**
 * Created by PhpStorm.
 * User: roger
 * Date: 12/10/15
 * Time: 19:42
 */
class Lesson extends Studies
{

    public $name;

    public $teacher;

    public $classroomGroup;

    /**
     * Lesson constructor.
     * @param $name
     * @param $teacher
     * @param $classroomGroup
     */
    public function __construct($name, $teacher, $classroomGroup)
    {
        $this->name = $name;
        $this->teacher = $teacher;
        $this->classroomGroup = $classroomGroup;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}