/* 
CONSULTAS CON WHERE
 */

SELECT * FROM usuarios WHERE email = 'admin@admin.com';

/*
OPERADORES DE COMPARACION CLASICOS
Igual           =
Distinto        !=
Menor           <
Mayor           >
Menor o igual   <=
Mayor o igual   >=
Entre           between A and B
En              in
Es nulo         is null
No es nulo      is not null
Como            like
No es como      not like
*/
/*
COMODINES
Cualquier cantidad de caracteres %
Un caracter desconocido _
*/

# Ejemplos

# 1.Mostrar nombres y apellidos de todos los usuarios registrados en 2019
SELECT nombre,apellidos
FROM usuarios 
WHERE YEAR(fecha) = 2019;

# 2.Mostrar nombres y apellidos de todos los usuarios que no se registraron en 2019 
# o fecha nula 
SELECT nombre,apellidos 
FROM usuarios 
WHERE YEAR(fecha) != 2019 OR ISNULL(fecha);

# 3. El email de los usuarios que en su apellido contengan la letra a 
# y la contraseña sea 123456
SELECT email 
FROM usuarios 
WHERE apellidos 
LIKE '%a%' 
AND password = '123456';

# 4.Sacar todos los datos de un usuario siempre y cuando el año sea par
SELECT * 
FROM usuarios 
WHERE (YEAR(fecha) % 2 = 0);

# 5.Todos los registros de usuarios cuyo nombre tenga mas de 5 letras
# y que ademas se haya registrado antes del 2020,mostrar el nombre en mayúscula.

SELECT UPPER(nombre) , apellidos 
FROM usuarios 
WHERE (LENGTH(nombre) > 5 )
AND (YEAR(fecha) < 2020);
