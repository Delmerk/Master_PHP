<?php

//Estrcuras de control: controlar las elecciones del programa
//  Si el valor de una variable es = a algo suceda algo y si no suceda otra cosa
/*
    OPERADORES DE COMPARACIÓN:
    == si es igual
    === si es identico (mismo tipo de dato o valor de la variable)
    != distinto o diferente
    <> diferente
    !== no identico
    < menor que
    > mayor que
    <= menor igual que
    >= mayor igual que

    CONDICIONALES:
    IF
        if(condicion){
            instrucción
        }else {
            
        }
*/
echo "<p>Estructuras de control de flujo: PHP admite estructuras de control de flujo como if-else, switch, while, do-while y for para controlar el flujo de tu código.</p>";

$color = "red";

if ($color == "rojo") {
    echo "El colo es Rojo";
} else {
    echo "El colo NO es Rojo";
}

echo "<br/>";
$dia = 7;
/*
if ($dia == 1) {
    echo  "Lunes";
} else {
    if ($dia == 2) {
        echo  "Martes";
    } else {
        if ($dia == 3) {
            echo "Miercoles";
        } else {
            if ($dia == 4) {
                echo "jueves";
            } else {
                echo "Weekend";
            }
        }
    }
}
*/
/* OPERADORES LÓGICOS
    && - AND
    || - OR
    ! NOT

*/
if ($dia ==  1) {
    echo "Lunes";
} elseif ($dia == 2) {
    echo "Martes";
} elseif ($dia == 3) {
    echo "Miercoles";
} elseif ($dia == 4) {
    echo "Jueves";
} elseif ($dia == 5) {
    echo "Viernes";
} elseif ($dia == 6) {
    echo "Sábado";
} else {
    echo "Domingo";
}

echo "<br/>";

$age = 18;
$age2 = 64;

$edad_oficial = 20;
if ($edad_oficial >= $age && $edad_oficial <= $age2) {
    echo "Puedes trabajar";
} else {
    echo "No puedes trabajar";
}

echo "<hr/>";

// SWITCH
$day = 7;
switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    default:
        echo "Sunday";
        break;
}

// GOTO
goto marca;
echo "text1";
echo "text2";
echo "text3";

marca:
echo "<br/>";
echo "Me he saltado instrucciones de código";
echo "<br/>";
echo "<hr/>";
echo "BUCLE WHILE";

// Estructura de control que itera o repite la ejecución de una serie de instrucciones tantas veces como sea necesario, en base a un condición.
// 1. Evalua un instrucción y luego ejecuta un bloque de instrucciones que tiene dentro tantas veces como sea necesario hasta que la condición se cumpla.

$numero = 0;
while ($numero <= 37) {
    echo $numero;
    if ($numero != 37) {
        echo ", ";
    }
    $numero++;
}
echo ".";
echo "<hr/>";

// Ejemplo con while
if (isset($_GET['numero'])) {
    // cambiar tipo de dato - castear - casting
    $numero = (int)$_GET['numero'];
} else {
    $numero = 1;
}

echo "<h3>Tabla de multiplicar del número $numero:</h3>";
$count = 1;
while ($count <= 10) {
    echo "$numero x $count = " . ($numero * $count) . "<br/>";
    $count++;
}

echo "<hr/>";
echo "BUCLE DO WHILE";
// La condición se evalua al final y se ejecuta al menos una vez y si la condición es true se volverá a ejecutar.

$age = 18;
$contador = 1;
do {
    echo "Tienes acceso al local privado $contador. ";
    $contador++;
} while ($age >= 18 && $contador <= 10);

// FOR
echo "<hr/>";
echo "Bucle FOR";
echo "<br/>";
/*
expresión_inicial: inicializar una variable que sera el contador
condicion se itera en el bucle siempre que sea true la condiciosn
incrementa el valor del contador
for (expresión_inicial, condicion, incrementa el valor del contador) { 
    # code...
}
*/
$resultado = 0;
for ($i= 0; $i <= 37; $i++) { 
    $resultado += $i;
}
echo $resultado;
echo "<hr/>";
echo "<h3>Tabla de multiplicar del número $numero:</h3>";
for ($count=0; $count < 10; $count++) {
    echo "$numero x $count = " . ($numero * $count) . "<br/>";
}

echo "<hr/>";

