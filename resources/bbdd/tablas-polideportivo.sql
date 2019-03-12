drop table if exists gustos_usuario;
drop table if exists asiste;
drop table if exists compra;
drop table if exists clase;
drop table if exists reserva;
drop table if exists usuario;
drop table if exists tipo_usuario;
drop table if exists horario;
drop table if exists pista;
drop table if exists deporte;
drop table if exists instalacion;
drop table if exists noticia;


-- ************************************** instalacion
CREATE TABLE instalacion
(
 id_instalacion varchar(45) NOT NULL ,
 nombre_insta   varchar(45) NOT NULL ,
PRIMARY KEY (id_instalacion)
) ENGINE=INNODB;

-- ************************************** deporte
CREATE TABLE deporte
(
 id_deporte     varchar(45) NOT NULL ,
 nombre_deporte varchar(45) NOT NULL ,
PRIMARY KEY (id_deporte)
) ENGINE=INNODB;

-- ************************************** pista
CREATE TABLE pista
(
 id_pista       varchar(20) NOT NULL ,
 n_pista        varchar(100) NOT NULL ,
 precio_hora    double NOT NULL ,
 id_deporte     varchar(45) NOT NULL ,
 id_instalacion varchar(45) NOT NULL ,
 estado         int NOT NULL ,
 comentarios    varchar(500) NULL ,
PRIMARY KEY (id_pista),
KEY fkIdx_374 (id_deporte),
CONSTRAINT FK_374 FOREIGN KEY fkIdx_374 (id_deporte) REFERENCES deporte (id_deporte) ON DELETE CASCADE,
KEY fkIdx_377 (id_instalacion),
CONSTRAINT FK_377 FOREIGN KEY fkIdx_377 (id_instalacion) REFERENCES instalacion (id_instalacion) ON DELETE CASCADE
) ENGINE=INNODB;

-- ************************************** horario
CREATE TABLE horario
(
 fecha       date NOT NULL ,
 hora_inicio time NOT NULL ,
 hora_fin    time NOT NULL ,
 id_pista    varchar(20) NOT NULL ,
PRIMARY KEY (hora_inicio, hora_fin, id_pista, fecha),
KEY fkIdx_364 (id_pista),
CONSTRAINT FK_364 FOREIGN KEY fkIdx_364 (id_pista) REFERENCES pista (id_pista) ON DELETE CASCADE
) ENGINE=INNODB;
-- ************************************** tipo_usuario

CREATE TABLE tipo_usuario
(
 id_tipo_usuario varchar(45) NOT NULL ,
 nombre_tipo     varchar(45) NOT NULL ,
PRIMARY KEY (id_tipo_usuario)
) ENGINE=INNODB;

-- ************************************** usuario
CREATE TABLE usuario
(
 id_usuario       INT AUTO_INCREMENT NOT NULL ,
 email            varchar(45) NOT NULL ,
 contrasena       varchar(200) NOT NULL ,
 dni              varchar(20) NOT NULL ,
 nombre           varchar(45) NOT NULL ,
 apellido_1       varchar(45) NOT NULL ,
 apellido_2       varchar(45) ,
 direccion        varchar(200) NOT NULL,
 imagen_perfil    varchar(200) NULL,
 nombre_usuario   varchar(45) NOT NULL ,
 fecha_nacimiento date NOT NULL ,
 sexo             int ,
 nacionalidad     varchar(45) ,
 id_tipo_usuario  varchar(45) DEFAULT 'CL' NOT NULL ,
 fecha_alta       TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
 UNIQUE (email), 
 UNIQUE (nombre_usuario), 
PRIMARY KEY (id_usuario),
KEY fkIdx_384 (id_tipo_usuario),
CONSTRAINT FK_384 FOREIGN KEY fkIdx_384 (id_tipo_usuario) REFERENCES tipo_usuario (id_tipo_usuario) ON DELETE CASCADE
) ENGINE=INNODB;

-- ************************************** reserva
CREATE TABLE reserva
(
 id_reserva     INT AUTO_INCREMENT NOT NULL ,
 id_usuario     INT NOT NULL ,
 fecha          date NOT NULL ,
 hora_inicio    time NOT NULL ,
 hora_fin       time NOT NULL ,
 id_pista       varchar(20) NOT NULL ,
 precio_reserva double ,
 fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
PRIMARY KEY (id_reserva, id_usuario, fecha, hora_inicio, hora_fin, id_pista),
KEY fkIdx_277 (id_usuario),
CONSTRAINT FK_277 FOREIGN KEY fkIdx_277 (id_usuario) REFERENCES usuario (id_usuario),
KEY fkIdx_330 (hora_inicio, hora_fin, id_pista, fecha),
CONSTRAINT FK_330 FOREIGN KEY fkIdx_330 (hora_inicio, hora_fin, id_pista, fecha) REFERENCES horario (hora_inicio, hora_fin, id_pista, fecha) ON DELETE CASCADE
) ENGINE=INNODB;


-- ************************************** clase
CREATE TABLE clase
(
 id_clase     varchar(20) NOT NULL ,
 fecha        date NOT NULL ,
 hora_inicio  time NOT NULL ,
 hora_fin     time NOT NULL ,
 id_pista     varchar(20) NOT NULL ,
 nombre_clase varchar(45) NOT NULL ,
 precio_clase double NOT NULL ,
 id_usuario   int NOT NULL ,
PRIMARY KEY (id_clase, fecha, hora_inicio, hora_fin, id_pista),
KEY fkIdx_349 (hora_inicio, hora_fin, id_pista, fecha),
CONSTRAINT FK_349 FOREIGN KEY fkIdx_349 (hora_inicio, hora_fin, id_pista, fecha) REFERENCES horario (hora_inicio, hora_fin, id_pista, fecha) ON DELETE CASCADE,
KEY fkIdx_380 (id_usuario),
CONSTRAINT FK_380 FOREIGN KEY fkIdx_380 (id_usuario) REFERENCES usuario (id_usuario) ON DELETE CASCADE
) ENGINE=INNODB;

-- ************************************** compra
CREATE TABLE compra
(
 id_compra     	INT AUTO_INCREMENT NOT NULL ,
 id_usuario     INT NOT NULL ,
 id_clase		varchar(20) NOT NULL,
 fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
PRIMARY KEY (id_compra, id_usuario, id_clase),
KEY fkIdx_CLASE_277 (id_usuario),
CONSTRAINT FK_CLASE_277 FOREIGN KEY fkIdx_CLASE_277 (id_usuario) REFERENCES usuario (id_usuario),
CONSTRAINT FK_CLASE FOREIGN KEY (id_clase) REFERENCES clase(id_clase)
) ENGINE=INNODB;

-- ************************************** asiste
CREATE TABLE asiste
(
 id_usuario  int NOT NULL ,
 id_clase    varchar(20) NOT NULL ,
 fecha       date NOT NULL ,
 hora_inicio time NOT NULL ,
 hora_fin    time NOT NULL ,
 id_pista    varchar(20) NOT NULL,
PRIMARY KEY (id_usuario, id_clase, fecha, hora_inicio, hora_fin, id_pista),
KEY fkIdx_338 (id_usuario),
CONSTRAINT FK_338 FOREIGN KEY fkIdx_338 (id_usuario) REFERENCES usuario (id_usuario) ON DELETE CASCADE,
KEY fkIdx_343 (id_clase, fecha, hora_inicio, hora_fin, id_pista),
CONSTRAINT FK_343 FOREIGN KEY fkIdx_343 (id_clase, fecha, hora_inicio, hora_fin, id_pista) REFERENCES clase (id_clase, fecha, hora_inicio, hora_fin, id_pista) ON DELETE CASCADE
) ENGINE=INNODB;

-- ************************************** asiste
CREATE TABLE gustos_usuario
(
 id_gustos  			INT AUTO_INCREMENT NOT NULL,
 deportes_favoritos    	varchar(1000) NULL,
 comentarios			varchar(1000) NULL,
 id_usuario    			INT NOT NULL,
PRIMARY KEY (id_gustos),
CONSTRAINT FK_999 FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario) ON DELETE CASCADE
) ENGINE=INNODB;

-- ************************************** noticias
create table noticia(
    id int auto_increment,
    titulo varchar(1000) not null,
    texto varchar (5000) not null,
    imagen varchar (255) NULL,
    fecha date not null,
    primary key(id)
);
