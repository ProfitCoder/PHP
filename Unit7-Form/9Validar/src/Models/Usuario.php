<?php
declare(strict_types=1);
namespace Models;

class Usuario
{
    public function __construct(
        public string $nombre = '',
        public string $apellidos = '',
        public string $correo = '',
        public string $telefono = '',
        public string $situacion = '',
        public array $lenguajes = [],
        public string $url = ''
    ) {}

    // Recibe únicamente los datos saneados por UsuarioRequest.
    public static function fromArray(array $datos): self
    {
        return new self(
            nombre: $datos['nombre'] ?? '',
            apellidos: $datos['apellidos'] ?? '',
            correo: $datos['correo'] ?? '',
            telefono: $datos['telefono'] ?? '',
            situacion: $datos['situacion'] ?? '',
            lenguajes: $datos['lenguajes'] ?? [],
            url: $datos['url'] ?? ''
        );
    }
}
