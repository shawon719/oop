<?php 
        $input=[
            'this is 7 0 clock',
            'this is our class',
            'this is our batch 2024'
        ];
            $r=preg_filter('/[0-9]+/','($0)',$input);
            print_r ($r);
?>