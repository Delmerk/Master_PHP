-- CONSULTAS MULTITABLA: Sirven para consultar varias tablas en una sola consulta
-- - Recorre todas las tablas y luego hacer una condición. Pero puede ser muy pesado al reccorre todas las tablas.
-- Mostrar las entradas con el nombre del autor y el nombre de la categoria.
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria' FROM usuarios AS u, entradas AS e, categorias AS c WHERE c.id = e.categoria_id AND u.id = e.usuario_id;
-- INNER JOIN
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria' 
    FROM entradas e 
    INNER JOIN usuarios u ON e.usuario_id = u.id
    INNER JOIN categorias c ON e.categoria_id = c.id;
    
-- Mostrar el nombre de las categorias y cuantas entradas tiene cada una
SELECT c.nombre, COUNT(e.id) FROM categorias c, entradas e 
    WHERE e.categoria_id = c.id GROUP BY e.categoria_id;

SELECT c.nombre, COUNT(e.id) FROM categorias c
    LEFT JOIN  entradas e ON e.categoria_id = c.id GROUP BY e.categoria_id;

SELECT c.nombre, COUNT(e.id) FROM entradas e
    RIGHT JOIN  categorias c ON e.categoria_id = c.id GROUP BY e.categoria_id;

-- Mostrar el email de los usuarios y cuantas entradas tienen
SELECT u.email, COUNT(titulo)
 FROM usuarios u, entradas e WHERE e.usuario_id = u.id GROUP BY e.usuario_id;

-- LEFT JOIN : Muestra los datos de la tabla izq aunque la derecha no tenga coincidencias o no alla datos. Mantener todas las filas de la tabla izq.

--  INNER JOIN Sirven para mejorar las condiciones internas. Nos permiten hacer lo mismo que las consultas multitabla. Devuelven unicamente aquellos registros que tienen valores identicos en dos campos, y así unir varias tablas.
-- Hacer una combinación interna, porqué los datos seran iguales entre  campos

