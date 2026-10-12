<?php
    declare(strict_types=1);
    require_once __DIR__ . "/persona.php";
    require_once __DIR__ . "/cliente.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php         
        $cliente1 = new Cliente("Pablo","Fernandez","327183"); 

        var_dump($cliente1);
    ?>
</body>
</html>