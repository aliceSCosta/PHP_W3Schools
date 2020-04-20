<?php

echo "<br>";

#O foreachloop funciona apenas em matrizes e é usado para percorrer cada par de chave / valor em uma matriz.

/*Para cada iteração de loop, o valor do elemento atual da matriz é atribuído ao 
$valor e o ponteiro da matriz é movido por um, até atingir o último elemento da matriz.*/

$x = array("red", "green", "black", "orange");

foreach($x as $value){
    echo "$value <br>";
}

echo "<br>";

#exibindo a chave e o valor

//coloca a chave do array dentro da variável $chave e o valor do array dentro da variável $valor

$y = array("Alice" => "18", "Vitória" => "13", "Gustavo" => "14");

foreach($y as $chave => $valor){
    echo "$chave = $valor <br>";
}