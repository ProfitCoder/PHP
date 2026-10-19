<?php
    class EnvioExpress extends EnvioBase
    {
        /**
         * Hacemos ahora la parte de Envios Express
         */

        private float $caso_urgencia = 10;

        public function __construct(
            float $peso,
            float $distancia,
            private string $tipoEnvio
        ) 
        {
            parent::__construct($peso, $distancia);
        }

        public function calcularCoste(float $peso, float $distancia): float
        {
            $estandar = new EnvioEstandar($peso, $distancia, $this->tipoEnvio);
            $resultado = $estandar->calcularCoste($peso, $distancia) + $this->caso_urgencia;
            
            return $resultado;
        }
    }
