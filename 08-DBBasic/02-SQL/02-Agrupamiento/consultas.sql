/* 
CONSULTAS DE AGRUPAMIENTO
 */

SELECT count(titulo) AS 'Contador' , categoria_id 
FROM posts 
GROUP BY categoria_id;

# Recordar que cuando hacemos consultas de agrupamiento(usamos el group by) con condición
# no podemos usar el WHERE, sino que utilizamos el HAVING

SELECT COUNT(titulo) AS 'Contador' , categoria_id 
FROM posts 
GROUP BY categoria_id 
HAVING COUNT(titulo) >= 3;

/*
FUNCIONES DE AGRUPAMIENTO
AVG         Sacar la media
COUNT       Contar
MAX         Devolver el valor máximo del grupo
MIN         Devolver el valor mínimo del grupo
SUM         Nos permite sumar todo el contenido del grupo
*/

SELECT AVG(precio) AS 'Media Posts' FROM productos ; 
SELECT MAX(id) AS 'Máximo ID',titulo FROM posts;
SELECT MIN(id) AS 'Mínimo ID', titulo FROM posts;
SELECT SUM(id) AS 'Suma id' FROM posts;