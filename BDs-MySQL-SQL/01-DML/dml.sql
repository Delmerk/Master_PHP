INSERT INTO usuarios VALUES(null, 'Delmerk', 'Escobar Solarte', 'delmerk@gmail.com', 'password', '2024-06-27');

-- INSERTA FILAS SOLO CON CIERTAS COLUMNAS
INSERT INTO usuarios(email, password) VALUES('dk@gmail.com', 'password');

-- MOSTRAR TODOS LOS REGISTROS / FILAS DE UNA TABLA
SELECT email, nombre FROM usuarios;
-- MOSTRAR TODOS LOS CAMPOS
SELECT * FROM usuarios;

-- OPERADORES ARITMETICOS
SELECT id, email, (id + 7) AS 'OERACIÓN' FROM usuarios;
-- FUNCIONES MATEMATICAS
sql functions math
-- FUNCIONES TEXTOS
SELECT LOWER(nombre) FROM usuarios;
SELECT CONCAT(nombre, ' ', apellido1) AS 'Conversion' FROM usuarios;
SELECT TRIM(nombre, ' ', apellido1, '  ') FROM usuarios;
-- FUNCIONES FECHA
SELECT email, DATEDIFF(fecha_registro, CURDATE()) AS 'Fecha Actual' FROM usuarios;
DAYOFMONTH()
DAYNAME()

-- CONPROBAR SI UN CAMPO IS NULL
SELECT email, ISNULL(apellido1) FROM usuarios;
-- Compruba si dos textos son iguales, si son iguales 0
SELECT email, STRCMP('HOLA') FROM usuarios;
-- DISTINCT muestra solo un registro si hay muchos igual solo 1
SELECT DISTINCT USER() FROM usuarios;


