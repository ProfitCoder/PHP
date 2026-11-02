<?php
    declare(strict_types=1);
    
    namespace Lib;
    
    class Request
    {
        
        public static function esPost(): bool
        {
            return ($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST';
        }
        
        public static function contiene(string $campo): bool
        {
            return array_key_exists($campo, $_POST);
        }
        
        public static function texto(string $campo): ?string
        {
            $valor = $_POST[$campo] ?? null;
            return is_string($valor) ? $valor : null;
        }
    }
