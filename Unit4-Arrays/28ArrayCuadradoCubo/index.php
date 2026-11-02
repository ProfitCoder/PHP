<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cuadrado y cubo</title>
</head>
<body>
    <?php
    $numeros = [];
    $cuadrados = [];
    $cubo = [];

    for ($i = 0; $i < 20; $i++) {
        $numeros[$i] = rand(0, 100);
        $cuadrados[$i] = $numeros[$i] ** 2;
        $cubo[$i] = $numeros[$i] ** 3;
    }

    echo "<table border='1'>";
    echo "<tr><th>Número</th><th>Cuadrado</th><th>Cubo</th></tr>";

    for ($i = 0; $i < 20; $i++) {
        echo "<tr>";
        echo "<td>" . $numeros[$i] . "</td>";
        echo "<td>" . $cuadrados[$i] . "</td>";
        echo "<td>" . $cubo[$i] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>