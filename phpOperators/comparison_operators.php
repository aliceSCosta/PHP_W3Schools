<?php

//Equal
$x = 100;
$y = "100";

var_dump($x == $y); #returns true because values are equal

echo "<br>";

//Identical
$x = 100;
$y = "100";

var_dump($x === $y); #returns false because types are not equal

echo "<br>";

//Not Equal
$x = 100;
$y = "100";

var_dump($x != $y); #returs false because values are equals

echo "<br>";

//Not Equal
$x = 100;
$y = "100";

var_dump($x <> $y); #returns false because values are equal

echo "<br>";

//Not Identical
$x = 100;
$y = "100";

var_dump($x !== $y); #returns true because types are not equal

echo "<br>";

//Greater than
$x = 100;
$y = 50;

var_dump($x > $y); #returns true because $x is greater than $y

echo "<br>";

//Less than
$x = 10;
$y = 50;

var_dump($x < $y);

echo "<br>";

//Greater than or equal to
$x = 50;
$y = 50;

var_dump($x >= $y); #returns true because $x is greater than or equal to $y

echo "<br>";

//Less than or equal to
$x = 50;
$y = 50;

var_dump($x <= $y); #returns true because $x is less than or equal to $y

echo "<br>";

//Spaceship
//$x = 5;
//$y = 10;

//echo ($x <=> $y); #returns -1 because $x is less than $y

//echo "<br>";

//$x = 10;  
//$y = 10;

//echo ($x <=> $y); #returns 0 because values are equal

//echo "<br>";

//$x = 15;  
//$y = 10;

//echo ($x <=> $y); #returns +1 because $x is greater than $y