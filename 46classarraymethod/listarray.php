<?php
    $info=array("dog","cat","cow");

    list($a,$b,$c)=$info;
        echo $c;
        echo "<br>";
?>

<?php
    $str="this is a text.";

    list($p,$q,$r,$s)=explode(" ",$str);
    //print_r(list);
    echo $r;
    echo "<br>";
    echo $s;
?>