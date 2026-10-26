<?php
    declare(strict_types=1);

    namespace Models;

    class Producto
    {
        //Atributos

        public function __construct(
            private int $id,
            private string $nombre,
            private float $precio,
            private int $stock
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

        public function getPrecio(): float
        {
            return $this -> precio;
        }

        public function getStock(): int
        {
            return $this -> stock;
        }

        public function setId(int $valorIntro):void
        {
            $this -> id = $valorIntro;
        }

        public function setNombre(string $nombreIntro):void
        {
            $this -> nombre = $nombreIntro;
        }

        public function setPrecio(float $precioIntro):void
        {
            $this -> precio = $precioIntro;
        }

        public function setStock(int $stockNew):void
        {
            $this -> stock = $stockNew;
        }

        //function for Price With IVA
        public function getPrecioConIva(float $iva = 0.21): float
        {
            return $this->precio * (1 + $iva);
        }
    }