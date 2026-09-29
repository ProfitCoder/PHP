<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Ejercicio 14</h1>
    
    <?php
        if (!isset($_GET['a'], $_GET['b']) || !is_numeric($_GET['a']) || !is_numeric($_GET['b'])) {
            echo "Debes indicar dos números en la URL.";
        } else {
            $a = (float) $_GET['a'];
            $b = (float) $_GET['b'];

            if ($a >= $b) {
                echo "El primer número debe ser menor que el segundo.";
            } else {
                for ($i = floor($a) + 1; $i < $b; $i++) {
                    echo $i;
                }
            }
        }
    ?>

</body>
</html>
