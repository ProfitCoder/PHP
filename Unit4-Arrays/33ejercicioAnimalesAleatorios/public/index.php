<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Arrays Animales</title>
</head>
<body>
    <h1>Ejercicio Arrays animales</h1>
    
    <?php
        $cantidad = random_int(20,30);

        echo "Tenemos un array de ".$cantidad." Elementos.";

        function generarAnimales(int $cantidad): array
        {
            return array_map(
                fn(): int => random_int(128000,128060),
                range(1,$cantidad)
            );
        }

        function codigosAEmojis(array $codigos): string
        {
            $emojis = array_map(fn(int $codigo):
                    string => mb_chr($codigo,'UTF-8'), $codigos);
            
            return implode(" ",$emojis);
        }

        $arrayGuardado = generarAnimales($cantidad);

        echo "<br>".codigosAEmojis($arrayGuardado);

        $descartado = $arrayGuardado[array_rand($arrayGuardado)];

        echo "<br>El animal que vamos a descartar es: <br>".mb_chr($descartado,'UTF-8');

        $restante = array_diff($arrayGuardado,[$descartado]);

        echo "<br> En array final es: <br>".codigosAEmojis($restante);
    ?>
</body>
</body>
</html>