<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>

    <?php
        $longitud = $_GET['longitud'] ?? 0;

        if ($longitud >= 10 && $longitud <= 1000) {
            print str_repeat('-', (int) $longitud);
        } else {
            print "Indica una longitud entre 10 y 1000.";
        }
    ?>
</body>
</html>