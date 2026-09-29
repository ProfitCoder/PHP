<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>

    <h1>Ejercicio 10</h1>

    <?php 
        $cadena = "Hola, me gusta PHP";
        $cadenaNueva = "";

        for($i = strlen($cadena) - 1;$i >= 0;$i--)
        {

            $cadenaNueva .= $cadena[$i];

        }
    ?>

    <p>La cadena invertida es: <?= $cadenaNueva ?></p>

</body>
</html>