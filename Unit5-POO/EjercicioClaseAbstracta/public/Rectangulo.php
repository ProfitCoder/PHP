<?php
    class Rectangulo extends FiguraGeometrica{
        
        public function __construct(
            string $nombre,
            private float $ancho,
            private float $alto
        )
        {
            parent::__construct($nombre);
        }

        public function calcularArea():void
        {
            $area = ($this -> ancho)*($this -> alto);

            echo "<br>El area es: ".$area;
        }

        public function mostrarNombre():void
        {
            echo "<br>El nombre de la figura es: ".$this -> nombre;
        } 
    }