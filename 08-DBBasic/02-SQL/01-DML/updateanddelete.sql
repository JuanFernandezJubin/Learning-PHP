/* 
UPDATE & DELETE
 */


# Modificar datos

UPDATE usuarios 
SET fecha = CURDATE() , apellido = 'admin'
WHERE id = 4;

# Eliminar registros

DELETE FROM usuarios 
WHERE email = 'admin@admin.com';



