<?php
    //Funciones
    $palos = array("oros","copas","espadas","bastos");

    function crearBarajaCompleta(array &$palos){
        $baraja = [];

        for($i = 0;$i < count($palos);$i++){
            for($n = 1;$n <= 12;$n++){
                $baraja[] = [$palos,$n];
            }
        }

        return $baraja;
    }

    function crearBaraja(array &$palos){
        $baraja = [];

        for($i = 0;$i < count($palos);$i++){
            for($n = 1;$n <= 12;$n++){
                if($n != 8 && $n != 9){
                    $baraja[] = [$palos,$n];
                }
            }
        }

        return $baraja;
    }

    function barajarbaraja(array &$baraja): void{
        shuffle($baraja);
    }

    function mostrarCartasImg(array $baraja){
        for($i = 0; $i < count($baraja);$i++){
            $carta = $baraja[$i];
            echo 'img';
        }    
    }
?>