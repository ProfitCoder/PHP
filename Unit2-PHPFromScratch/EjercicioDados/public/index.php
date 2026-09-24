<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>Tirar dados</h1>


    <?php 

        $dado1 = random_int(1,6);
        $dado2 = random_int(1,6);

    ?>

    <p>
        <img src="./img/<?= $dado1 ?>.png" alt="primer dado">
        <img src="./img/<?= $dado2 ?>.png" alt="Segundo dado">
    </p>
    
    <?php if($dado1 === $dado2): ?>

        <p>Ha sacaado una pareja de valores iguales: <?= $dado1 ?></p>
    
    <?php else: ?>
    
        <p>No ha sacado pareja.</p>
        <p>El valor más alto en esta tirada es <?= max($dado1, $dado2) ?>.</p>
    
    <?php endif ?>

</body>
</html>