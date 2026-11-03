<?php
    namespace Request;

    class CalculadoraRequest
    {
        
        private array $datos;
        
        public function __construct(array $entrada)
        {
            $this->datos = $entrada;
        }
        
        public function esValido(): bool
        {
            return is_numeric($this->datos['numero1'] ?? '')
                && is_numeric($this->datos['numero2'] ?? '')
                && in_array($this->datos['operacion'] ?? '', 
                ['sumar', 'restar', 'multiplicar', 'dividir'], true);
        }
        
        public function datos(): array
        {
            return $this->datos;
        }
    }
