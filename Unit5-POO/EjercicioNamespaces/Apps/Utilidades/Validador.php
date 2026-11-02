<?php

declare(strict_types=1);

namespace App\Utilidades;

class Validador
{
    public static function validarEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
}