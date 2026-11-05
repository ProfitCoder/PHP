<?php

    declare(strict_types=1);

    namespace Models;

    class Articulo
    {

        private bool $encontrado = false;
        private array $articulos = [
            [
                'id' => 1,
                'nombre' => 'Lavadora',
                'descripcion' => 'Permite lavar la ropa',
                'precio' => 69.99
            ],
            [
                'id' => 2,
                'nombre' => 'Pato de Goma',
                'descripcion' => 'Hace cuack y es blandito',
                'precio' => 12.99
            ],
            [
                'id' => 3,
                'nombre' => 'Portatil',
                'descripcion' => 'Sirve para trabajar a diario',
                'precio' => 799.99
            ]
        ];

        public function __construct(
            private int $id,
            private string $nombre,
            private string $descripcion,
            private float $precio
        )
        {}

        public function getId(): int
        {
            return $this -> id;
        }

        public function getNombre(): string
        {
            return $this -> nombre;
        }

        public function getDesc(): string
        {
            return $this -> descripcion;
        }

        public function getPrecio(): float
        {
            return $this -> precio;
        }


        public function buscarPorId(int $id): bool
        {
            foreach(self::$articulos as $articulo)
            {
                if($articulo['id'] === $id)
                {
                    $articulo -> getId();
                    $articulo -> getNombre();
                    $articulo -> getDesc();
                    $articulo -> getPrecio();
                }
                else
                {
                    $encontrado = false;
                }
            }

            return $encontrado;
        }
    }