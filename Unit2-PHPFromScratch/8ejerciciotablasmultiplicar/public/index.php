<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>

    <h1>Ejercicio 8</h1>

    <?php

        $num = 2;
        
        echo "La tabla del ".$num."</br>";

        for($i = 0;$i <= 10;$i++){
            $resultado = $num*$i;
            echo $num." x ".$i." = ".$resultado."</br>";
        }
    ?>
</body>
</html>