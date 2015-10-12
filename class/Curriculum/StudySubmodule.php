<?php

namespace Com\iesebre\Dam2\rogermelich\Curriculum;

/**
 * Created by PhpStorm.
 * User: roger
 * Date: 5/10/15
 * Time: 19:57
 */
class StudySubmodule extends StudyModule
{
    public $submodule;

    public $duration;

    /**
     * StudySubmodule constructor.
     * @param $submodule
     * @param $duration
     */
    public function __construct($submodule, $duration)
    {
        $this->submodule = $submodule;
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getSubmodule()
    {
        return $this->submodule;
    }

    /**
     * @param mixed $submodule
     */
    public function setSubmodule($submodule)
    {
        $this->submodule = $submodule;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

}