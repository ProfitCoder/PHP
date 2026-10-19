<?php
    interface CalcularEnvio
    {
        /**
         * A continuación creamos el metodo que vamos a tener que usar
         * en todas las clases las cuales incluyan esta interfaz
         */

        public function calcularCoste(float $peso, float $distancia):float;
    }