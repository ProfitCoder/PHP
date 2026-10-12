<?php
    class producto{

        private static int $contadorObjetos = 0;
        public const IVA = 0.21;

        public function __construct() {
            self::$contadorObjetos++;
        }

        public static function obtenerCantidadProductos():int{
            return self::$contadorObjetos;
        }
    }