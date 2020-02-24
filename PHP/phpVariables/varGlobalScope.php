<?php

    $x = 5; //global scope can be only accessed outside  a function

function myTest(){
    // using $x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";