<?php
// Programa que tenga 8 números enteros y que haga lo siguiente:
$nums = array(1, 3, 4, 11, 73, 7, 9, 44);
// 1. Tiene que recorrerlo y mostrarlo.

function showArray($nums)
{
    $reply = "";
    foreach ($nums as $num) {
        $reply .= $num . "<br>";
    }
    return $reply;
}

echo showArray($nums);
echo "<hr>";
// 2. Ordenarlo y mostrarlo.
sort($nums);
echo showArray($nums);
echo "<hr>";
// 3. Mostrar su tamaño.
echo count($nums);
echo "<hr>";
// 4. Buscar algún elemento.
$busqueda = 44;
$search = array_search($busqueda, $nums);
if (!empty($search)) {
    echo "<h4>El número SI existe en el array, en el indice $search</h4>";
} else {
    echo "<h4>El número NO existe en el array</h4>";

}