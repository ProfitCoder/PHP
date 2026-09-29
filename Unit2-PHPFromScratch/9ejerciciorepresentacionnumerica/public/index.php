<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    
    <h1>Ejercicio 9</h1>

    <h2>Tabla de los 20 primeros números en diferentes bases</h2>

    <table>
        <thead>
            <tr>
                <td>Decimal</td>
                <td>Binario</td>
                <td>Octal</td>
                <td>Hexadecimal</td>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 0;$i <= 20;$i++): ?>
                <tr>
                    <td><?php printf(" %02d ", $i); ?></td>
                    <td><?php printf(" %06d ", decbin($i)); ?></td>
                    <td><?php printf(" %02d ", decoct($i)); ?></td>
                    <td><?php printf(" %02s ", dechex($i)); ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>

</body>
</html>