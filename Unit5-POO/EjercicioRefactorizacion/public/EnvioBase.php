<?php
    abstract class EnvioBase implements CalcularEnvio
    {
        /**
         * Creamos el construtor para las propiedades
         */

        public function __construct(
            private float $peso,
            private float $distancia
        )
        {}

        public function calcularCoste(float $peso, float $distancia):float {return 0.0;}
    }