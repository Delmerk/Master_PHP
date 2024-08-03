Este bucle es igual que el anterior, pero la condición se evalúa al final de las instrucciones. Por lo tanto, el código que está entre las llaves se ejecuta al menos una vez. El formato básico es el siguiente:
<?php
// do {
//     instrucción1;
//     instrucción2;
//     instrucción3;
// } while (condición); 
?>
Puede comprobar que la diferencia es mínima cuando utiliza esta estructura de control para la serie de Fibonacci.
<?php $numero_anterior = 0;
$numero_posterior = 1;
$serie = 1;
$fin = 10000;
echo "Serie de Fibonacci: ";
do {
    echo $serie . ", ";
    $serie = $numero_anterior + $numero_posterior;
    $numero_anterior = $numero_posterior;
    $numero_posterior = $serie;
} while ($serie < $fin); ?>