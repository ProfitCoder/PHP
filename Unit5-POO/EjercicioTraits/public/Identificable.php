<?php
    trait Identificable{
        //Creamos el único metodo de la clase
        public function generarId():string
        {
            $numero = random_int(1000,9999);
            return $this -> getPrefijoId() . $numero;
        }

        abstract protected function getPrefijoId(): string;
    }