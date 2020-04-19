<?php

#para valores de operações matemáticas impossíveis que não é um número na tipagem de dados

# "is_nan()" verifica se o valor não é um número

$x = acos(8);
var_dump($x);

$x = acos(8);
var_dump(is_nan($x));