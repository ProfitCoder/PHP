<?php
    include __DIR__ . '/funciones.php';

    $numero = -5;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factorial negativo</title>
</head>
<body>
    <p>
        El factorial de <?= $numero ?> es:
        <?= factorial($numero) ?>
    </p>
</body>
</html>