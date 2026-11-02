<?php
    $provincias = [
        "Almería",
        "Cádiz",
        "Córdoba",
        "Granada",
        "Huelva",
        "Jaén",
        "Málaga",
        "Sevilla"
    ];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrado de provincias</title>
</head>
<body>
    <h1>7. Borrado</h1>

    <h2>Array original</h2>

    <table>
        <tr>
            <th>Índice</th>
            <th>Provincia</th>
        </tr>

        <?php foreach ($provincias as $indice => $provincia): ?>
            <tr>
                <td><?= $indice ?></td>
                <td><?= $provincia ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?php
    // Borrar la provincia con índice 2: Córdoba.
    $indiceBorrar = 2;
    unset($provincias[$indiceBorrar]);
    ?>

    <h2>Array después de borrar el índice <?= $indiceBorrar ?></h2>

    <table>
        <tr>
            <th>Índice</th>
            <th>Provincia</th>
        </tr>

        <?php foreach ($provincias as $indice => $provincia): ?>
            <tr>
                <td><?= $indice ?></td>
                <td><?= $provincia ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>