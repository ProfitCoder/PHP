<?php

function factorial(int $numero): int
{
    if ($numero <= 1) {
        $resultado = 1;
    } else {
        $resultado = $numero * factorial($numero - 1);
    }

    return $resultado;
}

echo "El factorial de 5 es: " . factorial(5);