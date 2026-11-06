<?php

    declare(strict_types=1);

    namespace Models;

    class Contacto
    {
        public function __construct(
            private string $nombre = '',
            private string $apellidos = '',
            private string $correo = '',
            private array $metodosPago = [],
            private bool $marcar = false,
            private string $foto = '' 
        )
        {}

        public static function fromArray(array $datos): self
        {
            return new self(
                nombre: trim($datos['nombre'] ?? ''),
                apellidos: trim($datos['apellidos'] ?? ''),
                correo: trim($datos['correo'] ?? ''),
                metodosPago: $datos['MetodosPago'] ?? [],
                marcar: isset($datos['marcar']),
                foto: $datos['foto'] ?? ''
            );
        }

        function getNombre(): string
        {
            return $this->nombre;
        }

        function getApellido(): string
        {
            return $this->apellidos;
        }

        function getCorreo(): string
        {
            return $this->correo;
        }

        function getMetodosPago(): array
        {
            return $this->metodosPago;
        }

        function getMarcar(): bool
        {
            return $this->marcar;
        }

        function getFoto(): string
        {
            return $this->foto;
        }
    }