<?php

    function myTest(){
        /*para que a variável não seja excluída depois 
        que a função é executada use "static"*/
        static $x = 5;
        echo $x;
        $x++;
    }
    myTest();
    myTest();
    myTest();