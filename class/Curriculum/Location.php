<?php

namespace Com\iesebre\Dam2\rogermelich\Curriculum;
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 5/10/15
 * Time: 20:09
 */

class Location extends Classroom
{
    public $location = array();

    /**
     * Location constructor.
     * @param array $location
     */
    public function __construct(array $location)
    {
        $this->location = $location;
    }

    /**
     * @return array
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param array $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

}