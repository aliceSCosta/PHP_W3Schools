<?php

echo "<br>";

//Union
$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");

print_r($x + $y); // union of $x and $y

echo "<br>";

//Equality
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x == $y); //Retorna true se $x e $y tiverem os mesmos pares de chave / valor

echo "<br>";

//Identity
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x === $y); //Retorna true se $x e $y tiverem os mesmos pares de chave/valor na mesma ordem e dos mesmos tipos

echo "<br>";

//Inequality
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x != $y); //Retorna true se $x não for igual a $y

echo "<br>";

//Inequality
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x <> $y); //Retorna true se $x não for igual a $y

echo "<br>";

//Non-identity	
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x !== $y); //Retorna true se $x não for idêntico a $y