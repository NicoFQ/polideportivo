drop table if exists instalacion;
drop table if exists deporte;
drop table if exists pista;
drop table if exists horario;
drop table if exists tipo_usuario;
drop table if exists usuario;
drop table if exists reserva;
drop table if exists clase;
drop table if exists asiste;


-- ****************** SqlDBM: MySQL ******************;
-- ***************************************************;


-- ************************************** instalacion

CREATE TABLE instalacion
(
 id_instalacion varchar(45) NOT NULL ,
 nombre_insta   varchar(45) NOT NULL ,
 descripcion    varchar(455) NOT NULL ,
PRIMARY KEY (id_instalacion)
) ENGINE=INNODB;

-- ************************************** deporte

CREATE TABLE deporte
(
 id_deporte     varchar(45) NOT NULL ,
 nombre_deporte varchar(45) NOT NULL ,
 descripcion    varchar(500) NOT NULL ,
PRIMARY KEY (id_deporte)
) ENGINE=INNODB;

-- ************************************** pista

CREATE TABLE pista
(
 id_pista       varchar(20) NOT NULL ,
 id_instalacion varchar(45) NOT NULL ,
 n_pista        varchar(20) NOT NULL ,
 precio_hora    double NOT NULL ,
PRIMARY KEY (id_pista, id_instalacion),
KEY fkIdx_166 (id_instalacion),
CONSTRAINT FK_166 FOREIGN KEY fkIdx_166 (id_instalacion) REFERENCES instalacion (id_instalacion) ON DELETE CASCADE
) ENGINE=INNODB;

-- ************************************** horario

CREATE TABLE horario
(
 fecha          date NOT NULL ,
 hora_inicio    time NOT NULL ,
 hora_fin       time NOT NULL ,
 id_pista       varchar(20) NOT NULL ,
 id_instalacion varchar(45) NOT NULL ,
PRIMARY KEY (hora_inicio, hora_fin, id_pista, id_instalacion, fecha),
KEY fkIdx_364 (id_pista, id_instalacion),
CONSTRAINT FK_364 FOREIGN KEY fkIdx_364 (id_pista, id_instalacion) REFERENCES pista (id_pista, id_instalacion) ON DELETE CASCADE
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
 id_usuario       varchar(45) NOT NULL ,
 id_tipo_usuario  varchar(45) NOT NULL ,
 dni              varchar(9) NOT NULL ,
 nombre           varchar(45) NOT NULL ,
 apellido_1       varchar(45) NOT NULL ,
 apellido_2       varchar(45) ,
 nombre_usuario   varchar(45) NOT NULL ,
 email            varchar(45) NOT NULL ,
 contrasena       varchar(45) NOT NULL ,
 fecha_alta       date NOT NULL ,
 fecha_nacimiento date NOT NULL ,
 sexo             int ,
 nacionalidad     varchar(45) ,
PRIMARY KEY (id_usuario, id_tipo_usuario),
KEY fkIdx_269 (id_tipo_usuario),
CONSTRAINT FK_269 FOREIGN KEY fkIdx_269 (id_tipo_usuario) REFERENCES tipo_usuario (id_tipo_usuario) ON DELETE CASCADE
) ENGINE=INNODB;

-- ************************************** reserva

CREATE TABLE reserva
(
 id_reserva      int NOT NULL ,
 id_usuario      varchar(45) NOT NULL ,
 id_tipo_usuario varchar(45) NOT NULL ,
 fecha           date NOT NULL ,
 hora_inicio     time NOT NULL ,
 hora_fin        time NOT NULL ,
 id_pista        varchar(20) NOT NULL ,
 id_instalacion  varchar(45) NOT NULL ,
 precio_reserva  double ,
PRIMARY KEY (hora_inicio, hora_fin, id_pista, id_instalacion, id_usuario, id_tipo_usuario, fecha, id_reserva),
KEY fkIdx_277 (id_usuario, id_tipo_usuario),
CONSTRAINT FK_277 FOREIGN KEY fkIdx_277 (id_usuario, id_tipo_usuario) REFERENCES usuario (id_usuario, id_tipo_usuario) ON DELETE CASCADE,
KEY fkIdx_330 (hora_inicio, hora_fin, id_pista, id_instalacion, fecha),
CONSTRAINT FK_330 FOREIGN KEY fkIdx_330 (hora_inicio, hora_fin, id_pista, id_instalacion, fecha) REFERENCES horario (hora_inicio, hora_fin, id_pista, id_instalacion, fecha) ON DELETE CASCADE
) ENGINE=INNODB;


-- ************************************** clase

CREATE TABLE clase
(
 id_clase        varchar(20) NOT NULL ,
 id_deporte      varchar(45) NOT NULL ,
 fecha           date NOT NULL ,
 hora_inicio     time NOT NULL ,
 hora_fin        time NOT NULL ,
 id_usuario      varchar(45) NOT NULL ,
 id_tipo_usuario varchar(45) NOT NULL ,
 id_pista        varchar(20) NOT NULL ,
 id_instalacion  varchar(45) NOT NULL ,
 nombre_clase    varchar(45) NOT NULL ,
 precio_clase    double NOT NULL ,
PRIMARY KEY (fecha, hora_inicio, hora_fin, id_usuario, id_tipo_usuario, id_pista, id_instalacion, id_clase, id_deporte),
KEY fkIdx_157 (id_deporte),
CONSTRAINT FK_157 FOREIGN KEY fkIdx_157 (id_deporte) REFERENCES deporte (id_deporte) ON DELETE CASCADE,
KEY fkIdx_349 (hora_inicio, hora_fin, id_pista, id_instalacion, fecha),
CONSTRAINT FK_349 FOREIGN KEY fkIdx_349 (hora_inicio, hora_fin, id_pista, id_instalacion, fecha) REFERENCES horario (hora_inicio, hora_fin, id_pista, id_instalacion, fecha) ON DELETE CASCADE,
KEY fkIdx_360 (id_usuario, id_tipo_usuario),
CONSTRAINT FK_360 FOREIGN KEY fkIdx_360 (id_usuario, id_tipo_usuario) REFERENCES usuario (id_usuario, id_tipo_usuario) ON DELETE CASCADE
) ENGINE=INNODB;



-- ************************************** asiste

CREATE TABLE asiste
(
 id_usuario      varchar(45) NOT NULL ,
 id_tipo_usuario varchar(45) NOT NULL ,
 id_clase        varchar(20) NOT NULL ,
 id_deporte      varchar(45) NOT NULL ,
 fecha           date NOT NULL ,
 hora_inicio     time NOT NULL ,
 hora_fin        time NOT NULL ,
 id_pista        varchar(20) NOT NULL ,
 id_instalacion  varchar(45) NOT NULL ,
PRIMARY KEY (fecha, hora_inicio, hora_fin, id_pista, id_instalacion, id_usuario, id_tipo_usuario, id_clase, id_deporte),
KEY fkIdx_338 (id_usuario, id_tipo_usuario),
CONSTRAINT FK_338 FOREIGN KEY fkIdx_338 (id_usuario, id_tipo_usuario) REFERENCES usuario (id_usuario, id_tipo_usuario) ON DELETE CASCADE,
KEY fkIdx_343 (fecha, hora_inicio, hora_fin, id_usuario, id_tipo_usuario, id_pista, id_instalacion, id_clase, id_deporte),
CONSTRAINT FK_343 FOREIGN KEY fkIdx_343 (fecha, hora_inicio, hora_fin, id_usuario, id_tipo_usuario, id_pista, id_instalacion, id_clase, id_deporte) REFERENCES clase (fecha, hora_inicio, hora_fin, id_usuario, id_tipo_usuario, id_pista, id_instalacion, id_clase, id_deporte) ON DELETE CASCADE
) ENGINE=INNODB;
