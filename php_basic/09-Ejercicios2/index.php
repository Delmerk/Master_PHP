<!DOCTYPE html>
<html>
<style>
    * {
        color: #fff;
        background-color: black;
        margin: 1rem;
    }
</style>

<body>
    <?php
    echo "<hr>";
    echo "<h1>Ejercicio 1</h1>";
    echo "Hacer un programa que tenga un array con 8 números enteros y que haga los siguiente:
        1. recorrerlos y mostrarlos.
        2. Ordenarlo y mostrarlo.
        3. Mostrar su longitud.
        4. Buscar un elemento.
        5. Buscar por parametro de get-url.";
    echo "<br/>";
    echo "<hr>";
    echo "<h3>Recorrer y mostrar:</h3>";
    $numbs = [8, 9, 4, 3, 2, 1, 3, 7];
    function mostrarArray($numbs)
    {
        $resultado = "";
        foreach ($numbs as $key => $numb) {
            // $resultado .= $numbs[$key] . "<br/>";
            $resultado .= $numb . "<br/>";
        }
        return $resultado;
    }
    echo mostrarArray($numbs);

    echo "<hr>";
    echo "<h3>Ordenar y mostrar:</h3>";
    sort($numbs);
    echo mostrarArray($numbs);

    echo "<hr>";
    echo "<h3>Mostrar su longitud:</h3>";
    echo count($numbs);

    echo "<hr>";
    echo "<h3>Buscar en el array:</h3>";
    $search = 3;
    if (array_search($search, $numbs)) {
        echo "El número $search si existe";
    } else {
        echo "El número $search no si existe";
    }
    echo "<br>";
    $busqueda = array_search($search, $numbs);
    if (!empty($busqueda)) {
        echo "El número $search si existe en el indice $busqueda";
    } else {
        echo "El número $search no si existe";
    }

    echo "<hr>";
    echo "<h3>Buscar en el array por get:</h3>";

    if (isset($_GET['number'])) {
        $busqueda = $_GET['number'];
        $search = array_search($busqueda, $numbs);

        if (!empty($search)) {
            echo "El número $busqueda si existe en el indice $search";
        } else {
            echo "El número $busqueda no si existe";
        }
    }

    echo "<hr>";
    echo "<h1>Ejercicio 2</h1>";
    echo "Hacer un programa que añada valores a un array mientras su longitud sea menor a 120 y luego mostrarlo por pantalla";
    echo "<Br>";
    $numeros = array();
    for ($i = 0; $i < 120; $i++) {
        array_push($numeros, "Elemento-" . $i);
    }
    echo count($numeros);
    echo "<Br>";
    echo $numeros[6];

    echo "<hr>";
    echo "<h1>Ejercicio 3</h1>";
    echo "Comprobar si una variable está vacía y relenarla con texto con la primera letra en mayúscula y mostrarla en texto en mayúscula y negrita.";
    echo "<Br>";
    $name = "";
    if (empty($name)) {
        $text = "delmerk Escobar";
        $añadir = strtoupper($text);
        $name = $añadir;
        echo "<strong>$name</strong>";
    } else {
        echo "La variable tiene contenido dentro: " . $name;
    }

    echo "<hr>";
    echo "<h1>Ejercicio 4</h1>";
    echo "Crear un script que tenga 4 variables: 1 tipo array, 1 string, 1 int y otra booleano y que imprima un msg según el tipo de var que sea.";
    echo "<Br>";
    $bool = true;
    $int = 7;
    $string = "Luz";
    $names = array('Mildred', 'Arta');

    if (is_array($names)) {
        echo "Array - ";
    }
    if (is_string($string)) {
        echo " String -";
    }
    if (is_int($int)) {
        echo " Int -";
    }
    if (is_bool($bool)) {
        echo " Boolean";
    }

    echo "<hr>";
    echo "<h1>Ejercicio 5</h1>";
    echo "Crear un array con el contenido de una tabla.";
    echo "<Br>";

    $tabla = array(
        "ACTION" => array("GTA 5", "Call Of Duty", "Halo"),
        "MMORPG" => array("World of Warcraft", "Albion Online"),
        "AVENTURE" => array("Prince of Persia")
    );
    $categorias = array_keys($tabla);

    ?>
    <table border="1">
        <tr>
            <?php foreach ($categorias as $categoria) : ?>
                <th><?= $categoria ?></th>
            <?php endforeach ?>
        </tr>
        <tr>
            <td><?= $tabla['ACTION'][0] ?></td>
            <td><?= $tabla['MMORPG'][0] ?></td>
            <td><?= $tabla['AVENTURE'][0] ?></td>
        </tr>
        <tr>
            <td><?= $tabla['ACTION'][1] ?></td>
            <td><?= $tabla['MMORPG'][1] ?></td>
        </tr>
        <tr>
            <td><?= $tabla['ACTION'][2] ?></td>
        </tr>
    </table>
</body>

</html>