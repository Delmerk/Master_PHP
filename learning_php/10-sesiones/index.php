<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones y cookies</title>
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
    <div>
        Las sesiones y cookies son mecanismos importantes utilizados en PHP para almacenar datos del usuario en el servidor y realizar un seguimiento del estado del usuario. Aquí hay una explicación detallada:
    </div>

    <h1>
        Sesiones en PHP:
    </h1>

    <div>
        Las sesiones en PHP te permiten almacenar información sobre un usuario específico en el servidor durante un período de tiempo determinado. Son útiles para realizar un seguimiento del estado del usuario, autenticación, preferencias personales y cualquier otra información que necesite persistir durante múltiples solicitudes de página. Aquí hay una descripción general de cómo funcionan las sesiones en PHP:
    </div>

    <div>1. Inicio de sesión: para iniciar una sesión en PHP, utiliza la función session_start(). Esta función se llama normalmente al comienzo de una página PHP y antes de enviar cualquier contenido al navegador.</div>

    <?php
    session_start();
    ?>

    <div>
        2. Almacenamiento de datos: una vez que se ha iniciado una sesión, puedes almacenar datos en ella utilizando variables de sesión. Las variables de sesión se almacenan en un array superglobal llamado $_SESSION. Aquí hay un ejemplo:
    </div>

    <?php
    $_SESSION['nombre_usuario'] = "Delmerk";
    $_SESSION['edad'] = 24;
    ?>

    <div>
        3. Acceso a datos: puedes acceder a los datos almacenados en la sesión en cualquier página PHP donde hayas iniciado sesión. Simplemente utiliza el nombre de la variable de sesión para recuperar su valor.

    </div>
    <?php
    echo "Bienvenido, " . $_SESSION['nombre_usuario'];
    ?>

    <div>
        4. Destrucción de sesión: cuando hayas terminado de utilizar la sesión, puedes destruirla utilizando la función session_destroy(). Esto eliminará todos los datos asociados con la sesión actual.
    </div>

    <h2>Cómo funcionan las sesiones:</h2>

    <div>Cuando se inicia una sesión en PHP, el servidor crea un identificador de sesión único (ID de sesión) y lo envía al navegador del usuario como una cookie. Esta cookie de sesión se utiliza para identificar al usuario durante solicitudes posteriores a la misma aplicación web. El ID de sesión se utiliza para asociar los datos de sesión específicos del usuario almacenados en el servidor.</div>

    <h2>Almacenamiento de datos de sesión:</h2>

    <div>Los datos de sesión se almacenan en el servidor, normalmente en el archivo system tmp o en una base de datos. PHP proporciona el array superglobal $_SESSION para acceder y manipular los datos de sesión. Puedes almacenar cualquier tipo de datos en variables de sesión, incluidos enteros, cadenas, matrices y objetos. Aquí hay un ejemplo:</div>

    <div>
        En el ejemplo anterior, se establecen tres variables de sesión: nombre_usuario, edad y preferencias. La variable preferencias es una matriz que almacena pares clave-valor adicionales.
    </div>

    <h2>Acceso a datos de sesión:</h2>
    <div>Puedes acceder a los datos de sesión en cualquier página PHP donde hayas iniciado sesión utilizando el nombre de la variable de sesión. Aquí hay un ejemplo:</div>

    <?php
    $_SESSION['nombre_usuario'] = "Delmerk";
    $_SESSION['edad'] = 24;
    $_SESSION['preferencias'] = array('color' => 'negro', 'tamaño' => 'grande');
    ?>
    <?php
    echo "<p>Bienvenido, " . $_SESSION['nombre_usuario'] . "</p>";
    echo "<p>Tu edad es: " . $_SESSION['edad'] . "</p>";
    echo "<p>Tu color preferido es: " . $_SESSION['preferencias']['color'] . "</p>";
    session_destroy();
    ?>
    <h2>Tiempo de vida de la sesión:</h2>
    <div>Puedes controlar la duración de una sesión mediante el ajuste de la configuración de sesión en PHP. La función session_set_cookie_params() te permite especificar la fecha de vencimiento de la cookie de sesión, lo que determina cuánto tiempo permanecerá activa la sesión. Aquí hay un ejemplo:</div>

    <?php
    session_set_cookie_params(3600); // Establece la sesión para que expire en una hora
    session_start();
    ?>

    <h2>Seguridad de sesión:</h2>
    <div>Es importante tener en cuenta las consideraciones de seguridad al trabajar con sesiones. Aquí hay algunas prácticas recomendadas:</div>
    <ul>
        <li>Utiliza HTTPS para cifrar los datos de sesión y protegerlos de interceptaciones.</li>
        <li>Utiliza session_regenerate_id() para regenerar el ID de sesión y proteger contra ataques de fijación de sesión.</li>
        <li>Implementa medidas de seguridad adicionales, como la validación de entradas y la prevención de ataques CSRF (falsificación de solicitud entre sitios).</li>
    </ul>
    <h2>Aquí hay algunos conceptos adicionales y mejores prácticas relacionados con las sesiones que vale la pena conocer:</h2>
    <ol>
        <li>1. Manejo de errores de sesión: ... <a href="./sesion/s1.php">Aprende más</a></li>
        <li>2. Almacenamiento de sesión personalizado: ...<a href="./sesion/s2.php">Aprende más</a></li>
        <li>3. Bloqueo de sesión: ...<a href="./sesion/s3.php">Aprende más</a></li>
        <li>4. Serialización y deserialización de datos de sesión: ... <a href="./sesion/s4.php">Aprende más</a></li>
        <li>Limpieza de sesiones: ...<a href="./sesion/s5.php">Aprende más</a></li>
        <li>Migración de sesión: ...<a href="./sesion/s6.php">Aprende más</a></li>
        <li>Consideraciones de rendimiento: ...<a href="./sesion/s7.php">Aprende más</a></li>
        <li>Seguridad avanzada de sesión: ...<a href="./sesion/s8.php">Aprende más</a></li>
        <li>Compatibilidad entre navegadores: ...<a href="./sesion/s9.php">Aprende más</a></li>
        <li>Pruebas y depuración de sesiones: ...<a href="./sesion/s10.php">Aprende más</a></li>
    </ol>
    <h3><a href="./index2.php">Seguir aprendiendo</a></h3>
</body>

</html>