<?php
namespace Models;
class Calculadora
{
    public function calcular(float $numero1, float $numero2, string $operacion): float
    {
        switch ($operacion) {
            case 'sumar':
                return $numero1 + $numero2;
            case 'restar':
                return $numero1 - $numero2;
            case 'multiplicar':
                return $numero1 * $numero2;
            case 'dividir':
                return $numero1 / $numero2;
        }
        return 0;
    }
}
