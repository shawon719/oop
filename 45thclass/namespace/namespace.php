<?php
//     class A{
//         $name="a";
//         function info(){
//             echo "class a";
//         }
//     }   
//     class B{
//         $name="a";
//         function show(){
//             echo "bye";
//         }
//     }
//     $obj=new A();
//     echo $obj->info();
// ?>

<?php
     require "namespacesub1.php";
     require "namespacesub2.php";
     require "namespacesub3.php";

     use student\A;
     use student1\B;
     use student3\c;


     $myObj=new A();
     echo $myObj->info();
      echo "<br>";
     $myObj1=new B();
     echo $myObj1->show();
      echo "<br>";
     $myObj3=new c(); 
     echo $myObj3->display();
?>