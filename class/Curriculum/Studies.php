<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 12/10/15
 * Time: 19:27
 */

namespace Com\iesebre\Dam2\rogermelich\Curriculum;

class Studies extends Course
{
    public $name;

    public $description;

    public $period;

    public $course;

    /**
     * Studies constructor.
     * @param $course
     */
    public function __construct($course)
    {
        $this->course = $course;
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

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param mixed $period
     */
    public function setPeriod($period)
    {
        $this->period = $period;
    }

}