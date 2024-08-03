La condición se evalúa al principio. Si es verdadera, se ejecutan las instrucciones que están dentro del bucle y se vuelve a evaluar la condición. Si la condición es falsa, no se ejecutan las instrucciones y se continúa con el desarrollo del programa. Puesto que la condición se evalúa antes de ejecutar las instrucciones, es posible que algunos bucles no se ejecuten ninguna vez. El siguiente ejemplo muestra una instrucción while que no se ejecuta nunca, porque la condición es falsa:
<?php $variable = false;
while ($variable) {
    echo "Esta línea no se ejecuta nunca";
} ?>
El siguiente ejemplo muestra cómo utilizar de forma correcta el bucle while para calcular la serie de Fibonacci:
<?php $numero_anterior = 1;
$numero_posterior = 0;
$serie = 0;
$fin = 10000;
echo "Serie de Fibonacci: ";
while ($serie < $fin) {
    echo $serie . ", ";
    $serie = $numero_anterior + $numero_posterior;
    $numero_anterior = $numero_posterior;
    $numero_posterior = $serie;
} ?>
Cada número de la serie de Fibonacci se forma sumando los dos números anteriores. En el ejemplo, la condición es que el número de la serie sea menor que el número que marca la variable $fin, si el número que indica la serie es mayor que 10.000, el bucle finaliza. La variable $fin sirve de valor máximo y puede cambiarlo en función de la cantidad de números que quiera tener en pantalla. La salida por pantalla mostrará parte de la serie de Fibonacci, como se puede apreciar en la figura 4.2.