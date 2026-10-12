<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Instanciar Coche</title>
    <?php require_once __DIR__ . "/coche.php"; ?>
</head>
<body>
    <h1>Datos del coche</h1>
    <?php 
        $coche1 = new coche("Rojo","Ferrari","SF90",299,700,2);

        echo "<br>Color: ".$coche1 -> getColor()."<br>Marca: ".$coche1 -> getMarca()."<br>Modelo: ".$coche1 -> getModelo()."<br>Velocidad: ".$coche1 -> getVelocidad()."<br>Caballos: ".$coche1 -> getCaballos()."<br>Plazas: ".$coche1 -> getPlazas()."<br>";

        echo "<br>Ponemos el color amarillo<br>";

        $coche1 -> setColor("amarillo");

        echo "<br>El color de nuestro coche es ahora: ".$coche1 -> getColor();
    ?>
</body>
</html>