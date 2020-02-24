<?php

    $x = 50;
    $y = 20;
    $z = 10;

    function myTest(){
        $GLOBALS['z'] = $GLOBALS['y'] + $GLOBALS['z'] + $GLOBALS['x'];

    }
    myTest();

    echo $z;