<?php
const N = 10;

$array1 = [];
$array2 = [];
$resultado = [];

// Rellenar los dos arrays independientes.
for ($i = 0; $i < N; $i++) {
    $array1[$i] = $i + 1;
    $array2[$i] = N - $i;
}

// Sumar los elementos de la misma posición.
for ($i = 0; $i < N; $i++) {
    $resultado[$i] = $array1[$i] + $array2[$i];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones aritméticas con arrays</title>
</head>
<body>
    <h1>4. Operaciones aritméticas</h1>

    <p>
        El primer array contiene los números del 1 al <?= N ?>,
        y el segundo los contiene en orden inverso.
        El tercer array suma los elementos de la misma posición.
    </p>

    <table>
        <thead>
            <tr>
                <th>Posición</th>
                <th>Array 1</th>
                <th>Array 2</th>
                <th>Suma</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < N; $i++): ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $array1[$i] ?></td>
                    <td><?= $array2[$i] ?></td>
                    <td><?= $resultado[$i] ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</body>
</html>