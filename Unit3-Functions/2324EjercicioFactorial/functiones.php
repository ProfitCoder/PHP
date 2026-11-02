<?php

function factorial(int $numero): int
{
    if ($numero < 0) {
        throw new InvalidArgumentException(
            "No se puede calcular el factorial de un número negativo."
        );
    }

    if ($numero <= 1) {
        $resultado = 1;
    } else {
        $resultado = $numero * factorial($numero - 1);
    }

    return $resultado;
}