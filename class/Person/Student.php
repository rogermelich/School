<?php

/**
 * Created by PhpStorm.
 * User: roger
 * Date: 5/10/15
 * Time: 18:13 falta trait
 */

namespace Com\iesebre\Dam2\rogermelich\Person;

class Student extends Person
{
    use Worker;

    public $dual = false;

    public $classRoomGroup;

    /**
     * Student constructor.
     * @param bool $dual
     */
    public function __construct($dual = null)
    {
        $this->type = "estudiant";
        if ($dual != null)
        $this->$dual;
    }

    public function render(){

        if ($this->dual == true){
            echo parent::render() . ", i cobra" . $this->salary;
        } else
        parent::render();
    }

}