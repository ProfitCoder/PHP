<?php
    class Usuario{
        //Usamos el trait
        use Identificable;
        
        private $id;

        public function __construct()
        {
            $this -> id = $this -> generarId();
        }

        protected function  getPrefijoId():string
        {
            $prefijo = "USR";
            return $prefijo;
        }
    }