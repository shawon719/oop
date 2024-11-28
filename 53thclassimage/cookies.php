<?php
    setcookie('pname','this is a main page',time()+20000,'/');
    echo $_COOKIE['pname'];
?>