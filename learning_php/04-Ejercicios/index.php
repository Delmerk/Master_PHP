<!DOCTYPE html>
<html>
<style>
    * {
        color: #fff;
        background-color: black;
    }
</style>

<body>
    <?php
    echo "<h2>Ejercicio 1</h2>";
    $continente = "America";
    $pais = "Colombia";

    echo "Soy del pais de $pais, ubicado en el continente de $continente.";
    echo "<br/>";
    var_dump($continente, $pais);
    echo "<hr>";
    echo "<br/>";
    echo "<h2>Ejercicio 2</h2>";
    echo "Sacar todos los números pares que hay del 1 al 100";
    echo "<br/>";
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            switch ($i) {
                case $i != 100:
                    echo "$i, ";
                    break;
                default:
                    echo "$i.";
                    break;
            }
        }
    }
    echo "<br/>";
    echo "<hr>";
    echo "<h2>Ejercicio 3</h2>";
    echo "Escribir por pantalla los cuadrados (un número multiplicado por si mismo.) de los 40 primeros numeros naturales, usando while.";
    echo "<br/>";
    $count = 0;
    while ($count <= 10) {
        $cuadrado = $count * $count;
        echo "<p>El cuadrado de $count es: $cuadrado</p>";
        $count++;
    }

    echo "<h3>Ahora usando Bucle for</h3>";
    echo "<br/>";
    for ($i = 0; $i <= 10; $i++) {
        $cuadrado = $i * $i;
        echo "<p>El cuadrado de $i es: $cuadrado</p>";
    }
    echo "<hr>";
    ?>
    <form action="./index.php">
        <label for="num1">Numero 1:</label>
        <input type="number" name="num1" required>
        <label for="num1">Numero 2:</label>
        <input type="number" name="num2" required>
        <input type="submit" value="Operar">
    </form>
    <?php
    echo "<br/>";
    echo "<hr/>";
    echo "<h2>Ejercicio 4</h2>";
    echo "Recoger 2 numeros por URL o GET, y hacer todas las operaciones básicas con ellos.";
    echo "<br/>";
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];

        echo "<h3>Culculadora</h3>";
        echo "La Resta entre $num1 y $num2: " . ($num1 - $num2) . "<br/>";
        echo "La Suma entre $num1 y $num2: " . ($num1 + $num2) . "<br/>";
        echo "La División entre $num1 y $num2: " . ($num1 / $num2) . "<br/>";
        echo "La Multiplicación entre $num1 y $num2: " . ($num1 * $num2) . "<br/>";
        echo "La Resto entre $num1 y $num2: " . ($num1 % $num2) . "<br/>";
    } else {
        echo "Debes ingresar correctamente los números";
    }
    echo "<br/>";
    echo "<hr>";
    echo "<h2>Ejercicio 5</h2>";
    echo "Mostrar todos los números entre 2 números que nos lleguen por la URL ";
    echo "<br/>";
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        if ($num1 < $num2) {
            for ($i = $num1; $i < $num2; $i++) {
                echo "$i, ";
            }
        } elseif ($num1 > $num2) {
            for ($i = $num1; $i > $num2; $i--) {
                echo "$i, ";
            }
        }
    } else {
        echo "Debes ingresar correctamente los números";
    }
    echo "<br/>";
    echo "<hr>";
    echo "<h2>Ejercicio 6</h2>";
    echo "Mostrar las tablas de multiplicar del 1 al 10 en una tabla html";
    echo "<br/>";
    ?>
    <h2>Tablas de multiplicar</h2>
    <table>
        <tr>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<th>Tabla del $i</th>";
            }
            ?>
        </tr>
        <tr>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<td>";
                for ($x = 1; $x <= 10; $x++) {
                    echo "$i x $x = " . ($i * $x) . "<br/>";
                }
                echo "</td>";
            }
            ?>
        </tr>
    </table>
    <?php
    echo "<br/>";
    echo "<hr>";
    echo "<h2>Ejercicio 7</h2>";
    echo "Mostrar todos los números impares entre 2 números que nos lleguen por la URL ";
    echo "<br/>";
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        if ($num1 < $num2) {
            for ($i = $num1; $i <= $num2; $i++) {
                if ($i % 2 != 0) {
                    switch ($i) {
                        case $i != $num2:
                            echo "$i, ";
                            break;
                        default:
                            echo "$i.";
                            break;
                    }
                }
            }
        } elseif ($num1 > $num2) {
            for ($i = $num1; $i >= $num2; $i--) {
                if ($i % 2 != 0) {
                    switch ($i) {
                        case $i != $num2:
                            echo "$i, ";
                            break;
                        default:
                            echo "$i.";
                            break;
                    }
                }
            }
        }
    } else {
        echo "Debes ingresar correctamente los números";
    }


    ?>
</body>

</html>