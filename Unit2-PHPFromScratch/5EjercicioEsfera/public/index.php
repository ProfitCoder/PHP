<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5, Esfera</title>
</head>
<body>

    <h1>Ejercicio Esfera</h1>

    <?php 
        $radio = 5;
        $longitud = 2*M_PI*$radio;
        $superficie = M_PI*($radio**2);
        $volumen = 1.333333333333*(M_PI*($radio**3));

        printf("El radio es %d, con ello sacamos una longitud de %.2f, una superficie de %.2f y un volumen de %.2f",$radio,$longitud,$superficie,$volumen)
    ?>


</body>
</html>