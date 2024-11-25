<?php

require "interface.php";
use stu\Student1;
use stu\Student2;
// create object student 1 
$studentOne= new Student1();
echo $studentOne->studentId();
echo $studentOne->name();

// create object student2 
$studentTwo= new Student2();
$studentTwo->details();
$studentTwo->result();
echo $studentTwo->myName;
?>

?>