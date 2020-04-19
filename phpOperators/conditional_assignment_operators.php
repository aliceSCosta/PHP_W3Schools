<?php

//Ternary

#Returns the value of $x.
#The value of $x is expr2 if expr1 = TRUE.
#The value of $x is expr3 if expr1 = FALSE

// if empty($user) = TRUE, set $status = "anonymous"

echo $status = (empty($user)) ? "anonymous" : "logged in";

echo "<br>";

$user = "Alice Silva";
// if empty($user) = FALSE, set $status = "logged in"
echo $status = ((empty($user))) ? "anonymous" : "logged in";

echo "<br>";
echo "<br>";

#Null coalescing

#Returns the value of $x.
#The value of $x is expr1 if expr1 exists, and is not NULL.
#If expr1 does not exist, or is NULL, the value of $x is expr2.

// variable $user is the value of $_GET['user']
// and 'anonymous' if it does not exist
echo $user = $_GET["user"] ?? "anonymous";

echo "<br>";

// variable $color is "red" if $color does not exist or is null
echo $color = $color ?? "red";