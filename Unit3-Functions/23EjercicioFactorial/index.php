<?php
    include __DIR__ . '/funciones.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factorial</title>
</head>
<body>
    <p>

    <?php 
        $numero = 5;
    ?>

        El factorial de <?= $numero ?> es:
        <?= factorial($numero) ?>
    </p>
</body>
</html>