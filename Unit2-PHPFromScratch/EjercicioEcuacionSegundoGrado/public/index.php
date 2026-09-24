<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6, Segundo grado</title>
</head>
<body>

    <h1>Ejercicio Ecuacion segundo grado</h1>
    
    <?php 
        $a = 2;
        $b = 5;
        $c = 10;

        $solucionSegGrado = (-$b+-sqrt($b**2-4*$a*$c)/2*$a);
    ?>

    <p>Si hacemos la ecuacion de segundo grado que es "ax2 + bx + c = 0"</p>
    <p>Esto lo vamos a hacer con los valores, a de <?= $a ?>, b de <?= $b ?> y c de <?= $c ?></p>
    <p>Esto nos da una solucion de: <?= $solucionSegGrado ?></p>

</body>
</html>