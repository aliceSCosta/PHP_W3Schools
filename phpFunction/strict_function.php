<?php declare(strict_types=1); // strict requirement

function addNumbers(int $a, int $b) {
    return $a + $b;
}
var_dump(addNumbers(5, "5 days"));
// since strict is enabled and "5 days" is not an integer, an error will be thrown




function sum(int $a, int $b){
    return $a + $b;
}

var_dump(sum(1, 2));
var_dump(sum(1.5, 2.5));