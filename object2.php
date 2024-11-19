<?php
        class honda{
            public $sm;
            public $model="t45t";
            function __destruct(){
                echo " <br>bye";
            }

            function __construct(){
                echo "this is construct function";  
            }
            public function ino(){
                echo  "this  is normal method";
            }
        }
        class Car extends honda{
            public $color="red";
            function __construct($name){
                echo "this is child  cons <br>";  
                 echo $this->sm=$name;
            }

        }
        $carObj=new Car("bANDOR");
       echo $carObj->color;  

?>