<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Cambio de Euros a Dolares</h1>

    
    <?php
        $euros = 45;
        $dolar = 1.14;

        //echo "Tenemos ".$euros." y lo vamos a pasar a dolares, simplemente hay que multiplicar por ".$dolar."</br>";

        $cambio = $euros*$dolar;

        //echo "Así que al cambio, ".$euros." euros, son: ".$cambio." dolares. </br>";

    ?>

    <p>Tenemos <?= $euros ?> euros, y lo vamos a pasar a dolares, multiplicando <?= $dolar ?>.</p>
    <p>As&iacute; que al cambio <?= $euros ?> son: <?= $cambio ?> dolares.</p>

</body>
</html>