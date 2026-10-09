<?php
    class CuentaBancaria{
        //Constructor
        public function __construct(
            protected string $titular,
            protected float $saldo
        )
        {}   

        //Metodo para que te devuelvan el saldo del Objeto
        public function getSaldo():float{
            return $this -> saldo;
        }

        public function setSaldo(float $cantidad):void{
            $this -> saldo = $cantidad;
        }

        
        //Metodo para poder ingresar dinero
        public function ingresar(float $cantidad):float{
            try
            {
                if($cantidad < 0){
                    throw new Exception("El número cantidad es menor a 0");
                }
                else
                {
                    $this -> saldo += $cantidad;
                }  
            }
            catch (Exception $e){
                echo "Error ".$e -> getMessage();
            }

            return $this -> saldo;
        }


        //Metodo para poder retirar dinero
        public function retirar(float $cantidadRetirar):float{
            try
            {
                if(($cantidadRetirar >= $this -> saldo) || ($cantidadRetirar < 0))
                {
                    throw new Exception("La cantidad es Menor que 0 o no tienes tanto saldo");
                }
                else
                {
                    $this -> saldo -= $cantidadRetirar;
                }
            }
            catch (Exception $f)
            {
                echo "<br><br> Error ".$f -> getMessage();
            }

            return $this -> saldo;
        }
    }
