/* 




ENTEROS MAS GRANDES
MEDIUMINT
BIGINT
 */
# Algunos comandos básicos a no olvidar:
show tables;
describe tablename;
DROP DATABASE dbName;
DROP TABLE tablename;
use nombredeDB;
SELECT * FROM nombreTabla;
SELECT algo FROM nombreTabla WHERE sentencia de where;
/* CREAR TABLA + algunas validaciones básicas */

CREATE TABLE usuarios (
id int(11) auto_increment not null,
nombre varchar(100) not null,
apellidos varchar(60) default'hola que tal',
email varchar(100) not null,
password varchar(250),
CONSTRAINT pk_usuarios PRIMARY KEY(id)
);

# MODIFICAR TABLAS

# Renombrar una tabla
ALTER TABLE usuarios RENAME TO usuarios_renom;

# Cambiar nombre de columna
#            tabla                colVieja  colModif        Restricciones
ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) not null;

# Modificar columna sin cambiar su nombre
ALTER TABLE usuarios_renom MODIFY apellido varchar(50) null;

# Añadir columna a una tabla
ALTER TABLE usuarios_renom ADD website varchar(100) not null;

# Añadir restricción a columna
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

# Borrar una columna
ALTER TABLE usuarios_renom DROP website;


