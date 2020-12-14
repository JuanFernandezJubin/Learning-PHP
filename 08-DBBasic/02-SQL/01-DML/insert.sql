/* 
INSERTANDO REGISTROS
 */

INSERT INTO usuarios VALUES(
null,
'Juan Ignacio',
'Fernandez Jubin',
'fernandez@gmail.com',
'123456',
'2020-05-01'
);

INSERT INTO usuarios VALUES(
null,
'Antonio',
'Jubin',
'antonio@gmail.com',
'123456',
'2020-05-02'
);

INSERT INTO usuarios VALUES(
null,
'Roberto',
'Perez',
'roberto@gmail.com',
'123456',
'2020-05-01'
);

# Insertar filas solo con ciertas columnas / si no te deja,modificar desde phpmyadmin los not null de usuarios
INSERT INTO usuarios(email,password) VALUES ('paparoach@gmail.com','123456');