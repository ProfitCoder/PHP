<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Array de Arrays</title>
</head>
<body>
    <h1>Ejercicio de Array de Arrays</h1>
    <?php
        $arrayArrays = array(
            [
                "NumRegistro" => 1984,
                "Nombre" => "Juanjo",
                "Apellido" => "Martinez",
                "Telefono" => 658895456,
                "FechaNac" => "18/04/2026"
            ],
            [
                "NumRegistro" => 1996,
                "Nombre" => "Emma",
                "Apellido" => "Gutierrez",
                "Telefono" => 689523356,
                "FechaNac" => "18/04/2026"
            ],
            [
                "NumRegistro" => 1895,
                "Nombre" => "Pablo",
                "Apellido" => "Fernandez",
                "Telefono" => 659956332,
                "FechaNac" => "18/04/2026"
            ]
        );

        function devolverNumRegistro($arrayArrays){
            foreach($arrayArrays as $profesor){
                foreach($profesor as $indice => $valor){
                    if($indice == "NumRegistro"){
                        echo "<br>".$valor;
                    }

                }
            }
        }

        echo "Numeros de registro: <br>";
        devolverNumRegistro($arrayArrays);

        function devolverConArrayMap($arrayArrays){
            return array_map(fn(int $numRegistro):
                int => );
        }

        

    ?>
</body>
</html>