<?php
    //     namespace stu;
    //     interface Student{
    //         public function details();
    //         //public function display();
    //     }
    //     abstract class display implements Student{
    //             protected $name;
    //             protected $id;
    //             protected $age;

    //         abstract public function disp(){
    //             echo "this is student details";
    //         }
    //         public function setName($name){
    //                 $this->name=$name;
    //         }
    //         public function details($id,$age){
    //             $this->id=$id;
    //             $this->age=$age;
    //         }
    // }
    // class student1 extends display{
    //     public function name(){
    //         echo $this->name."sharmony hashem";
    //     }
    //     public function details($id,$age){
    //         echo $this->id. "1285366";
    //         echo $this->age. "23";
    //     }
    // }
    // class student2 extends display{
    //     public function name(){
    //         echo $this->name. "rukaiya rinjin";
    //     }
    //     public function details($id, $age){
    //         echo $this->id. "1285266";
    //         echo $this->age. "22";
    //     }
    // }  
?>
<?php
        
// create namespace
        namespace stu; 

// create interface class 
    interface display{
            public function details();
            //public function display();
        }
// create abstract class 
    abstract class Student{
            abstract public function name();
            public function studentId(){
             echo "Your id is 212123 <br>";
            }
    }

    // inheritance abstract class Student 
    class Student1 extends Student{
        public function name(){
            echo "sharmony hashem <br>";
        }

    }
// inheritance interface class 
    class Student2 implements display{
        public $myName = "Rukaiya Rinjon";
        public function details(){
            echo "DAW EKTA ID 23232323 <br>";
          
        }
        public function result(){
            echo 'You have got A+ <br>';
        }
    }

   
?>






