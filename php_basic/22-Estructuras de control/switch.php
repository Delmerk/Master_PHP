Switch Esta construcción comprueba el valor de una expresión y permite elegir entre un conjunto de instrucciones.
La expresión puede ser de cualquier tipo, siempre que devuelva un valor de tipo entero, de coma flotante o una cadena de caracteres. Una vez evaluada la expresión, se busca el valor en la instrucción case y, si coincide, se ejecutan todas las instrucciones hasta la palabra reservada break. Si no coincide ningún valor, se ejecutan las instrucciones que están en el bloque default.
Veamos el ejemplo anterior expresado con la estructura switch:
<?php $dia = 4;
switch ($dia) {
    case 1:
        echo "El día es Lunes";
        break;
    case 2:
        echo "El día es Martes";
        break;
    case 3:
        echo "El día es Miércoles";
        break;
    case 4:
        echo "El día es Jueves";
    case 5:
        echo "El día es Viernes";
        break;
    case 6:
        echo "El día es Sábado";
        break;
    case 7:
        echo "El día es Domingo";
        break;
    default:
        echo "El día de la semana es incorrecto";
}
