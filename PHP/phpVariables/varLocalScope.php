<?php

    function myTest(){
        $x = 5; //local scope can be only used inside function

        echo "<p>Variable x inside function is: $x</p>";
    }

    myTest();

    echo "<p>Variable x outside function is: $x</p>";