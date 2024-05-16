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
</style>

<body>
    <?php
    echo "<h1>Funciones - functions</h1>";
    echo "<p>Son conjuntos de ordenes agrupados por un nombre concreto. La cual es reutilizable o invocarla <br/> El sentido de la programación es reutilizar código. <br/>Por buenas prácticas una function no debe devolver un echo o imprimir algo DEBE retornar un valor con return.</p>";
    echo "<p>Funciones: PHP tiene una gran cantidad de funciones integradas y también puedes definir tus propias funciones para reutilizar el código.</p>";
    echo "<p>Manejo de formularios: PHP se utiliza comúnmente para manejar datos de formularios web. Puedes acceder a los datos enviados desde un formulario utilizando variables especiales como $_POST o $_GET.</p>";
    
    /*
function nombreDeMiFunction ($parametro){
    $parametro  estara disponible dentro del contexto de la function
    Bloque de instrucciones
}
llamarla o invocarla:
nombreDeMiFunction($parametro);
*/

    echo "<hr>";
    
    echo "<h2>Ejemplo 1</h2>";
    echo "<br>";
    function mostrarNombreBad()
    {
        echo "Delmerk";
    }
    mostrarNombreBad();

    function mostrarNombreGood($name)
    {
        return " $name";
    }
    // invocar function
    echo mostrarNombreGood("Escobar");
    echo "<hr>";
    echo "<h2>Ejemplo 2</h2>";
    echo "<br>";
    function tabla($num1)
    {
        echo "Tabla de multiplicar del número $num1 <br/>";
        for ($i = 1; $i <= 10; $i++) {
            $multilication = $num1 * $i;
            echo "$num1 x $i = $multilication <br/>";
        }
    }
    if (isset($_GET['num1'])) {
        tabla($_GET['num1']);
    } else {
        echo "Introduce un número por get: ?num1=x_num";
    }
    echo "<hr/>";
    for ($i = 2; $i <= 3; $i++) {
        tabla($i);
    }

    echo "<hr>";
    echo "<h2>Ejemplo 2</h2>";
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        function calculadora($num1 = 3, $num2 = 4, $negrita = false)
        {
            echo "#1: $num1 y #2: $num2";

            $suma = $num1 + $num2;
            $resta = $num1 - $num2;
            $multiplication = $num1 * $num2;
            $division = $num1 / $num2;
            $resto = $num1 % 2;
            $resto2 = $num2 % 2;

            if ($negrita) {
                echo "<h3>";
            }
            echo "Suma: $suma<br/>";
            echo "Resta: $resta<br/>";
            echo "Multiplicación: $multiplication<br/>";
            echo "División: $division<br/>";
            echo "Resto: $resto<br/>";
            echo "Resto: $resto2<br/>";
            if ($negrita) {
                echo "</h3>";
            }
        }
        calculadora($_GET['num1'], $_GET['num2']);
        calculadora(4, 7, true);
    } else {
        echo "Introduce un número por get: ?num1=x_num";
    }
    echo "<hr/>";
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        function calculadoraBetter($num1, $num2, $negrita = false)
        {
            echo "#1: $num1 y #2: $num2";

            $suma = $num1 + $num2;
            $resta = $num1 - $num2;
            $multiplication = $num1 * $num2;
            $division = $num1 / $num2;
            $resto = $num1 % 2;
            $resto2 = $num2 % 2;

            $cadena = "";

            if ($negrita) {
                $cadena .= "<h3>";
            }
            $cadena .= "Suma: $suma<br/>";
            $cadena .= "Resta: $resta<br/>";
            $cadena .= "Multiplicación: $multiplication<br/>";
            $cadena .= "División: $division<br/>";
            $cadena .= "Resto: $resto<br/>";
            $cadena .= "Resto: $resto2<br/>";
            if ($negrita) {
                $cadena .= "</h3>";
            }
            return $cadena;
        }
        echo calculadoraBetter(33, 7, true);
    } else {
        echo "Introduce un número por get: ?num1=x_num";
    }

    echo "<hr>";
    echo "<h2>Ejemplo 2</h2>";
    
    ?>
</body>

</html>