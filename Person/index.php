<?php

include "Student.php";

$student_a = new Student("John Smith",13,"Male","A1-001");
echo $student_a->getName()."<br>";
echo $student_a->getAge()."<br>";
echo $student_a->getGender()."<br>";
echo $student_a->getSchoolId()."<br>";

$student_b = new Student("Marie Thompson",15,"Female","AB-0123");
echo $student_b->getName()."<br>";
// echo $student_b->getAge()."<br>";
// echo $student_b->getGender()."<br>";
echo $student_b->getSchoolId()."<br>";
?>