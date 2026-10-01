<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Funciones 2</title>
</head>
<body>
    <h1>Ejercicio Funciones 2</h1>
    <?php

        $exp = $_GET["exp"];
        $base = $_GET["base"];

        if(is_string($exp) || is_string($base))
        {
            echo "Me has pasado un caracter que no es numerico, ERROR"; 
        }
        else
        {
            $exp = settype($exp,"int");
            $base = settype($base,"int");

            function potencia($base,$exp=2){
                return $base**$exp;
            }

            echo "El resultado de base: ".$base." y exponente: ".$exp." es igual a ".potencia($base,$exp);
        }

    ?>
</body>
</html>