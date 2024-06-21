<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
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
    <h1>Funciones:</h1>
    <div>
        Las funciones son conjuntos de orden agrupados por un nombre concreto y que pueden reutilizarse solamente invocando a la funciton tantas veces como queramos.
    </div>
    <?php

    function tablaMultiplicar($num)
    {
        echo "<h3>Tabla de multiplicar del número $num</h3>";
        for ($i = 1; $i < 10; $i++) {
            $operacion = $num * $i;

            echo "$num * $i = $operacion <br/>";
        }
    }

    tablaMultiplicar(3);

    echo "<hr/>";

    // Parametros opcionales
    function calculadora($num1, $num2, $negrita = false)
    {
        // Instrucciones
        $suma = $num1 + $num2;
        $resta = $num1 - $num2;
        $multiplication = $num1 * $num2;
        $division = $num1 / $num2;

        $cadena_text = "";

        if ($negrita) {
            $cadena_text .= "<h2>";
        }
        $cadena_text .= "Suma: $suma <br/>";
        $cadena_text .= "Resta: $resta <br/>";
        $cadena_text .= "Multiplicación: $multiplication <br/>";
        $cadena_text .= "División: $division <br/>";
        if ($negrita) {
            $cadena_text .= "</h2>";
        }
        $cadena_text .= "<hr/>";

        return $cadena_text;
    }

    echo calculadora(10, 7, true);
    ?>
</body>

</html>