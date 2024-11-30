<?php
        $food=array("pasta","steak","fish","potatoes","potato","nopay");
    $filtered_array=preg_grep("/^p/",$food);
print_r($filtered_array);
?>  