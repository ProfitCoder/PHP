<?php

    declare(strict_types=1);

    namespace Request;

    final class ContactoRequest
    {
        public const array METODOS_PAGO = ['VISA','Mastercard','Paypal'];

        const TAM_MAX = 2 * 1024 * 1024; // 2 MB

        private array $datos = [];

        private array $errores = [];
        
        private array $archivo = [];
        
        private string $extension = '';

        public function __construct(array $entrada, array $archivo)
        {
            $this->archivo = $archivo;

            $this->sanear($entrada, $archivo);
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

        private function sanear(array $entrada, array $archivo): void { 
        
        // El usuario puede manipular la petición: solo aceptamos textos 
        $texto = static fn(mixed $v): string => is_string($v) ? trim(strip_tags($v)) : ''; 
        
        $this->datos = [ 
            'nombre' => $texto($entrada['nombre'] ?? ''), 
            'apellidos' => $texto($entrada['apellidos'] ?? ''), 
            'correo' => $texto($entrada['correo'] ?? ''), 
            'direccion' => $texto($entrada['direccion'] ?? ''), 
            'telefono' => $texto($entrada['telefono'] ?? ''), 
            'fecha_nacimiento' => $texto($entrada['fecha_nacimiento'] ?? ''), 
            'marcar' => isset($entrada['marcar']) ? '1' : '',
            'foto' => isset($archivo) ?? '' 
            ];
        }

        private function validar()
        {
            $this->validarDatos();
            $this->validarFoto();
        }

        private function validarDatos(): void { 
            $d = $this->datos; 
            // --- Nombre (obligatorio, 2-50 caracteres) --- 
            if ($d['nombre'] === '') {
                $this->errores['nombre'] = "El nombre es obligatorio."; 
            } 
            else if (mb_strlen($d['nombre']) < 2) 
            { 
                $this->errores['nombre'] = "El nombre debe tener al menos 2 caracteres.";
            } 
            else if (mb_strlen($d['nombre']) > 50) 
            { 
                $this->errores['nombre'] = "El nombre no puede superar los 50 caracteres."; 
            } else if (!preg_match('/^[\pL\s\-\'\.]+$/u', $d['nombre'])) 
            { 
                $this->errores['nombre'] = "El nombre solo puede contener letras, espacios, guiones y puntos."; 
            }

            if ($d['apellidos'] !== '') 
            {
                if (mb_strlen($d['apellidos']) < 2) 
                {
                    $this->errores['apellidos'] = "Los apellidos deben tener al menos 2 caracteres.";
                } 
                elseif (mb_strlen($d['apellidos']) > 100) 
                {
                    $this->errores['apellidos'] = "Los apellidos no pueden superar los 100 caracteres.";
                } 
                elseif (!preg_match('/^[\pL\s\-\'\.]+$/u', $d['apellidos'])) 
                {
                    $this->errores['apellidos'] = "Los apellidos solo pueden contener letras, espacios, guiones y puntos.";
                }
            }

            if ($d['correo'] === '') 
            {
                $this->errores['correo'] = "El correo es obligatorio.";
            } 
            elseif (mb_strlen($d['correo']) > 255) 
            {
                $this->errores['correo'] = "El correo no puede superar los 255 caracteres.";
            } 
            elseif (!filter_var($d['correo'], FILTER_VALIDATE_EMAIL)) 
            {
                $this->errores['correo'] = "El formato del correo no es válido.";
            }

        }

        
    }