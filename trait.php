<?php
    trait Main{
        public function info(){
            echo "this is main class."."<br>";
        }
    }
    trait Main2{
        public function infooo(){
            echo "this is second trait"."<br>";
        }
        public function display(){
            echo "displaying main2"."<br>";
        }
        
    }

     trait Main3{
        public function iinfo(){
            echo "this is third trait"."<br>";
        }
        public function view(){
            echo "viewing main2"."<br>";
        }
        
    }

    class Child{
        use Main,Main2,Main3;
        public function save(){
            echo "this is child class";
        }
    }

    $c=new Child();

    $c->info();
    $c->info();
    $c->infoo();
    echo $c->save();
?>