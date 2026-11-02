<?php
    declare(strict_types=1);

    namespace Models;

    class Persona
    {
        public function __construct(
            private string $nombre,
            private string $telefono,
            private string $correo
        ) {}

        public function mensaje(): string
        {
            return "¡Buenos días, {$this->nombre}! Te voy a enviar spam a {$this->correo} y te llamaré de madrugada a {$this->telefono}. Enviado desde un iPhone.";
        }

    }
