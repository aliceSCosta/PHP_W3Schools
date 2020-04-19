<?php

# "is_numeric" pode ser usada para saber se o valor de uma variável é um número mesmo sendo um número string, 
#retornando true, uma sequência numérica ou false

# números hexadecimais não são mais consideradas numéricas no php, então retornará false

$x = 2568;
var_dump(is_numeric($x));

$x = "5426";
var_dump(is_numeric($x));

$x = "25.2563";
var_dump(is_numeric($x));

$x = "26541" + 2005;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));