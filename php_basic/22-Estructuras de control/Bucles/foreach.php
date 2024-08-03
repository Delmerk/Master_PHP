Esta construcción proporciona una forma sencilla de navegar por los datos de un array. Solo se puede utilizar con arrays y objetos que cumplan una determinada propiedad. La sintaxis es la siguiente:
<?php foreach ($miArray as $valor) {
    // instrucción1;
    // instrucción2;
    // instrucción3;
} ?>
El array se recorre completamente de inicio a fin y va extrayendo uno a uno los datos que hay guardados. Podemos verlo en un ejemplo, que muestra las ciudades de un array por pantalla:
<?php $ciudades = array("Badajoz", "Mérida", "Cáceres", "Plasencia");
foreach ($ciudades as $valor) {
    echo "El valor es $valor<br />";
} ?>
Si necesita obtener también el índice del array, puede utilizar otra construcción de foreach que sirve para esto:
<?php $ciudades = array("Badajoz", "Mérida", "Cáceres", "Plasencia");
foreach ($ciudades as $indice => $valor) {
    echo "$indice:: El valor es $valor<br />";
} ?>
En este caso, la variable $indice obtendrá por cada interacción el valor del índice del array que se está evaluando y la variable $valor, el dato que esté almacenado en esa parte del array. NOTA Hay que tener en cuenta que el array sobre el que se itera con las variables $indice y $valor es una copia del array $ciudades. Esto implica que modificar $valor no modifica su homólogo en el array original, para eso habría que llamar a $ciudades directamente.