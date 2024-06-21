<?php
// Programa que compruebe sii una variable esta vacía, y si lo está rellenarla con texto en minusculas y mostrarla en mayusculas con negrita

$text = "";
if (empty($text)) {
    $text = "ahora tengo contenido";
    echo "<b>" . strtoupper($text) . "</b>";
} else {
    echo "La variable ya contiene información.";
}
