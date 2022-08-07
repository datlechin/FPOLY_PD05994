<?php

function pow2(int $a, int $b): int {
    $num1 = $a * $a;
    $num2 = $b * $b;

    return $num1 + $num2;
}

echo pow2(5, 5);