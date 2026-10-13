<?php
    class Productos{
        //Usamos el trait
        use Identificable;
        
        private $id;

        public function __construct()
        {
            $this -> id = $this -> generarId();
        }

        protected function  getPrefijoId():string
        {
            $prefijo = "PRO";
            return $prefijo;
        }
    }