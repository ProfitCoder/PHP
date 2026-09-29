<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <link rel="StyleSheet" href="./css/style.css">
</head>
<body>
    
    <?php

        if(empty($_GET["nombre"])){
            echo "Error, falta el parámetro nombre";
        } else if($_GET["nombre"] === "Maria") {
            echo "Hola ".$_GET["nombre"];
        } else {
            echo "Acceso no autorizado ".$_GET["nombre"]."<br>";
        }

        $n1 = (int)$_GET["num1"];
        $n2 = (int)$_GET["num2"];

        if(empty($n1) || empty($n2)){
            echo "Faltan parámetros, revisa num1 y num2";
        }
        else if(!is_numeric($n1) || !is_numeric($n2))
        {
            echo "num1 y num2 tienen que ser números";
        }
        else
        {
            echo "Aqui tienes los números sumados ". $n1 + $n2 . "</br>";

            echo "El num1 tiene valor de : ".gettype($n1) ."</br>";
            echo "El num2 tiene valor de : ".gettype($n2) ."</br>"."</br>";

        }





        $idioma1 = "Español";
        $idioma2 = "Inglés";

        $p1e = "uno";
        $p1i = "one";

        $p2e = "dos";
        $p2i = "two";

        $p3e = "tres";
        $p3i = "three";

        $p4e = "cuatro";
        $p4i = "four";

        $p5e = "cinco";
        $p5i = "five";

        $p6e = "seis";
        $p6i = "six";

        $p7e = "siete";
        $p7i = "seven";

        $p8e = "ocho";
        $p8i = "eight";

        $p9e = "nueve";
        $p9i = "nine";

        $p10e = "diez";
        $p10i = "ten";
    
    ?>

    <table>
        <thead>
            <tr>
                <td><?= $idioma1 ?></td>
                <td><?= $idioma2 ?></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $p1e ?></td>
                <td><?= $p1i ?></td>
            </tr>
            <tr>
                <td><?= $p2e ?></td>
                <td><?= $p2i ?></td>
            </tr>
            <tr>
                <td><?= $p3e ?></td>
                <td><?= $p3i ?></td>
            </tr>
            <tr>
                <td><?= $p4e ?></td>
                <td><?= $p4i ?></td>
            </tr>
            <tr>
                <td><?= $p5e ?></td>
                <td><?= $p5i ?></td>
            </tr>
            <tr>
                <td><?= $p6e ?></td>
                <td><?= $p6i ?></td>
            </tr>
            <tr>
                <td><?= $p7e ?></td>
                <td><?= $p7i ?></td>
            </tr>
            <tr>
                <td><?= $p8e ?></td>
                <td><?= $p8i ?></td>
            </tr>
            <tr>
                <td><?= $p9e ?></td>
                <td><?= $p9i ?></td>
            </tr>
            <tr>
                <td><?= $p10e ?></td>
                <td><?= $p10i ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>