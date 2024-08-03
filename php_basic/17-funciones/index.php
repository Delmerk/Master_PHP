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
    <div>
        Las funciones son grupos de instrucciones independientes que tienen un propósito determinado. De esta manera, tenemos funciones que calculan la raíz cuadrada de un número, nos dan un número aleatorio o permiten contar los caracteres de una palabra. La sintaxis básica de una función es la que se describe a continuación:

        function nombre_función(parámetro1, parámetro2, parámetro3...parámetro_n)

        Las funciones pueden ser llamadas con varios parámetros o con ninguno, dependiendo de su definición. Cuando PHP encuentra en el código la llamada a una función, primero evalúa cada argumento y los utiliza como parámetro de entrada. Después, ejecuta la función y devuelve el valor solicitado o realiza alguna acción sin enviar ningún valor de salida.
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
    Se pueden utilizar varios caracteres dentro de la función, indicando el formato de fecha que nos interesa.
    <?php date_default_timezone_set("UTC");
    $meses = [1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 6 => "Junio", 7 => "Julio", 8 => "Agosto", 9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre"];
    echo "Fecha actual: " . date("d-m-Y ") . "<br/>";
    echo "Día del año: " . date("z") . "<br/>";
    echo "Estamos en el mes: " . $meses[date("n")] . " <br/>";
    ?>
    El resultado final debería ser parecido al siguiente:
    Fecha actual: 26-11-2020
    Día del año: 300
    Estamos en el mes: Noviembre
    <hr>
    números. El factorial del número x se obtiene multiplicando el número x por el factorial de (x-1), teniendo en cuenta que el factorial de 1 es 1. Por ejemplo, el factorial de 3 sería 3 por el factorial de 2, es decir, 3 * 2 * 1. El código sin utilizar funciones es:
    <?php $resultado = 1;
    $factorial = 3; // Queremos calcular el factorial de 3
    for ($x = $factorial; $x > 0; $x--) {
        $resultado = $resultado * $x;
    }
    echo "El factorial de $factorial es $resultado<br/>";
    $resultado = 1;
    $factorial = 4; // Queremos calcular el factorial de 4 
    for ($x = $factorial; $x > 0; $x--) {
        $resultado = $resultado * $x;
    }
    echo "El factorial de $factorial es $resultado<br/>";
    $resultado = 1;
    $factorial = 5; // Queremos calcular el factorial de 5 
    for ($x = $factorial; $x > 0; $x--) {
        $resultado = $resultado * $x;
    }
    echo "El factorial de $factorial es $resultado<br/>";
    ?>
    Si se fija en el código anterior, podrá comprobar que sigue un patrón muy evidente. El cálculo del factorial se realiza en un bucle que va disminuyendo el valor de una variable y multiplicando todos los valores entre sí. Aprovechando este patrón, puede crear una función que realice el factorial del número x ahorrando líneas de código:
    <?php function factorial($numero)
    {
        $resultado = 1;
        for ($x = $numero; $x > 0; $x--) {
            $resultado = $resultado * $x;
        }
        return $resultado;
    }
    echo "El factorial de 3 es " . factorial(3) . "<br/>";
    echo "El factorial de 4 es " . factorial(4) . "<br/>";
    echo "El factorial de 5 es " .
        factorial(5) . "<br/>";
    ?>
    <hr>
    Funciones anónimas Las funciones anónimas, conocidas también como cierres o closures, permiten crear funciones sin necesidad de darles un nombre. Estas funciones se asocian a una variable directamente o se utilizan como parámetro de otra función.
    <?php $multiplicador_por_cuatro = function (int $numero) {
        return $numero * 4;
    };
    echo $multiplicador_por_cuatro(20); ?>
    Las funciones anónimas se han popularizado mucho en el lenguaje JavaScript porque permiten resolver de forma rápida y directa ciertas acciones añadiendo inmutabilidad a los datos.
    <hr>
    https://elibro-net.bibliotecavirtual.unad.edu.co/es/ereader/unad/217084?page=139
    Recursividad El paradigma de la programación nos lleva a los desarrolladores a inventar fórmulas que minimicen el esfuerzo en los programas, pecando, algunas veces, de una complejidad innecesaria. Las funciones recursivas son, por definición, aquellas que son capaces de llamarse a sí mismas. Como único requisito es que haya una forma de salir de la llamada recursiva. Si volvemos al ejemplo del siguiente forma:
    <?php function factorial2($numero)
    {
        if ($numero == 1) {
            return $numero;
        } else {
            return $numero * factorial($numero - 1);
        }
    }
    echo "El factorial de 3 es " . factorial(3) . "<br/>";
    echo "El factorial de 4 es " . factorial(4) . "<br/>";
    echo "El factorial de 5 es " . factorial(5) . "<br/>"; ?>

    Lo primero que llama la atención es que carece de un bucle for para ir disminuyendo los números implicados en el factorial. Lo que hace la función es multiplicar el número que se pasa por el factorial del número menos uno. Si es número es igual a uno, la función deja de hacer llamadas recursivas y comienza a devolver los valores hasta llegar al resultado final.
    <hr>
    Referencia a variables Las referencias pueden usarse también fuera de las funciones, en el ámbito de las variables. El ejemplo siguiente muestra cómo trabaja el operador &:
    <?php $nombre = "Luis Miguel";
    $apellidos = "Cabezas Granado";
    $nombre_auxiliar = $nombre;
    $nombre_referencia = &$nombre;
    echo $nombre . " " . $apellidos . "<br/>";
    $nombre_auxiliar = "Pako";
    echo $nombre . " " . $apellidos . "<br/>";
    $nombre_referencia = "Felipe";
    echo $nombre . " " . $apellidos . "<br/>"; ?>
    La variable $nombre_auxiliar es una copia de la variable $nombre y, por mucho que la cambiemos, $nombre permanecerá con el mismo valor. En cambio, $nombre_referencia es un alias de $nombre, por lo tanto, todos los cambios que se hagan en cualquiera de las dos variables les afectarán por igual.
    <hr>
    Expreciones regulares: https://elibro-net.bibliotecavirtual.unad.edu.co/es/ereader/unad/217084?page=165
    • Regular Expressions Cookbook. Editorial O'Reilly. Expresiones regulares vistas desde la perspectiva de varios lenguajes de programación. Ejemplos muy interesantes y la forma en la que deben tratarse dependiendo del lenguaje que utilicemos, incluido PHP. 
    • Web: https://diego.com.es/expresiones-regulares- en-php. Compendio muy completo sobre expresiones regulares con numerosos ejemplos. Muy recomendable.
</body>

</html>