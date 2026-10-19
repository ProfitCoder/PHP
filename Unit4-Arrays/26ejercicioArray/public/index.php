<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Array 1</title>
</head>
<body>
    <h1>Ejercicio Array 1</h1>

    <?php
        function mostrarArray($array) {
            for ($i = 0; $i < count($array); $i++) {
                echo $array[$i] . " ";
            }
            echo "<br>";
        }

        $arrayPrueb = [4,8,6,2,3,47,5,12];

        for($i = 0;$i < count($arrayPrueb);$i++)
        {
            echo $arrayPrueb[$i];
        }

        echo "<br>Array normal: ";
        mostrarArray($arrayPrueb);
        
        sort($arrayPrueb);

        echo "Array ordenado: ";
        mostrarArray($arrayPrueb);

        


    ?>  
</body>
</html>