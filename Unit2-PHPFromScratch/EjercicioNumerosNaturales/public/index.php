<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>

    <h1>Ejercicio 4</h1>

    <?php 
        $num = 0; 
        $natural = 0;
    ?>


    <?php while($num <= 40): ?>
        
        <?php 
            $natural = $num**3;
        ?>

        <p>Los cuarenta numeros naturales, <?= $num ?> son: <?= $natural ?></p>
        
        <?php $num++ ?>

    <?php endwhile ?>
</body>
</html>