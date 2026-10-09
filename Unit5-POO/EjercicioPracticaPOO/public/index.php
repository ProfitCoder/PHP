<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJercicio Practica POO</title>
</head>
<body>
    <h1>Ejercicio Practica POO</h1>

    <?php 
        include "Producto.php";
        $prod = new Producto;
        $prod -> setNombre("Salmón");
        $prod -> setPrecio(15.9);
    ?>

    <h2>Producto: <?= $prod->getNombre()." ".$prod->getPrecio()." €"; ?></h2>
</body>
</html>