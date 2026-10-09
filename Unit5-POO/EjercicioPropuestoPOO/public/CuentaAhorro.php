<?php
    class CuentaAhorro extends CuentaBancaria{

        //Definicion de constructor del padre y de nueva variable
        public function __construct(
            string $titular, float $saldo, private float $intereses
        )
        {
            return parent::__construct($titular, $saldo);
        }

        //Getters & Setters
        public function getInteres():float{
            return $this -> intereses;
        }

        public function setInteres(float $cantidad):void{
            $this -> intereses = $cantidad;
        }

        
        //Creamos el metodo de Resumen
        public function resumen()
        {
            echo "<br><br>Titular: ".$this -> titular." | Saldo: ".CuentaBancaria::getSaldo();
        }

        //Creamos el metodo para el interes Anual
        public function interesAnual()
        {
            $this -> saldo += ($this -> saldo * $this -> getInteres());
        }
    }