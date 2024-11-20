<?php
        abstract class A{
            abstract public function info();
            abstract public function me();
                public function d(){
                    echo "public function";
                    echo "bye";
                }
        }

        class B extends A{
            function info(){
                echo "no more today";
                echo "abstract";
            }
           function me(){
            echo "there are lot today";
           }
        }

        $obj=new B();
        echo $obj->info();
        echo "<br>";
        echo $obj->me();
         echo "<br>";
        echo $obj->d();

?>