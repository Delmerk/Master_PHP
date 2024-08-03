<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div>
        La construcción de bucle más complicada es la del for. Tiene la siguiente sintaxis: for ( expresión inicial ; condición de fin ; expresión de fin ) { instrucción1; instrucción2; instrucción3; } El funcionamiento es muy sencillo. La expresión inicial se ejecuta una sola vez al principio del bucle. La condición de fin se evalúa cada vez que se ejecuta el bucle. Si es verdadera, se continúa la ejecución y, si es falsa, se sale del bucle. Al final de cada interacción se ejecuta la expresión de fin. Puede simular la instrucción for con una instrucción while de esta forma:

        expresión inicial; while(condición de fin) { instrucción1; instrucción2; instrucción3; expresión de fin; }
    </div>
    <div class="container">
        <h1>Tabla de multiplicar</h1>
        <table class="table">
            <?php echo "<tr>";
            echo "<th></th>";
            for ($cabecera = 1; $cabecera <= 10; $cabecera++) {
                echo "<th>";
                echo $cabecera;
                echo "</th>";
                echo "</tr>";
                for ($x = 1; $x <= 10; $x++) {
                    echo "<tr>";
                    echo "<th>";
                    echo $x;
                    echo "</th>";
                    for ($y = 1; $y <= 10; $y++) {
                        $multiplicacion = $x * $y;
                        echo "<td>";
                        echo "$multiplicacion";
                        echo "</td>";
                    }
                    echo "</tr>";
                }
            } ?>
        </table>
    </div>
</body>

</html>