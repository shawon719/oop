<?php
        $a= "the";

        if(isset($a)){
            echo "done  <br>";
            echo "boom   <br>";
        }
        else{
            echo "not done
            <br>";
            echo "boom   <br>";
        }

        $b=null;
        if(isset($b)){
            echo " ddone";
        }
        else{
            echo "nnot done";
        }
        echo "<br>";
        $c=10;
        if(isset($c)){

            echo "assigned value.";
        }
        else{
            echo "not assigned.";
        }
?>