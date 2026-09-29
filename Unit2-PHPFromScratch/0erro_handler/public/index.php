<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        function manejadorErroes($errno, $str, $file, $line){
            echo "Ocurrión el error: $errno";
        }
        set_error_handler("manejadorErrores")
        $a = $b; //Causa error,$a y  $b no estan inicializada
    ?>
</body>
</html>