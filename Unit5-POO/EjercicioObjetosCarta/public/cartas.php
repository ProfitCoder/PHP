<?php
    class cartas{
        const array PALOS = ["bastos","palos","oros","espadas"];
        const array NOMBRE = [ 
            1 => "AS", 2 => "Dos", 3 => "Tres", 4 => "Cuatro"
        ];

        //Creamos el constructor
        public function __construct(
            private string $palo,
            private string $nombre
        )
        {}

        //Getters & Setters

        public function getPalo()
        {
            return $this -> palo;
        }

        public function getNombre()
        {
            return $this -> nombre;
        }

        public function setPalo(string $paloCarta){
            $this -> palo = $paloCarta;
        }
    
        public function setNombre(string $nombreCarta){
            $this -> nombre = $nombreCarta;
        }
    }