<?php

# "is_float()" testa se o valor da variável é float
# is_double() - alias of is_float()

$x = 6321;
var_dump(is_float($x));

$x = 6512.151;
var_dump(is_float($x));