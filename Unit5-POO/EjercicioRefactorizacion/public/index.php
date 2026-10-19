<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>

</head>
<body>

    <?php
        require_once 'CalcularEnvio.php';
        require_once 'EnvioBase.php';
        require_once 'EnvioEstandar.php';
        require_once 'EnvioExpress.php';
        require_once 'EnvioInternacional.php';

        $peso = 20;
        $distancia = 10;

        $envio = new EnvioExpress($peso, $distancia, 'express');
        $coste = $envio->calcularCoste($peso, $distancia);

        echo "<br>El paquete pesa ".$peso." kg y tiene que viajar ".$distancia." Km.<br>";
        echo "El coste del envío es: $coste €";
    ?>

</body>
</html>