<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<style>
    * {
        background-color: black;
        color: white;
        margin: 1rem;
    }
    hr {
        border-color: white;
    }
</style>

<body>
    <?php
    echo "<hr>";
    echo "<h2>Arrays</h2>";
    echo "<p>Es una colección de datos-variables bajo un único nombre y puedo acceder a cada una de esos valores utilizando un indice número o alfanúmerico.</p>";
    echo "<br>";
    $peliculas = array('V for Vendetta', 'Spiderman', 'Depredator');
    $cantantes = ['Canserbero', 'Warcry', 'Mago de Oz'];
    echo $cantantes[0];
    // Recorrer con FOR
    echo "<ul>";
    echo "<h2>Listado de peliculas</h2>";
    for ($i = 0; $i < count($peliculas); $i++) {
        echo "<li>$peliculas[$i]</li>";
    }
    echo "</ul>";
    // Recorrer con foreach, el cual está diseñado para recorrer arrays
    echo "<ul>";
    echo "<h2>Listado de peliculas</h2>";
    foreach ($cantantes as $cantante) {
        echo "<li>$cantante</li>";
    }
    echo "</ul>";
    echo "<hr>";
    echo "<h2>Arryas Asociativos</h2>";
    $personas = array(
        'nombre' => "Delmerk",
        'apellidos' => "Escobar",
        "web" => "delmerk.es"
    );
    var_dump($personas['apellidos']);
    echo "<hr>";
    echo "<h2>Arryas Multidimencionales</h2>";
    // Un array con varios arrays dentro de si
    $contactos = array(
        array(
            'nombre' => "Luz",
            'apellido' => 'Oliveros'
        ),
        array(
            'nombre' => "Delmerk",
            'apellido' => 'Escobar'
        ),
        array(
            'nombre' => "Mildred",
            'apellido' => 'Solarte'
        )
    );

    echo $contactos[1]['nombre'];
    echo "<br>";
    foreach ($contactos as $key => $contacto) {
        var_dump($contacto['nombre']);
    }
    echo "<hr>";
    echo "<h2>Funciones para Arrays</h2>";
    // Ordenar un array por orden alfabetico
    
    //Agregar elementos a un array existente
    array_push($cantantes, 'Muse', 'Linking Park'); 
    $cantantes[] = 'Metalica';
    
    sort($cantantes); //También sirve para números
    asort($cantantes); //Solo alfabeto
    // arsort($cantantes); //Ordenar de forma inversa
    var_dump($cantantes);   
    
    // Eliminar elemento de un array
    array_pop($cantantes);
    echo "<br>";
    unset($cantantes[2]);
    var_dump($cantantes);  
    
    // Aleatorio
    echo "<br>";
    $indice = array_rand($cantantes);
    echo $cantantes[$indice];

    // Dar la vuelta a un array
    echo "<br>";
    var_dump(array_reverse($cantantes));

    // Buscar dentro de un array, no muy extricto
    echo "<br>";
    $search = array_search('canserbero', $cantantes);
    echo $cantantes[$search];

    // Contar número de elementos
    echo "<br>";
    echo count($cantantes);
    echo "<br>";
    echo sizeof($cantantes);
    ?>
</body>

</html>