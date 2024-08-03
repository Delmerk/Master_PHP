El camino ordinario para salir de un bucle es que la condición se evalúe a false. Existe una forma especial de salir de un bucle, utilizando las palabras reservadas break y continue. Su forma de actuar es la siguiente: • break: Sale del bucle actual y continúa el programa. • continue: Salta hasta el final de la interacción y continúa la ejecución desde el principio del bucle. A continuación, el siguiente código nos muestra la forma de poder utilizar break:
<?php for ($x = 1; $x < 20; $x++) {
    if ($x == 10) {
        break;
    } else {
        echo "$x <br/>";
    }
} ?>
La salida por pantalla es una sucesión de números del 1 al 9. Al llegar la variable $x al número 10, la condición del if se cumple y se ejecuta la instrucción break, saliendo del bucle. El siguiente ejemplo muestra cómo se puede utilizar continue:
<?php for ($x = 1; $x < 20; $x++) {
    if ($x == 10) {
        continue;
    } else {
        echo $x . "<br/>";
    }
} ?>
En este caso, cuando $x alcanza el valor 10, lo que hace la instrucción continue es ir hacia el final del bucle y volver al principio comprobando la condición.
El resultado por pantalla es una sucesión de números desde el 1 hasta el 19, sin incluir el número 10.