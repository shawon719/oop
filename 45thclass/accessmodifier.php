<?php
    // class fruit{

    // }

    // class drinks{
    //     //properties
    //     public $name="bmw1";
    //     public $color="red";

    //     //methods
    //     function info($name){
    //         $this->name=$name;
    //         return $this->name."nn";
    //     }
    //     function get_name(){
    //         return $this->name;
    //     }
    // }

    // $apple= new drinks();
    // $banana= new fruit();
    // echo $apple->name;
    // echo $apple->info('sdsa');
    // //$banana->set_name('Banana');
?>

<?php
    class a{
        public $id= 1285366;
        //protected $name="shawon";
       // private $age="22";
        function info ($name){
            $this->name=$name;
            return $name;
        }
    }

    $myObj=new a();
    echo $myObj->id;
    //echo $myObj->name;
   // echo $myObj->age;
   // echo $myObj->info('shawon');
?>