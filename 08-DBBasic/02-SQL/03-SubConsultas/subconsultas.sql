
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
