-- 1: Modificar la comision de los vendedores y ponerla al 2% cuando ganan más de $5000000
UPDATE vendedores SET comision=0.5 WHERE sueldo >= 5000000;

-- 2: Incrementar el precio de todos los coches en un 2%
UPDATE coches SET precio = precio *1.02;

-- 3: Sacar todos los vendedores cuya fecha_registro de alta sea posterior al 10 agosto del 2024
SELECT * FROM vendedores WHERE fecha_registro >= '2024-08-10';

-- 4: Mostrar todos lo vendedores con su nombre y el número de días que llevan en el concesionario
SELECT nombre, DATEDIFF(CURDATE(), fecha_registro) AS 'Dias trabajados' FROM vendedores;

-- 5: Visualizar el nombre y apellidos de los vendedores en una misma columna y su fecha de registro y el día de la semana en que se registraron.
SELECT CONCAT(nombre, " ", apellidos) AS 'Full Name', fecha_registro, DAYNAME(fecha_registro) FROM vendedores;

-- 6: Mostrar el nombre y el salario de los vendedores con cargo de CEO;
SELECT nombre, sueldo FROM vendedores WHERE cargo = "CEO";

-- 7: Visualizar todos los coches en cuya marca exista la letra y que el modelo empiece por R
SELECT * FROM coches WHERE marca LIKE "%e%" AND modelo LIKE "R%";

-- 8: Mostrar todos los vendedores del grupo 2 ordenados por salario de mayo a menor.
SELECT * FROM vendedores WHERE grupo_id = 2 ORDER BY sueldo DESC;

-- 9:  Visualizar los apellidos de los vendedores, fecha y número de grupo, ordenado por fecha desc y mostrar solos los 4 ultimos.
SELECT apellidos, fecha_registro, grupo_id FROM vendedores ORDER BY fecha_registro DESC LIMIT 4

-- 10: Visualizar todos los cargos de los vendedores y el número de vendedores y el número de vendedores que hay en cada cargo.
-- COUNT ES UNA FUNTION DE AGRUPAMIENTO
SELECT cargo, COUNT(id) FROM vendedores GROUP BY cargo;

-- 11: Visualizar las unidades totales vendidas de cada coche a cada cliente. Mostrando el nombre del producto, número de cliente y la suma de unidades
SELECT c.modelo AS 'Modelo del Carro', cl.nombre AS 'Cliente', SUM(e.cantidad) AS 'Cantidad comprada' FROM encargos e
        INNER JOIN coches c ON c.id = e.coche_id
        INNER JOIN clientes cl ON cl.id = e.cliente_id
        GROUP BY e.coche_id, e.cliente_id;

-- 12: Mostrar los clientes que más encargos han hecho, y cuantos hicieron.
SELECT cl.nombre, COUNT(e.id) FROM encargos e 
    INNER JOIN clientes cl ON e.cliente_id = cl.id 
    GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2;

-- 13: Obtener el listado de clientes atendidos por el vendedor "Sol Apellido"
SELECT nombre FROM clientes
        -- INNER JOIN vendedores v ON cl.vendedor_id = v.id;
        WHERE vendedor_id = (SELECT id FROM vendedores WHERE nombre = "Sol" AND apellidos = "Apellido");

-- 14. Obtener listado con los encargos realizados por el cliente 'Fruteria Antonia Inc'
SELECT e.id AS 'Nº ENCARGO', cantidad, c.nombre, co.modelo, e.fecha
        FROM encargos e
        INNER JOIN clientes c ON c.id = e.cliente_id
        INNER JOIN coches co ON co.id = e.coche_id
        WHERE e.cliente_id IN 
        (SELECT id FROM clientes WHERE nombre = 'Luz');

-- 18. Listar los clientes que han hecho algun encargo del coche "Mercedes Ranchera"
SELECT * FROM clientes WHERE id IN 
(SELECT cliente_id FROM encargos WHERE coche_id 
    IN (SELECT id FROM coches WHERE modelo LIKE '%Mercedes Ranchera%'));

-- 19. Obtener los vendedores con 2 o más clientes.
SELECT * FROM vendedores WHERE id IN
    (SELECT vendedor_id FROM clientes GROUP BY vendedor_id HAVING COUNT(id)>=2 );

-- 20. Seleccionar el grupo en el que trabaja el vendedor con mayor salario y mostrar el nombre del grupo.
SELECT * FROM grupos WHERE id IN
(SELECT grupo_id FROM vendedores WHERE sueldo = (
    SELECT MAX(sueldo) FROM vendedores
));

-- 21. Obtener los nombre y ciudades de los clientes con encargos de 3 unidades adelante
SELECT nombre, ciudad FROM clientes WHERE id IN
(SELECT cliente_id FROM encargos WHERE cantidad >= 3);

-- 22. Mostrar listado de clientes (numero de cliente y el nombre) mostrar tambien el numero de vendedor y su nombre.
SELECT c.id, c.nombre, v.id, CONCAT(v.nombre,' ',v.apellidos) as 'VENDEDOR'
FROM clientes c, vendedores v
WHERE c.vendedor_id = v.id;

-- 27. Visualizar los nombres de los clientes y la cantidad de encargos realizados, incluyendos los que no hayan realizado encargos.
INSERT INTO clientes VALUES(NULL, 2, 'Tienda Organica Inc', 'Murcia', 0, CURDATE());

SELECT c.nombre, COUNT(e.id) FROM clientes c
LEFT JOIN encargos e ON c.id = e.cliente_id
GROUP BY 1;

-- 28. Mostrar todos los vendedores y el numero de clientes. Se deben mostrar tengan o no clientes
SELECT v.nombre, v.apellidos, COUNT(c.id) FROM vendedores v
LEFT JOIN clientes c ON c.vendedor_id = v.id
GROUP BY v.id;

--  29. Crear una vista llamada vendedoresA que incluirá todos los vendedores del grupo que se llame "Vendedores A"
CREATE VIEW vendedoresA AS
SELECT * FROM vendedores WHERE grupo_id IN 
    (SELECT id FROM grupos WHERE nombre="Vendedores A");


-- 30. Mostrar los datos del vendedor con mas antiguedad en el concesionario.
SELECT * FROM vendedores ORDER BY fecha ASC LIMIT 1;

-- # 30 plus:  Obtener EL COCHE con mas unidades vendidas.
SELECT * FROM coches WHERE id IN
    (SELECT coche_id FROM encargos WHERE cantidad IN
        (SELECT MAX(cantidad) FROM encargos));


-- 23. Listar todos los encargos realizados con la marca del coche y el nombre del cliente.
SELECT e.id, co.marca, c.nombre FROM encargos e
INNER JOIN coches co ON co.id = e.coche_id
INNER JOIN clientes c ON c.id = e.cliente_id;

-- 24. Listar los encargos con el nombre del coche, el nombre del cliente y el nombre de la ciudad, pero unicamente cuando sean de Barcelona.
SELECT e.id, co.modelo, c.nombre, c.ciudad FROM encargos e
INNER JOIN coches co ON co.id = e.coche_id
INNER JOIN clientes c ON c.id = e.cliente_id
WHERE c.ciudad = 'Barcelona';

-- 25. Obtener una lista de los nombres de los clientes con el importe de sus encargos acumulado
SELECT ci.nombre, SUM(precio*cantidad) AS "IMPORTE" 
FROM clientes ci 
INNER JOIN encargos en ON ci.id = en.cliente_id
INNER JOIN coches co ON en.coche_id = co.id
GROUP BY ci.nombre
ORDER BY 2 ASC;


-- 26. Sacar los vendedores que tienen jefe y sacar el nombre del jefe
SELECT CONCAT(v1.nombre,' ',v1.apellidos) AS 'VENDEDOR', CONCAT(v2.nombre, ' ', v2.apellidos) AS 'JEFE' 
FROM vendedores v1
INNER JOIN vendedores v2 ON v1.jefe = v2.id;