<?php declare(strict_types=1);

function addNumbers(float $a, float $b) : float {
    return $a + $b;
}
echo addNumbers(1.2, 5.2);

function addNumbers2(float $a, float $b) : int {
    return (int)($a + $b);
}
echo addNumbers(1.2, 5.2);