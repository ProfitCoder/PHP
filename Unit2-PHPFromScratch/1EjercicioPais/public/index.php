<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

    <p>Ejercicio 1</p>

    <?php

        //Create Variables
        const PAIS = "España" ;                     //Para hacerlo constante
        define("HABITANTES",2000000);              //Para hacerlo constante
        $continente = "Europa";

        /*
        echo "Este es el valor de el pais ".PAIS ."</br>";
        echo "Tiene un total de ".HABITANTES ." Habitantes. </br>";
        echo "Esta usted en el continente ".$continente ."</br>";
        */

    ?>

    <p>Estamos en un pais llamado <?= PAIS ?> , que tiene un total de <?= HABITANTES ?> habitantes, y esta en el continent de <?= $continente ?></p>

</body>
</html>