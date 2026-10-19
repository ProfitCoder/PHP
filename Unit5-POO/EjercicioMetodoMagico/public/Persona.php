<?php
    class Persona
    {
        public function __construct(
            private string $nombre,
            private int $edad,
            private string $ciudad
        ) {}

        public function __call(string $name, array $arguments): mixed
        {
            
            return match($name)
            {
                'getNombre' => $this -> nombre,
                'getEdad' => $this -> edad,
                'getCiudad' => $this -> ciudad,
                default => "La propiedad ".$name." no existe."
            };
            
        }
    }
