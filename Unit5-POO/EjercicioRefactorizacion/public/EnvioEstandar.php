<?php
    class EnvioEstandar extends EnvioBase
    {
        /**
         * Creamos el constructor basado en el del padre
         */

        private float $costoBase = 0.5;

        public function __construct(float $peso, float $distancia,
            private string $tipoEnvio
        )
        {
            parent::__construct($peso, $distancia);
        } 

        public function CalcularCoste(float $peso, float $distancia) : float
        {
            $coste_por_peso = $this -> costoBase*$peso;
            $coste_por_distancia = $coste_por_peso*$distancia;
            return $this -> costoBase + $coste_por_peso+$coste_por_distancia;
        }
    }