-- RENOMBRAR UNA TABLA
ALTER TABLE usuarios RENAME TO usuarios_renom;

-- CAMBIAR NOMBRE DE UNA COLUMNA
ALTER TABLE usuarios_renom CHANGE apellido apellidos varchar(100) null;

-- MODIFICAR COLUMNA SIN CAMBIAR SU NOMBRE
ALTER TABLE usuarios_renom MODIFY apellidos char(40) not null;

-- AÑADIR COLUMNA
ALTER TABLE usuarios_renom ADD website varchar(100) null;

-- AÑADIR RESTRICCION A COLUMNA
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

-- BORRAR UNA COLUMNA
ALTER TABLE usuarios_renom DROP website;

-- PROGRAM DÍA - TABLAS RELACIONES
-- https://www.udemy.com/course/master-en-php-sql-poo-mvc-laravel-symfony-4-wordpress/learn/lecture/11507218#questions