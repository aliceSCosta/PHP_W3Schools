<?php

$t = date("H");

if($t < 10){
    echo "Have a good morning";
}
elseif($t < 20){
    echo "Have a good day"; // entrará nesse bloco somente se a primeira condição no for satisfeita
}
else{
    echo "Have a good night";
}