<?php

declare(strict_types=1);

namespace App\Modelos;

class Usuario
{
    public function __construct(
        public string $nombre,
        public string $email
    ) {
    }
}