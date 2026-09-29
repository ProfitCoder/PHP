<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <?php
        $a = (float) ($_GET['a'] ?? 0);
        $b = (float) ($_GET['b'] ?? 0);
        $operacion = $_GET['operacion'] ?? '';

        switch ($operacion) {
            case 'sumar':
                $resultado = ($a + $b);
                break;
            case 'restar':
                $resultado = ($a - $b);
                break;
            case 'multiplicar':
                $resultado = ($a * $b);
                break;
            case 'dividir':
                $resultado = ($b != 0) ? $a / $b : 'No se puede dividir entre cero';
                break;
            default:
                $resultado = 'Indica una operación en la URL';
        }

        echo "Resultado: " . $resultado;
    ?>
</body>
</html>