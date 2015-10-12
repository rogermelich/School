<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 5/10/15
 * Time: 20:11
 */
namespace Com\iesebre\Dam2\rogermelich\Curriculum;

use Com\iesebre\Dam2\rogermelich\Person\Student;

class ClassroomGroup extends Location
{
    public $students = array();

    /**
     * Classroom constructor.
     * @param array $students
     */
    public function __construct(array $students)
    {
        $this->students = $students;
    }

    /**
     * @return array
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * @param array $students
     */
    public function setStudents($students)
    {
        $this->students = $students;
    }

    public function addStudent(Student $student)
    {
        array_push($this->students,$student);
    }
}