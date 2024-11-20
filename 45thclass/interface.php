<?php
        interface student{
            public function show();
        }
        class batch implements student{
            function show(){
                echo "good morning";
            }
        }

        class b2 implements student{
            function show(){
                echo "hi everyone";
            }
        }
        class b3 implements student{
            function show(){
                echo "bye";
            }
        }

        $s=new batch();
        echo $s->show();
?>