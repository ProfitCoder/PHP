<?php
const N = 10;

$array = [];
$complementario = [];

for ($i = 0; $i < N; $i++) {
    $array[$i] = rand(0, 1);
    $complementario[$i] = 1 - $array[$i];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array complementario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f6f8;
            color: #243447;
        }

        table {
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #074561;
            color: white;
        }
    </style>
</head>
<body>
    <h1>5. Complementario</h1>

    <p>Array aleatorio de ceros y unos y su complementario.</p>

    <table>
        <tr>
            <th>Array original</th>
            <?php for ($i = 0; $i < N; $i++): ?>
                <td><?= $array[$i] ?></td>
            <?php endfor; ?>
        </tr>
        <tr>
            <th>Complementario</th>
            <?php for ($i = 0; $i < N; $i++): ?>
                <td><?= $complementario[$i] ?></td>
            <?php endfor; ?>
        </tr>
    </table>
</body>
</html>