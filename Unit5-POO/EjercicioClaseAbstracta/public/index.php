<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Clase Abstracta</title>
</head>
<body>

    <h1>Ejercicio Clase Abstracta</h1>

    <?php 
        require_once __DIR__ . "/FiguraGeometrica.php";
        require_once __DIR__ . "/Circulo.php";
        require_once __DIR__ . "/Rectangulo.php";

        $circulo1 = new Circulo("Circulo 1",5.6);

        $circulo1 -> calcularArea();

        $circulo1 -> mostrarNombre();

        echo "<br>";

        $rectangulo1 = new Rectangulo("Rectangulo Perez",5,7);

        $rectangulo1 -> calcularArea();

        $rectangulo1 -> mostrarNombre();

    ?>
</body>
</html>