# Mostrar las entradas con el nombre del usuario y el nombre de la categoría #

SELECT p.id,p.titulo,u.nombre AS 'Autor' ,c.nombre AS 'Categoría'
FROM posts p, usuarios u , categorias c
WHERE p.usuario_id = u.id AND p.categoria_id = c.id;

# Mostrar el nombre de las categorías y cuantas posts tiene
SELECT c.nombre , COUNT(p.id) 
FROM categorias c,posts p
WHERE p.categoria_id = c.id
GROUP BY p.categoria_id;

# Mostrar el email de los usuarios y al lado cuantos posts tiene
SELECT u.email , COUNT(p.titulo) FROM usuarios u, posts p
WHERE p.usuario_id = u.id 
GROUP BY p.usuario_id;

# El problema de estas consultas es que se recorren todas las tablas
# y esto puede ser pesado, por esto vamos a utilizar INNER JOIN

# INNER JOIN & RIGHT AND LEFT JOIN(igual que el inner join pero muestra los nulos y los 0 de la tabla izq o der)

# 1
SELECT p.id , p.titulo , u.nombre AS 'Autor' , c.nombre AS 'Categoría'
FROM posts p
INNER JOIN usuarios u ON p.usuario_id = u.id
INNER JOIN categorias c ON p.categoria_id = c.id;

# 2
SELECT c.nombre , COUNT(p.id) 
FROM categorias c
LEFT JOIN posts p ON c.id = p.categoria_id
GROUP BY p.categoria_id;