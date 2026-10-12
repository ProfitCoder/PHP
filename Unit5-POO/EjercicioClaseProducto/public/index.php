<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Prod</title>
</head>
<body>
    <?php

    require_once __DIR__ . "/producto.php";

    $producto1 = new Producto();
    $producto2 = new Producto();
    $producto3 = new Producto();
    $producto4 = new Producto();

    //Podemos usar :: Para acceder a un metodo de la clase
    echo "Cantidad de productos creados: ".Producto::obtenerCantidadProductos();

    //Utilizamos :: para acceder a una constante de la clase
    echo "<br>IVA: ".Producto::IVA;

    ?>
</body>
</html>