<?php
    declare(strict_types=1);

    namespace Request;

    final class UsuarioRequest
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
                'nombre' => $texto($entrada['nombre'] ?? ''),
                'password' => $texto($entrada['password'] ?? '')
            ];
        }

        private function validar(): void
        {
            $d = $this->datos;

            if ($d['nombre'] === '') {
                $this->errores['nombre'] = 'El nombre es obligatorio.';
            }
            else if (!preg_match('/^[A-Z]+[a-z]*[0-9]+$/',$d['password']))
            {
                $this->errores['password'] = 'La contraseña No cumple el formato.';
            }
        }
    }