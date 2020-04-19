<?php

    $x = 5;
    $y = 29;

    function myTest(){
        /*use the global keyword inside the function before the variable for 
        to access a global variable */

        global $x, $y;
        $y = $x+$y;
    }
    myTest();

    echo $y; //outputs 34 and not 29
    