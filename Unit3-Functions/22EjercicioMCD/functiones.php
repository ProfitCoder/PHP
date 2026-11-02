<?php

function calcularMCD(int $a, int $b): int
{
    $a = abs($a);
    $b = abs($b);

    while ($b !== 0) {
        $resto = $a % $b;
        $a = $b;
        $b = $resto;
    }

    return $a;
}