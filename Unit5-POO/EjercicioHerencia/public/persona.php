<?php
    class persona{
        protected string $nombre;
        protected string $apellido;

        public function constructor(string $nombre,string $apellido){
            $this -> nombre = $nombre;
            $this -> apellido = $apellido;
        }

        public function getNombre(){
            return $this -> nombre;
        }

        public function getApellido(){
            return $this -> apellido;
        }

        public function getNombreCompleto(){
            return $this -> nombre." ".$this -> apellido;
        }
    }
?>

