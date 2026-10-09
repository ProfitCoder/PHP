<?php 
    
    class Producto{
        //Atributos
        private string $nombre;
        private float $precio;


        public function getNombre(){
            return $this -> nombre;
        }

        public function getPrecio(){
            return $this -> precio;
        }

        public function setNombre(string $nombre){
            $this -> nombre = $nombre;
        }

        public function setPrecio(float $precio){
            $this -> precio = $precio;
        }
    }
?>