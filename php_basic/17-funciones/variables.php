<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Globales y locales</title>
    <style>
        * {
            color: #fff;
            background-color: black;
            margin: 1rem;
        }

        hr {
            border-color: white;
        }
    </style>
</head>

<body>
    <h1>Variables Globales y locales:</h1>
    <div>
        <ul>
            <li>Variable globales: Son las que se declaran fuera de una funcion y estan disponibles dentro y fuera de las funciones</li>
            <li>Variables locales: Son las que se declaran dentro de una funcion y no pueden ser usadas dentro de una función, solo están disponible dentro. A no ser que hagamos un return.</li>
        </ul>
    </div>
    <?php
    // variable global
    $frase = "La práctica hace al maestro.";

    function mostrarFrase()
    {
        global $frase;
        echo "<i>$frase</i>";

        $year = 2024;
        return $year;
    }

    echo mostrarFrase();

    // FUNCIONES VARIABLES
    function buenosDias()
    {
        return "¡Buenos días!";
    }

    function buenasTardes()
    {
        return "¡Buenas tardes!";
    }

    function buenasNoches()
    {
        return "¿Comó estuvo tu día?";
    }
    echo "<br>";
    
    $horario = $_GET['horario'];
    // $horario = "Noches";
    // La concatenación funciona con las funciones variables pero guardada en una variable rimero
    $varFuct = "buenas".$horario;
    echo $varFuct();
    ?>
</body>

</html>