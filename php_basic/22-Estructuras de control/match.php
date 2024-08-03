match PHP 8 ha incluido una nueva estructura de control muy parecida a switch, pero que la hace más legible y con algo más de potencia.
Esta estructura recibe una variable y elige entre varias opciones la expresión que debe ejecutarse. Lo veremos mejor con un ejemplo:
<?php $dia = 4;
echo match ($dia) {
    1 => "El día es Lunes",
    2 => "El día es Martes",
    3 => "El día es Miércoles",
    4 => "El día es Jueves",
    5 => "El día es Viernes",
    6 => "El día es Sábado",
    7 => "El día es Domingo",
    default => "El día de la semana es incorrecto",
};
?>
Aunque a simple vista puede parecer algo rara, o distinta, podemos observar que es mucho más nítida y que se entiende mucho mejor que la anterior estructura de control. Cada línea evalúa un valor y devuelve una cadena de texto (una expresión). Esa cadena de texto puede almacenarse en una variable o mandarla a imprimir directamente, como puede ver en el ejemplo. Como se están evaluando expresiones y no valores de variables, es posible hacer algunas comprobaciones antes de devolver algún dato, teniendo algo más de control sobre lo que estamos haciendo. El siguiente ejemplo evalúa la edad de un jugador de fútbol y muestra su categoría:

<?php $edad = 23;
$categoria_futbol = match (true) {
    $edad <= 5 => 'Chupetín',
    $edad >= 7 => 'Pre-Benjamín',
    $edad >= 9 => 'Benjamín',
    $edad >= 11 => 'Alevín',
    $edad >= 13 => 'Infantil',
    $edad >= 15 => 'Cadete',
    $edad >= 18 => 'Juvenil',
    default => 'Senior',
};
echo "La categoría es: $categoria_futbol";
?>