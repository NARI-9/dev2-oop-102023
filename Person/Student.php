<?php
include "Person.php";

class Student extends Person{
    private $school_id;

    public function __construct($name,$age,$gender,$school_id){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->school_id = $school_id;
    }
    function getSchoolId(){
        return $this->school_id;
    }
}

?>