/* 
Blog básico para mostrar diseño

Recordar que el engine innodb viene por defecto. Y entre las opciones que tenemos
estan InnoDb(mas rapido al hacer inserts y updates) y MyISAM(nos permite tener una mayor velocidad a la hora de recuperar
datos,pero recordar que este no mantiene la integridad referencial).
 */

CREATE TABLE usuarios(
id int(255) auto_increment not null,
nombre varchar(100) not null,
apellidos varchar(100) not null,
email varchar(255) not null,
password varchar(255) not null,
fecha date not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE categorias(
id int(255) auto_increment not null,
nombre varchar(100) not null unique,
CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE posts(
id int(255) auto_increment not null,
usuario_id int(255) not null,
categoria_id int(255) not null,
titulo varchar(100) not null,
descripcion MEDIUMTEXT not null,
fecha date not null,
CONSTRAINT pk_posts PRIMARY KEY(id),
CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;

