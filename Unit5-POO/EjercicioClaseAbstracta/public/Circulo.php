<?php
    class Circulo extends FiguraGeometrica{
        
        public function __construct(
            string $nombre,
            private float $radio
        )
        {
            parent::__construct($nombre);
        }

        public function calcularArea():void
        {
            $area = pow(($this -> radio),2)*M_PI;

            echo "<br>El area es: ".$area;
        }

        public function mostrarNombre():void
        {
            echo "<br>El nombre de la figura es: ".$this -> nombre;
        } 
    }