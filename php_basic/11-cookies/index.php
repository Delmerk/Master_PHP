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
    <h1>Cookies en PHP:</h1>
    <div>
        Entonces las cookies al final son un mecanismo por el cual se almacenan datos del usuario en el navegador y en el servidor.

        Todo usuario que visita la web pues se guarda ese tipo de archivo y además se puede rastrear o identificar qué usuario vuelven a la web.

        Una cookie es un fichero que se almacena en el ordenador del usuario que visita la web con el fin de recordar datos o rastrear cierta información o comportamiento del mismo en la web y simplemente en el servidor se guarde una referencia pero casi toda la información se guarda en los ficheros de las cookies del propio navegador web y eso luego se le envía al servidor.
    </div>
    <div>

        Las cookies son pequeños archivos de texto que se almacenan en el navegador del usuario. PHP te permite crear, leer y eliminar cookies. A diferencia de las sesiones, las cookies se almacenan en el lado del cliente y se pueden utilizar para almacenar datos pequeños y específicos del usuario, como preferencias o información de inicio de sesión. Aquí hay una descripción general de cómo funcionan las cookies en PHP:
    </div>
    <div>La desventaja es que se almacenan en el cliente por ende es menos seguro.</div>

    <div>
        1. Configuración de cookies: puedes establecer una cookie utilizando la función setcookie(). Esta función toma varios parámetros, incluido el nombre de la cookie, su valor, su fecha de vencimiento y otros atributos opcionales.
    </div>

    <?php
    setcookie('unyear', "cookie de 365 dias", time() + (60 * 60 * 24 * 365));
    setcookie('mi_cookie', "mi cookie", time() + (60 * 60 * 24 * 365));
    ?>
    <a href="ver_cookies.php">Ver cookies</a>
    <div>
        2. Acceso a cookies: puedes acceder a los valores de las cookies utilizando el array superglobal $_COOKIE.
    </div>

    <?php
    echo "El valor de la cookie es: " . $_COOKIE['mi_cookie'];
    ?>

    <div>
        3. Eliminación de cookies: para eliminar una cookie, simplemente establece su fecha de vencimiento en el pasado. Caducarla
    </div>

    <?php
    // setcookie('micookie', '', time() - 3600);
    // O mediante una function
    // if (isset($_COOKIE['mi_cookie'])) {
    //     unset($_COOKIE['mi_cookie']);
    // }
    ?>

    <div>
        Tanto las sesiones como las cookies son herramientas potentes en PHP para gestionar el estado del usuario y almacenar datos específicos del usuario. Las sesiones son ideales para almacenar información confidencial y realizar un seguimiento del estado del usuario durante una sesión de navegación, mientras que las cookies se utilizan a menudo para almacenar preferencias del usuario o para recordar información de inicio de sesión.
    </div>
    <h3><a href="./index2.php">Seguir aprendiendo</a></h3>
</body>

</html>