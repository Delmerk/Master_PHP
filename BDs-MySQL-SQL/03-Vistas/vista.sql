-- VISTAS en MYSQL : La podemos definir como una consulta almacenada en la db que se tiliza ocmo una tabla virtual.
-- No almacena datos si no que utiliza asociaciones y los datos originales de las tablas de forma que siempre se mantiene actulizada

CREATE VIEW entradas_con_nombres AS
    SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria' 
        FROM entradas e 
        INNER JOIN usuarios u ON e.usuario_id = u.id
        INNER JOIN categorias c ON e.categoria_id = c.id;

DROP VIEW entradas_con_nombres;