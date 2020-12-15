
# Sacamos los usuarios que tengan posts creados
SELECT * 
FROM usuarios 
WHERE id IN(
    SELECT usuario_id 
    FROM posts
);

# Sacamos los usuarios que NO tengan posts creados
SELECT * 
FROM usuarios 
WHERE id NOT IN(
    SELECT usuario_id 
    FROM posts
);

# Sacar usuarios que tengan alguna entrada que en su titulo hable de GTA
SELECT nombre,apellidos 
FROM usuarios 
WHERE id IN(
    SELECT usuario_id 
    FROM posts 
    WHERE titulo 
    LIKE '%GTA%'
    
);

# Sacar todas los posts de una categoría en concreto utilizando su nombre Acción
SELECT * 
FROM posts 
WHERE categoria_id IN(
    SELECT id 
    FROM categorias
    WHERE nombre = 'Acción'
); 

# Mostrar las categorías con mas de 2 POSTS
SELECT nombre 
FROM categorias 
WHERE id IN (
    SELECT categoria_id
    FROM POSTS 
    GROUP BY categoria_id
    HAVING COUNT(categoria_id) >= 2
);

# Mostrar los usuarios que crearon un posts un Martes
SELECT nombre,apellidos 
FROM usuarios
WHERE id IN (
    SELECT usuario_id
    FROM posts
    WHERE DAYOFWEEK(fecha) = 3
);

# Mostrar el nombre del usuario que tenga mas posts
SELECT nombre 
FROM usuarios 
WHERE id = (
    SELECT COUNT(id) 
    FROM posts 
    GROUP BY usuario_id 
    ORDER BY COUNT(id) 
    DESC LIMIT 1
);

# Mostrar las categorías sin posts
SELECT nombre
FROM categorias
WHERE id NOT IN(
    SELECT categoria_id 
    FROM posts
);