<?php

    class Numero
    {
        public static function ComprobarPrimo(int $number): bool
        {
            $esPrimo = $number >= 2;

            for ($i = 2; $i * $i <= $number && $esPrimo; $i++) {
                if ($number % $i === 0) {
                    $esPrimo = false;
                }
            }

            return $esPrimo;
        }
    }