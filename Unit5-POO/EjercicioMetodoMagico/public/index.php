<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <?php 

        require_once __DIR__ . '/Persona.php';

         $persona = new Persona("Jose Juan", 1, "Murcia");

        echo 'Nombre: ' . $persona->getNombre() . '<br>';
        echo 'Edad: ' . $persona->getEdad() . '<br>';
        echo 'Ciudad: ' . $persona->getCiudad() . '<br>';
        echo $persona->getHola();
    
    ?>
</body>
</html>