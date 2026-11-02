<?php

    require_once __DIR__ . "/Numero.php";

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobar si es primo</title>
</head>
<body>
    <?php
        $numero = 4;

        if (Numero::ComprobarPrimo($numero)) 
        {
            echo "El número $numero es primo";
        } 
        else 
        {
            echo "El número $numero no es primo";
        }
    ?>
</body>
</html>