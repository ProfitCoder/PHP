<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Usar Traits</title>
</head>
<body>

    <h1>Ejercicio Usar Traits</h1>

    <?php  
        require_once __DIR__ . "/Identificable.php";
        require_once __DIR__ . "/Usuario.php";
        require_once __DIR__ . "/Productos.php";

        $usuario = new Usuario();

        echo $usuario -> generarId();

        echo "<br><br>";

        $producto = new Productos();

        echo $producto -> generarId();
    ?>
</body>
</html>