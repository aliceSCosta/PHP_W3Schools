<?php declare(strict_types=1);

// declarar um valor padrão para um argumento caso ele retorne nulo

function setHeight(int $minheight = 50) {
    echo "The height is : $minheight <br>";
}

var_dump(setHeight(350));
var_dump(setHeight()); // will use the default value of 50
var_dump(setHeight(135));
var_dump(setHeight(80));