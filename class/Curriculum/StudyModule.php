<?php

namespace Com\iesebre\Dam2\rogermelich\Curriculum;
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 5/10/15
 * Time: 19:57
 */
class StudyModule extends Lesson
{
    public $name;

    /**
     * StudyModule constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
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