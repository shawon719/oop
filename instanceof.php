<?php
    class A{
        public $name="hello world";
    }
    class B{
        public $brand="my class";
    }

        $c= new A();
        $b=new B();
        var_dump($c instanceof B);
?>