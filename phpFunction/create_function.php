<?php

echo "<br>";

function writeMsg(){
    echo "Hello World";
}

writeMsg(); //chamando a função

echo "<br>";
echo "<br>";

for($x=0; $x<10; $x+=2){
    echo "$x <br>";
    echo writeMsg()."<br>";
}