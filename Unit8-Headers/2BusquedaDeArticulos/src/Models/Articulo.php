<?php

    declare(strict_types=1);

    namespace Models;

    class Articulo
    {

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



        public function buscarPorId(int $id): void
        {
            foreach($this -> $articulos as $campo)
            {
                if($campo === 'id' && 'id' === $id)
                {
                    $articulos -> getId();
                }
            }
        }


    }