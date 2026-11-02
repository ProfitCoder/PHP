<?php

declare(strict_types=1);

use App\Modelos\Usuario;
use App\Utilidades\Validador;

require_once __DIR__ . '/App/Modelos/Usuario.php';
require_once __DIR__ . '/App/Utilidades/Validador.php';

$usuario = new Usuario('Pablo', 'pablo@gmail.com');

if (Validador::validarEmail($usuario->email)) {
    echo 'El correo de ' . $usuario->nombre . ' es válido.';
} else {
    echo 'El correo no es válido.';
}
