/* 
CONSULTAS
 */

SELECT * FROM usuarios;

SELECT nombre,apellidos,email FROM usuarios;

# Operadores aritméticos

SELECT email, (4+7) AS 'OPERACION' FROM usuarios;

# Orden & Limit
SELECT id,email, (4+7) AS 'OPERACION' FROM usuarios ORDER BY id;
SELECT id,email, (4+7) AS 'OPERACION' FROM usuarios ORDER BY id ASC LIMIT 0,2;
SELECT id,email, (id+7) AS 'OPERACION' FROM usuarios ORDER BY id DESC LIMIT 1;

# Funciones matemáticas
SELECT ABS(7) AS 'OPERACION' FROM usuarios ORDER BY id DESC;
SELECT CEIL(7.32) AS 'OPERACION' FROM usuarios ORDER BY id DESC; # Redondeo a la alta
SELECT FLOOR(7.32) AS 'OPERACION' FROM usuarios ORDER BY id DESC; # Redondeo a la baja
# mod()  power() sqrt() in() pi() rand() round(7.91,decimales que quiero sacar) truncate()
SELECT ROUND(id,2) AS 'OPERACION' FROM usuarios ORDER BY id DESC;

# Funciones para strings
SELECT UPPER(nombre) FROM usuarios;
SELECT LOWER(nombre) FROM usuarios;
SELECT CONCAT(nombre,apellidos) AS 'Conversion' FROM usuarios;
SELECT LENGTH(CONCAT(nombre,' ',apellidos)) AS 'Conversion' FROM usuarios;
SELECT TRIM(CONCAT(nombre,' ',apellidos)) AS 'Conversion' FROM usuarios;

# Funciones para fechas

SELECT email,fecha FROM usuarios; 
SELECT email,fecha,CURDATE() FROM usuarios;  # Current Date
SELECT email,DATEDIFF(fecha,CURDATE()) FROM usuarios; 
SELECT email,DAYNAME(fecha) FROM usuarios; 
SELECT email,DAYOFWEEK(fecha) FROM usuarios; 
SELECT email,DAYOFYEAR(fecha) FROM usuarios; 
SELECT email,MONTH(fecha) FROM usuarios; 
SELECT email,YEAR(fecha) FROM usuarios; 
SELECT email,CURTIME() FROM usuarios;
SELECT email,SYSDATE() FROM usuarios;  
SELECT email,DATE_FORMAT(fecha,'%d-%m-%Y') FROM usuarios;  

# Otras funciones
SELECT email,ISNULL(apellidos) FROM usuarios;  
SELECT email,STRCMP('hola',apellidos) FROM usuarios;
SELECT USER() FROM usuarios;
SELECT VERSION() FROM usuarios;
SELECT DISTINCT USER() FROM usuarios;
SELECT DISTINCT VERSION() FROM usuarios;
SELECT email,IFNULL(nombre , 'CAMPO VACIO') FROM usuarios;