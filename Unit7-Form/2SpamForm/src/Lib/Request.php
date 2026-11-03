<?php
    declare(strict_types=1);

    namespace Lib;
    
    class Request
    {
    
        public static function esPost(): bool
        {
            return ($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST';
        }
        
        public static function post(string $campo): string
        {
            $valor = $_POST[$campo] ?? '';
            return is_string($valor) ? trim($valor) : '';
        }
    }
