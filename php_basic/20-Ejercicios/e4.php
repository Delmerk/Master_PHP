<?php
// Script que tenga 4 variables 1 tipo string, 1 tipo array, 1 tipo int, 1 tipo boolean y que imprima un mensaje segun el tipo que sea.

$str = "cadena";
$bool = true;
$int = 2000;
$arry = array("HELLO", 73);

if (is_array($arry)) {
    echo "la var es un array";
}
echo "<br>";
if (is_string($str)) {
    echo "la var es un string";
}
echo "<br>";
if (is_int($int)) {
    echo "la var es un integer";
}
echo "<br>";
if (is_bool($bool)) {
    echo "la var es un boleano";
}
echo "<br>";


