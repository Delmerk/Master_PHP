-- INSERT CATEGORIAS
INSERT INTO
    categorias
VALUES
    (null, "Acción")
INSERT INTO
    categorias
VALUES
    (null, "Fantasia")
    -- Consultas de agrupamiento
SELECT
    titulo
FROM
    entradas
GROUP BY
    categoria_id;

SELECT
    COUNT(titulo) AS "Número de entradas",
    categoria_id
FROM
    entradas
GROUP BY
    categoria_id;

-- HAVING: Es como un where en consultas normales pero sirve para las consultas de agruamiento.
SELECT
    COUNT(titulo) AS "Número de entradas",
    categoria_id
FROM
    entradas
GROUP BY
    categoria_id
HAVING
    COUNT(titulo) > 4;

-- avg: sacar la media
SELECT AVG(id) AS "MEDIA DE ENTRADAS" FROM entradas  
-- count: contar el # de elementos
-- MAX: valor max del group

-- !SUBCONSULTAS
-- Una subconsulta es con los resultados de una subconsulta operar en la consulta principal, jugando con las claves foraneas o las relaciones
-- Son consultas que se ejecutan dentro de otras, también consisten en utilizar los resultados de la subconsulta para operar en la consulta princial. Gracias a las claves ajenas e integridad referencial con los fk foreign key
-- IN Cuando se haga una subconulta existan multiples resultados, se usa cuando la subconsulta devuelve varios resultados si solo devuelve 1 registro usamos mejor =
SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas)
-- Cuando no existan en la tabla de entradas: NOT
SELECT * FROM usuarios WHERE id NOT IN (SELECT usuario_id FROM entradas)

SELECT nombre, apellido1 WHERE id IN (SELECT usuario_id FROM entradas WHERE titulo LIKE "%dragón%");

-- Ejercicio
-- Sacar todas las entradas de la categoria acción utilizando su nombre
SELECT titulo FROM entradas WHERE categoria_id IN (SELECT id FROM categorias WHERE nombre ="Acción")
-- Mostrar las categorias con 3 o más entradas
SELECT nombre FROM categorias WHERE 
    id IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) >= 3);
    -- Hacemos un comparación cuando el id de la categoria se encuentra en la subconsulta o sea igual a categoria_id de entradas

-- Mostrar los usuarios que crearon una entrada un martes
SELECT * FROM usuarios WHERE 
    id IN (SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha) = 6);
-- Mostrar el nombre del usuario que tenga más entradas
SELECT CONCAT(nombre, " " ,apellido1) AS "El usuario con más entradas" FROM usuarios WHERE id =
    (SELECT COUNT(id) FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);
-- Mostrar las categorias sin entradas
SELECT * FROM categorias WHERE id NOT IN
    (SELECT categoria_id FROM entradas)
