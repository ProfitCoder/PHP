<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Formularios 3</title>
</head>
<body>
    <h1>Ejercicio Formularios 3</h1>
    <?php
        $cadenaTrab = "Hola, mundo. ¿Qué tal estás hoy?<br>";

        //Operaciones de string
        echo "La cadena ".$cadenaTrab." Tiene una longitud de ".strlen($cadenaTrab)." palabras.";           //Longitud de la cadena

        echo "<br>".substr($cadenaTrab,0,12)."<br>";                           //Caracter de la cadena del 0 - 12

        echo "Si la palabra Mundo esta contenida, nos devolvera la posicion en la que esta, nos ha devuelto: ".str_contains($cadenaTrab,"mundo")."<br>";                 //Buscar una palabra en mayus y minus, si esta pone un 1 si no un 0

        echo "Si la palabra mundo esta contenida, nos devolvera la posicion en la que esta, nos ha devuelto: ".str_contains($cadenaTrab,"mundo")."<br>";                 //Buscar una palabra en mayus y minus, si esta pone un 1 si no un 0

        echo strtoupper($cadenaTrab);

        echo strtolower($cadenaTrab);

        echo stristr($cadenaTrab,".");
    ?>
</body>
</html>