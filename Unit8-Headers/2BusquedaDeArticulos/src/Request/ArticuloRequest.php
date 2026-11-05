<?php
    declare(strict_types=1);

    namespace Request;

    final class ArticuloRequest
    {
    
        private array $datos = [];

        private array $errores = [];
        

        public function __construct(array $entrada)
        {
            $this->sanear($entrada);
            $this->validar();
        }

        public function esValido(): bool
        {
            return $this->errores === [];
        }

        public function errores(): array
        {
            return $this->errores;
        }

        public function datos(): array
        {
            return $this->datos;
        }

        private function sanear(array $entrada):void
        {
            $texto = static fn(mixed $v): string => is_string($v) ? trim(strip_tags($v)) : '';

            
            $this->datos = [
                'id' => $texto($entrada['id'] ?? ''),
            ];
        }

        private function validar(): void
        {
            $id = $this->datos['id'];

            if ($id === '') 
                {
                $this->errores['id'] = 'Debes introducir un identificador.';
            } 
            else if (filter_var($id,FILTER_VALIDATE_INT,['options' => ['min_range' => 1]]) === false) 
            {
                $this->errores['id'] = 'El identificador debe ser un entero positivo.';
            }
        }
    }