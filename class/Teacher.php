<?php

/**
 * Created by PhpStorm.
 * User: roger
 * Date: 5/10/15
 * Time: 18:06
 */
class Teacher extends Person
{
    use Worker; //Per utilitzar el trail desde Worker

    public $specialization;

}