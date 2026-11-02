<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Relleno automático</title>
</head>
<body>
    <?php
        $numeros = [];
        $valor = 1;

        while (count($numeros) < 120) {
            $numeros[] = $valor;
            $valor++;
        }

        print_r($numeros);

    ?>
</body>
</html>