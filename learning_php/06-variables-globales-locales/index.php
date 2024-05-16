<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<style>
    * {
        background-color: black;
        color: white;
    }
    hr {
        border-color: white;
    }
</style>

<body>
    <?php
    /*
    Variables locales: Son las que se declaran dentro de una función y no pueden ser usadas fuera de esa function, a menos de que se le haga un return.
    Variables globales: Son las que se declaran fuera de una función y están disponibles dentro y fuera de ellas.
    El nombre de una function puede ser una variable
    */
    $frase = "Ni los genios son tan genios, ni los mediocres tan mediocres.";

    function miFrase()
    {
        // Es necesario declararla como global para poder usarla
        global $frase;
        echo "<h3>$frase</h3>";
    }
    miFrase();

    // Otra manera de invocar la function
    $laFrase = "miFrase";
    echo $laFrase();

    // Otra manera de invocar la function
    $Frase = "Frase";
    $miFuncion = "mi" . $Frase;
    echo $miFuncion();

    echo "<hr>";
    echo "<h2>Funciones predefinidas</h2>";
    // Debuggear
    var_dump($miFuncion);

    //fechas
    echo date('d-m-y');

    //Matemáticas
    echo "<br/>";
    echo "Número aleatorio entre 3 y 7:" . rand(3, 7);
    echo "<br/>";
    echo "Redondear: " . round(7.788, 1);
    echo "<br/>";
    
    // Más funciones generales
    // Comprobar tipo de variable...
    echo is_string($Frase);
    echo gettype($miFuncion);

    // Limpiar espacios
    echo "<br/>";
    $frase2 = "  Mi frase con espacios  ";
    echo $frase2;
    var_dump($frase2);
    echo "<br/>";
    echo trim($frase2);
    var_dump(trim($frase2));

    // Eliminar variables o indices de array
    $year = 2020;
    unset($year);
    // echo $year;

    // Comprobar si una variables esta vacia
    // $year = NULL, FALSE, UNDEFINED, ""
    empty($year);
    echo "<br/>";

    // Contar caracteres de un string
    strlen($Frase);

    // Encontrar una string dentro de una frase
    $found = "bella";
    $phrase = "La vida es bella";
    echo strpos($phrase, $found);
    echo "<br/>";

    // Reemplazar palabras de un string
    echo str_replace("vida", "life", $phrase);

    // Mayúsculas y minúsculas
    echo strtoupper($phrase);
    echo "<br/>";
    echo strtolower($phrase);
    
    ?>
</body>

</html>