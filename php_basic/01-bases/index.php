<!DOCTYPE HTML>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <title>Print for screen</title>
</head>

<h1>Master en PHP</h1>
<h2>1. echo, coments</h2>
<?=
"echo abreviado";
//Esto es un comentario

/* Comentario 
      multilineas */
?>
<?php
echo "<hr/>";
echo "<h2>2. Variables PHP</h2>";
echo "<p>Sintaxis básica: PHP utiliza una sintaxis similar a C y es bastante fácil de leer y escribir.</p>";
echo "<p>Variables y tipos de datos: PHP admite varios tipos de datos, como enteros, flotantes, booleanos, cadenas y matrices. Puedes declarar variables utilizando el signo de dólar, como $nombre_variable.</p>";
echo "<p></p>";
//Una variable es un contenedor de información
//no pueden iniciar con un número, no se pueden usar -, tampoco signos de operadores, la letra ñ
//las comillas " son más lentas para procesar en el servidor
//el \n es un salto de linea en consola
//la \r retorno de ... en consola
// \t un TAB
$miPrimera_Variable = "Soy";
$name = "Delmerk";
echo "<br/>";
$num = 24;
$cont = $miPrimera_Variable . " " . $name . " tengo $num años. \"Escapando comillas en PHP\"";
$num = 73;
echo '<p>' . $miPrimera_Variable . '</p>';
echo '<p>' . $cont . '</p>';
echo '<p>' . $num . '</p>';
/*
     * Tipos de Datos:
     * Int - integer - entero = 9
     * Float - decimales - double - flotante = 3.14
     * String - cadena = "Hello"
     * Bool - boelano = true - false - 1 - 0
     * NULL - nulo - sin contenido dentro - undefined
     * Array - vector - colección de datos
     * Object - objectos
     */
echo gettype($num);
echo "<br/>";
//Debugear el cont de la variable
var_dump($num);
echo "<hr/>";
echo "<h2>3. Constantes PHP</h2>";
//Una var que su valor o contenido no puede variar o cambiar
// las mostramos sin el $
define('name', "Delmerk Escobar Solarte");
echo 'Soy ' . name;

echo "<br/>";
//Constantes predefinidas
echo PHP_OS;
echo __FILE__; //Ruta completa del archivo.

echo "<hr/>";
echo "<h2>4. Operadores Aritméticos</h2>";
// + - % / *
$num2 = 37;
echo "La división entre: $num y $num2 es: " . ($num / $num2);
echo "<br/>";
echo "El módulo o resto entre: $num y $num2 es: " . ($num % $num2);

echo "<hr/>";
echo "<h2>5. Operadores de incremento y decremento</h2>";
echo "<br/>";
$num2++;
++$num2;
// --$num2;
$num2--;
echo $num2++;
echo "<hr/>";
echo "<h2>5. Operadores de asignación</h2>";
echo "<br/>";
$edad = 24;
//$edad = $edad / 3
echo $edad /= 3;
?>

</html>