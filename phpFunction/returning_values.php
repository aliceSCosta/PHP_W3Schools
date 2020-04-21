<?php declare (strict_types=1);

function sum(int $a, int $b){
    $z = $a + $b;
    return $z;
}

echo "7+3 = " . sum(7+3) . "<br>";
echo "5+5 = " . sum(5+"5") . "<br>";