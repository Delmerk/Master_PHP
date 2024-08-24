-- ACTUALIZAR
UPDATE usuarios SET fecha=CURDATE() 

-- ELIMINAR
DELETE FROM usuarios WHERE email = "admin@mail.com";