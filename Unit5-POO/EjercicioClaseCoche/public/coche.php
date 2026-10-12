<?php
    class coche{
        //Constructor con atrivutos y demas
        public function __construct(
            private  string $color,
            private string $marca,
            private string $modelo,
            private int $velocidad,
            private int $caballos,
            private int $plazas 
        )
        {}

        //Getters y Setters
        public function getColor():string
        {
            return $this -> color; 
        }

        public function getMarca():string
        {
            return $this -> marca; 
        }

        public function getModelo():string
        {
            return $this -> modelo; 
        }

        public function getVelocidad():int
        {
            return $this -> velocidad; 
        }

        public function getCaballos():int
        {
            return $this -> caballos; 
        }

        public function getPlazas():int
        {
            return $this -> plazas; 
        }

        public function setColor(string $colorU):void{
            $this -> color = $colorU;
        }

        public function setMarca(string $marcaU):void{
            $this -> marca = $marcaU;
        }

        public function setModelo(string $modeloU):void{
            $this -> modelo = $modeloU;
        }

        public function setVelocidad(string $velocidadU):void{
            $this -> velocidad = $velocidadU;
        }

        public function setCaballos(string $caballosU):void{
            $this -> caballos = $caballosU;
        }

        public function setPlazas(string $plazasU):void{
            $this -> plazas = $plazasU;
        }

        public function subirVelocidad(int $velocidadMas):void{
            $this -> velocidad += $velocidadMas;
        }
        
        public function bajarVelocidad(int $velocidadMenos):void{
            $this -> velocidad -= $velocidadMenos;
        }
    }