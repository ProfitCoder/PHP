<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>

    <h1>Ejercicio 12</h1>

    <?php
        date_default_timezone_set('Europe/Madrid');

        echo "Hoy: " . date('d/m/Y') . "<br>";
        echo "Ayer: " . date('d/m/Y', strtotime('-1 day')) . "<br>";
        echo "Mañana: " . date('d/m/Y', strtotime('+1 day')) . "<br>";
    ?>
</body>
</html>