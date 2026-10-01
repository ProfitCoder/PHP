<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Funciones 12</title>
</head>
<body>
    <h1>Ejercicio Funciones 12</h1>

    <?php
        $pass = $_GET["pass"];
        $mensajeCorrecto = "Se ha validado correctamente";
        $mensajeError = "La validacion ha fallado";
           

            function validacionPassword(string $pass) : bool {
                $solVal = false;

                if(strlen($pass) >= 6 && strlen($pass) <= 15)
                {
                    $solVal = (preg_match("([0-9]+)",$pass) && 
                    preg_match("([A-Z]+)",$pass) &&
                    preg_match("([a-z]+)",$pass) &&
                    preg_match("([/.&\.-_!]+)",$pass))?
                    true:false;
                }

                return $solVal;
            }

            echo (validacionPassword($pass))?$mensajeCorrecto:$mensajeError;

            
            /*
            function preg_match(
                string $pattern,
                string $subject,
                array &$matches = null,
                int $flags = 0,
                int $offset = 0,
            ) : int|false
            */
        
    ?>
</body>
</html>



