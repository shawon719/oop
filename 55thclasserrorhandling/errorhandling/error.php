<?php
    // $a=40;
    // try{
    //     if($a<30){
    //         throw new Exception("invalid number");
    //     }
    //     else{
    //         throw new Exception("valid number");
    //     }
    // }
    // catch(Exception $e){
    //     echo "your error is:".$e->getMessage()."<br>";
    // }finally{
    //     echo "this is finally done my work";
    // }

    function multipl($a,$b){
    return $a+$b;
}
try{
    echo multipl(5,6);
}
catch(Exception $e){
    echo "your error is:".$e->getMessage()."<br>";
}finally{
    echo "<br>this is finally done my work";
}
?>