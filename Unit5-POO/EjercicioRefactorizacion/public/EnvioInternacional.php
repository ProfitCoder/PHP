
<?php
    class EnvioInternacional extends EnvioBase
    {
        /**
         * Hacemos ahora la parte de Envios Express
         */

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
            $coste_por_peso = $peso * 5.0;
            $costo_base = 20.0;
            $costo_por_distancia = ($distancia < 500) ? $distancia * 0.1 : 0.0;
            $estandar = new EnvioExpress($peso, $distancia, $this->tipoEnvio);
            $resultado = $estandar->calcularCoste($peso, $distancia);
            
            return $resultado;
        }
    }
