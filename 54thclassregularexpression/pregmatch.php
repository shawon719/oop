<?php 
        $data="3/24, * tajmahal road";
        $output=preg_match("/^[0-9,a-zA-Z\/]+$/",$data);
        if(!$output){
            echo "error <br>";
        }

        $data2="3/34, * tajmahal raod";
        $output2=preg_match("/^[0-9,a-zA-Z\/]+$/",$data2); 
        echo $output2;
?>