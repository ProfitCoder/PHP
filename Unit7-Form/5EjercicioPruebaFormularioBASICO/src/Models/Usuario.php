<?php

    declare(strict_types=1);

    namespace Models;

    class Usuario
    {
        public function __construct(
            public string $nombre = '',
            public string $password = ''
        )
        {}

        public static function fromArray(array $datos): self
        {
            return new self(
                nombre: trim($datos['nombre'] ?? ''),
                password: $datos['password'] ?? '',
            );
        }

        function getNombre(): string
        {
            return $this->nombre;
        }
    }