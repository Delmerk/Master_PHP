<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El almacenamiento de sesión personalizado</title>
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
    <h2>El almacenamiento de sesión personalizado: </h2>
    Es una característica poderosa de PHP que te permite definir tu propio mecanismo de almacenamiento para los datos de sesión. De forma predeterminada, PHP almacena los datos de sesión en archivos temporales en el servidor, pero con el almacenamiento de sesión personalizado, puedes elegir almacenar los datos en una base de datos, caché en memoria o cualquier otro almacenamiento que se adapte a tus necesidades. Aquí hay una descripción más profunda del almacenamiento de sesión personalizado en PHP:

    <h2>Implementación de un manejador de sesiones personalizado:</h2>
    Para implementar un manejador de sesiones personalizado en PHP, debes registrar una función de devolución de llamada que se encargue de leer, escribir y eliminar los datos de sesión. Puedes registrar tu función de devolución de llamada utilizando la función session_set_save_handler(). Esta función toma seis parámetros que corresponden a diferentes operaciones de sesión:
    <br>
    - open: esta función se llama cuando se abre una sesión. Se utiliza para inicializar cualquier recurso necesario para el almacenamiento de sesiones, como una conexión a una base de datos.
    - close: esta función se llama cuando se cierra una sesión. Se utiliza para liberar cualquier recurso abierto durante la operación open.
    - read: esta función se llama para leer los datos de sesión asociados con un ID de sesión específico.
    - write: esta función se llama para escribir los datos de sesión asociados con un ID de sesión específico.
    - destroy: esta función se llama para eliminar los datos de sesión asociados con un ID de sesión específico.
    - gc: esta función se llama para realizar la recolección de basura en los datos de sesión antiguos o caducados.
    <br>
    Aquí hay un ejemplo de cómo registrar una función de devolución de llamada para un manejador de sesiones personalizado:

    <?php
    session_set_save_handler(
        'open',
        'close',
        'read',
        'write',
        'destroy',
        'gc'
    );
    ?>
    <br>
    En el código anterior, se proporcionan los nombres de las funciones de devolución de llamada para cada operación de sesión. Estas funciones deben definirse en tu código PHP.
    <br>
    Implementación de funciones de devolución de llamada:
    <br>
    A continuación, debes implementar cada una de las funciones de devolución de llamada para manejar las operaciones de sesión. Aquí hay un ejemplo de cómo podrían verse estas funciones:
    <br>
    <?php
    function open($save_path, $session_name)
    {
        // Inicializar cualquier recurso necesario, como una conexión a una base de datos
        return true;
    }

    function close()
    {
        // Liberar cualquier recurso abierto durante la operación open
        return true;
    }

    function read($session_id)
    {
        // Leer los datos de sesión asociados con el ID de sesión proporcionado
        // Devolver los datos serializados o false si no se encuentran datos
    }

    function write($session_id, $session_data)
    {
        // Escribir los datos de sesión serializados asociados con el ID de sesión proporcionado
        // Devolver true si la escritura fue exitosa, false en caso contrario
    }

    function destroy($session_id)
    {
        // Eliminar los datos de sesión asociados con el ID de sesión proporcionado
        // Devolver true si la eliminación fue exitosa, false en caso contrario
    }

    function gc($maxlifetime)
    {
        // Realizar la recolección de basura en los datos de sesión antiguos o caducados
        // Devolver el número de sesiones eliminadas
    }
    ?>
    <br>
    En las funciones de devolución de llamada anteriores, debes implementar la lógica específica para almacenar y recuperar los datos de sesión en tu mecanismo de almacenamiento personalizado, como una base de datos o caché en memoria.

    <h2>Configuración adicional:</h2>
    Además de registrar las funciones de devolución de llamada, también puedes configurar opciones adicionales para el almacenamiento de sesiones personalizado. Por ejemplo, puedes especificar una ruta de guardado personalizada utilizando session_save_path() o ajustar la frecuencia de recolección de basura utilizando session.gc_probability y session.gc_divisor.
    <br>
    Aquí hay un ejemplo de cómo configurar una ruta de guardado personalizada:
    <br>
    <?php
    session_save_path('/ruta/a/tu/almacenamiento');
    ?>
    <br>
    En el código anterior, se establece una ruta personalizada para almacenar los datos de sesión.
    <br>
    El almacenamiento de sesión personalizado te brinda la flexibilidad de elegir el mecanismo de almacenamiento que mejor se adapte a las necesidades de tu aplicación. Esto puede ser útil si necesitas un almacenamiento más escalable, distribuido o seguro para los datos de sesión.
    <h3><a href="../index.php">atrás</a></h3>
</body>

</html>