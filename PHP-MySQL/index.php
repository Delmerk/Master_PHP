<?php
// $conexion = mysqli_connect($host, $user, $password, $database, $port, $socket);
$conexion = mysqli_connect("localhost", "admin", "wpassword", "colegio");

// Comprobar si la $conexion es correcta
if (mysqli_connect_errno()) {
    echo "La conexión a la base de datos MySQL ha fallado: " . mysqli_connect_error();
} else {
    echo "Conexión realizada correctamente";
}
echo "<br>";
// Consulta para modificar la codificación de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

// Consulta SELECT desde PHP
$query = mysqli_query($conexion, "SELECT * FROM notas ");
while ($nota = mysqli_fetch_assoc($query)) {
    var_dump($nota);
}
// Insertar en la bd desde PHP
$insert = "INSERT INTO notas VALUES(null, 'Debugging PHP', 'Aprender a hacer Debugging en PHP', 'gray')";
$query = mysqli_query($conexion, $insert);

// Funciones de Debugging : https://www.youtube.com/watch?v=J7XBPBP3hpA
// dd();
// die();
// echo();
// var_dump();
