<?php

    declare(strict_types=1);

    namespace Models;

    class Articulo
    {

        private bool $encontrado = false;
        private array $articulos = [
            [
                'id' => '1',
                'nombre' => 'Lavadora',
                'descripcion' => 'Permite lavar la ropa',
                'precio' => '69.99'
            ],
            [
                'id' => '2',
                'nombre' => 'Pato de Goma',
                'descripcion' => 'Hace cuack y es blandito',
                'precio' => '12.99'
            ],
            [
                'id' => '3',
                'nombre' => 'Portatil',
                'descripcion' => 'Sirve para trabajar a diario',
                'precio' => '799.99'
            ]
        ];

        public function __construct(
            private string $id = '',
            private string $nombre = '',
            private string $descripcion = '',
            private string $precio = ''
        )
        {}

        public function getId(): string
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

        public function getPrecio(): string
        {
            return $this -> precio;
        }


        public function buscarPorId(string $id): bool
        {
            $encontrado = false;

            foreach ($this->articulos as $articulo) {
                if ($articulo['id'] === $id) {
                    $this->id = $articulo['id'];
                    $this->nombre = $articulo['nombre'];
                    $this->descripcion = $articulo['descripcion'];
                    $this->precio = $articulo['precio'];

                    $encontrado = true;
                }
            }

            return $encontrado;
        }

        public static function fromArray(array $datos): self
        {
            return new self(
                id: ($datos['id'] ?? '')
            );
        }
    }