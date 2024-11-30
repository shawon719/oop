<?php
    $date="22-03-1920 00:00:00";
    $pattern="/[-\s:]/";
    $components=preg_split($pattern,$date);
    echo "<br>";
    print_r($components);
?>