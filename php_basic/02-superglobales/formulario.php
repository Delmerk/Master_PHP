<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables SuperGlobales</title>
</head>

<body>
    <h1>FORM - Method GET</h1>
    <form action="recibir.php" method="POST">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre">

        <label for="edad">Edad: </label>
        <input type="text" name="edad">

        <!-- Envia la info del form al action - linea 12 -->
        <input type="submit" value="Enviar"> 
    </form>
</body>

</html>
<?php
echo "<hr/>";
echo "<h2>6. Variables GLobales</h2>";
echo "<br/>";
//Variables Superglobales
echo $_SERVER["SERVER_NAME"];
echo "<br/>";
//Variables del servidor
echo $_SERVER["SERVER_SOFTWARE"];
echo "<br/>";
echo $_SERVER["REMOTE_ADDR"];

//VARIABLES GET
