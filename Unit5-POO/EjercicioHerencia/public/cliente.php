<?php
    class cliente extends persona{
        private string $codigo;

        public function _constructorCliente(string $nombre,string $apellido, string $codigo){
            parent::constructor($nombre,$apellido);
            $this -> codigo = $codigo;
        }

        public function getCodigo(): string {
            return $this->codigo;
        }
    }
?>