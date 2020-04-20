<?php

echo "<br>";

/*sempre executará o bloco de código uma vez, depois verificará a condição e repetirá o 
loop enquanto a condição especificada for verdadeira*/

$x = 1;

do{
    echo "The number is: $x <br>";
    $x++;
}while($x < 5);

echo "<br>";

/*no do...while, o bloco de código é executada pelo menos uma vez mesmo se a condição for falsa
e só em seguida o condição é testada*/

$x = 6;

do{
    echo "The number is: $x <br>";
    $x++;
}while($x < 5);