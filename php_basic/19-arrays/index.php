<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes</title>
    <style>
        * {
            color: #fff;
            background-color: black;
            margin: 1rem;
        }

        hr {
            border-color: white;
        }
    </style>
</head>

<body>
    <h1>Arrays:</h1>
    <div>
        Colección o conunto de datos-valores. Bajo un único nombre y para haceder a esos valores usamos indices numerico o alfanumerico.
    </div>
    <?php
    $peliculas = array('V for Vendetta', "Batman");

    echo "<ul>";
    // Recorrer con for
    for ($i = 0; $i < count($peliculas); $i++) {
        echo "<li>" . $peliculas[$i] . "</li>";
    }
    echo "</ul>";

    // Recorrer con foreach
    echo "<ul>";
    foreach ($peliculas as $pelicula) {
        echo "<li>" . $pelicula . "</li>";
    }
    echo "</ul>";

    // indices alfanumericos
    $personas = array(
        'nombre' => "Delmerk",
        'apellido'  => "Escobar",
    );
    echo $personas['nombre'];

    // Array multidimensional
    $contactos = array(
        array('nombre' => 'Mildred', 'celular' => 3000426078),
        array('nombre' => 'Luz', 'celular' => 3000181340),
        array('nombre' => 'Arta', 'celular' => 3310659845),
    );
    echo $contactos[1]['nombre'];

    echo "<br/>";
    foreach ($contactos as $key => $contacto) {
        echo $contacto['nombre'];
    }
    ?>
</body>

</html>