<?php
$peliculas = array('V for Vendetta', "Batman", "Agente 42", "Narnia");
// sort() sirve para numericamente también
asort($peliculas);
arsort($peliculas);

// Añadir elementos a un array
$peliculas[] = "Warcraft";
array_push($peliculas, "La historia sin fin");
// Eliminar el ultimo indice del array
// array_pop($peliculas);
// Eliminar un indice en concreto del array
// unset($peliculas[3]);
// mostrar aleatorio
$indice = array_rand($peliculas);
echo $peliculas[$indice];
echo "<br/>";
// Dar la vuelta al array
var_dump(array_reverse($peliculas));

echo "<br/>";
// Buscar dentro de un array
$reply = array_search("Batman", $peliculas);
echo $reply;
var_dump($peliculas);