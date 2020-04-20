<?php

$favcolor = "red";

switch($favcolor){
    case "red":
        echo "Your favorite color is red";
    break;

    case "blue":
        echo "Your favorite color is blue";
    break;

    case "green":
        echo "Your favorite color is green";
    break;

    default:    //Caso a variável não tenha nenhum dos valores anteriores, cairá aqui.
        echo "Your favorite color is neither red, blue or green";
}