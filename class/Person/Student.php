<?php namespace Com\iesebre\Dam2\rogermelich;

/**
 * Created by PhpStorm.
 * User: roger
 * Date: 5/10/15
 * Time: 18:13 falta trait
 */
class Student extends Person
{
    use Worker;

    public $dual = false;

    public $classRoomGroup;

    /**
     * Student constructor.
     * @param bool $dual
     */
    public function __construct($dual)
    {
        parent::__construct();
        if ($dual != null)
        $this->dual = $dual;
    }

    public function render(){
        $this->type = "Studiant";
        parent::render();
    }

}