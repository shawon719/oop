 <?php 
    //add to git 
echo "hello world";
echo "sharmony";
echo "hashem shawon <br>";
echo "ringin <br>";

?> 

<?php 
        
        //constructor and destructor
        //static

        class Car{
            public $name="toto";
            public $model="t45t";
            function __destruct(){
                echo " <br>bye";
            }
            public function infoCopy(){
                echo " '<br>' this is new normal function";
            }
            function __construct(){
                //constructor object create korlei run hoiiiiiiii
                echo "this is construct function";
            }
            public function info(){

                //normal method ba function call na korle output dekhabe na
                echo  "this  is normal method";
            }
        }

        $newObj= new Car();
        echo "<br>";
        $newObj->info();
        // $newObj->infoCopy();
        class Bike extends Car{
            public $color="red";
        
            function __construct(){
                echo "this is child constructor.";
            }

                public function details(){
                echo "THIS is child method";
            }

        }
        $bikeObj=new Bike();
        $bikeObj->details();
        echo "<br>",$bikeObj->color;
        echo "<br>",$bikeObj->name;

?> 

<?php 
        //class work
        //constructor and destructor

        //dynamic

        // class Car{
        //     public $name;
        //     public $model="t45t";
        //     function __destruct(){
        //         echo " <br>bye";
        //     }
        //     public function infoCopy(){
        //         echo " '<br>' this is new normal function";
        //     }
        //     function __construct(  $name){
        //         //constructor object create korlei run hoiiiiiiii
        //         echo "this is construct function";
        //         //$this ->name=$name;
        //     }
        //     public function info(){

        //         //normal method ba function call na korle output dekhabe na
        //         echo  "this  is normal method";
        //     }
        // }
        // // $newObj= new Car();
        // // echo "<br>";
        // // $newObj->info();
        // // $newObj->infoCopy();
        // class Bike extends Car{
        //     public $color="red";
        //     function __construct($name){
        //         echo "this is child constructor.";
        //         $this ->name=$name;
        //     }

        //         public function details(){
        //         echo "THIS is child method";
        //     }

        // }
        // $bikeObj=new Bike();
        // $bikeObj->details();
        // echo "<br>",$bikeObj->color;
        // echo "<br>",$bikeObj->name;
?>  -->
