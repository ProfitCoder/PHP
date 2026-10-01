<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Funciones 1</title>
</head>
<body>
    <h1>Ejercicio Funciones 1</h1>
    <?php 
        $cadenaovalor = "Hola";

        if(is_string($cadenaovalor))
        {
            if(is_null($cadenaovalor))
            {
                echo "Esta cadena esta vacia";
            }
            else
            {
                echo "La cadena es ".$cadenaovalor;
            }
        }
        else
        {
            echo "Esto no es una cadena, es un valor: ".$cadenaovalor;
        }
    ?>
</body>
</html>