<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejericio Propuesto POO</title>
</head>
<body>
    <h1>Ejercicio Propuesto POO</h1>
    
    <?php 
        require_once __DIR__ . "/CuentaBancaria.php";
        require_once __DIR__ . "/CuentaAhorro.php";

        $cuenta1 = new CuentaBancaria("Pablo",5000);
        echo "<br>".$cuenta1 -> getSaldo();
        $cuenta1 -> ingresar(100);
        echo "<br>".$cuenta1 -> getSaldo();
        $cuenta1 -> retirar(3000);
        echo "<br>".$cuenta1 -> getSaldo();

        $cuentaAhorro1 = new CuentaAhorro("Juan",78220,0.5);
        $cuentaAhorro1 -> resumen();
        $cuentaAhorro1 -> interesAnual();
        $cuentaAhorro1 -> resumen();
    ?>
</body>
</html>