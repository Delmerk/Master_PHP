SELECT * FROM usuarios WHERE email = "dk@gmail.com";
/*
OERADORES DE COMPARACIÓN
=
!=
<
>
<=
>=
between A and B
IN
IS NULL
IS NOT NULL
LIKE
NOT LIKE
*/

/*
operadores lógicos
ORAND
NOT
*/

/*
COMODIN 
Cualquier cantidad de caracteres: %
Un caracter desconocido: _
*/
-- Usuarios registrado en el 2023 o que su fecha es null
SELECT nombre, apellido1 FROM usuarios WHERE YEAR(fecha_registro) = 2023 OR ISNULL(fecha_registro);
-- Registros dónde su apellido1 contenga la letra a y su contraseña sea igual a contraseña
SELECT email, apellido1 FROM usuarios WHERE apellido1 LIKE '%A%' AND password = 'contraseña';
-- cuando año de registro es par o impar !=
SELECT email, apellido1 FROM usuarios WHERE (YEAR(fecha_registro)%2 = 0);
-- Todos los registros de usuarios cuyo nombre tenga mas de 5 letras y se hayan registrado antes del 2024
SELECT UPPER(nombre) FROM usuarios WHERE (LENGTH(nombre) > 5) AND (YEAR(fecha_registro) < 2024);