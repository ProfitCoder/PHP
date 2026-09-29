<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>

    <h1>Ejercicio 11</h1>

    <?php
        for ($fila = 0; $fila < 5; $fila++) {
            echo str_repeat('&nbsp;', 4 - $fila);
            echo str_repeat('*', 2 * $fila + 1);
            echo '<br>';
        }
    ?>
</body>
</html>