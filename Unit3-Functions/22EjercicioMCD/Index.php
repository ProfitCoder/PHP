<?php
include __DIR__ . '/funciones.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Máximo común divisor</title>
</head>
<body>
    <p>El máximo común divisor de 2 y 7 es: <?= calcularMCD(2, 7) ?></p>
    <p>El máximo común divisor de 6 y 12 es: <?= calcularMCD(6, 12) ?></p>
</body>
</html>