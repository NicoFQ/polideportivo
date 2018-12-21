drop table if exists usuario;
drop table if exists administrador;
drop table if exists cliente;
drop table if exists profesor;
drop table if exists instalacion;
drop table if exists pista;
drop table if exists deporte;
drop table if exists clase;
drop table if exists reserva;
drop table if exists pertenece;
-- ************************************** usuario

CREATE TABLE usuario
(
 dni varchar(9) NOT NULL ,
PRIMARY KEY (dni)
) ENGINE=INNODB;

-- ************************************** administrador

CREATE TABLE administrador
(
 id_administrador varchar(20) NOT NULL ,
 dni              varchar(9) NOT NULL ,
 nombre           varchar(45) NOT NULL ,
 apellido1        varchar(45) NOT NULL ,
 apellido2        varchar(45) ,
 fecha_nacimiento date NOT NULL ,
PRIMARY KEY (dni, id_administrador),
KEY fkIdx_193 (dni),
CONSTRAINT FK_193 FOREIGN KEY fkIdx_193 (dni) REFERENCES usuario (dni) ON DELETE CASCADE
) ENGINE=INNODB;

-- ************************************** cliente

CREATE TABLE cliente
(
 dni              varchar(9) NOT NULL ,
 id_cliente       varchar(20) NOT NULL ,
 nombre           varchar(45) NOT NULL ,
 apellido1        varchar(45) NOT NULL ,
 apellido2        varchar(45) NOT NULL ,
 fecha_nacimiento varchar(45) NOT NULL ,
PRIMARY KEY (dni, id_cliente),
KEY fkIdx_189 (dni),
CONSTRAINT FK_189 FOREIGN KEY fkIdx_189 (dni) REFERENCES usuario (dni) ON DELETE CASCADE
) ENGINE=INNODB;


-- ****************** SqlDBM: MySQL ******************;
-- ***************************************************;


-- ************************************** profesor

-- CREATE TABLE profesor
-- (
-- id_profesor      varchar(20) NOT NULL ,
-- dni              varchar(9) NOT NULL ,
-- nombre           varchar(45) NOT NULL ,
-- apellido1        varchar(45) NOT NULL ,
-- apellido2        varchar(45) ,
-- fecha_nacimiento date NOT NULL ,
-- descrip          varchar(200) NOT NULL ,
-- PRIMARY KEY (dni, id_profesor),
-- KEY fkIdx_196 (dni),
-- CONSTRAINT FK_196 FOREIGN KEY fkIdx_196 (dni) REFERENCES usuario (dni)
-- ) ENGINE=INNODB;

CREATE TABLE profesor
(
 id_profesor      varchar(20) NOT NULL ,
 dni              varchar(9) NOT NULL ,
 nombre           varchar(45) NOT NULL ,
 apellido1        varchar(45) NOT NULL ,
 apellido2        varchar(45) ,
 fecha_nacimiento date NOT NULL ,
 descrip          varchar(200) NOT NULL ,
PRIMARY KEY (dni, id_profesor),
KEY fkIdx_196 (dni),
CONSTRAINT FK_196 FOREIGN KEY fkIdx_196 (dni) REFERENCES usuario (dni) ON DELETE CASCADE
) ENGINE=INNODB;



-- ************************************** instalacion

CREATE TABLE instalacion
(
 id_instalacion integer NOT NULL ,
 nombre_insta   varchar(45) NOT NULL ,
 descripcion    varchar(455) NOT NULL ,
PRIMARY KEY (id_instalacion)
) ENGINE=INNODB;

-- ************************************** pista

CREATE TABLE pista
(
 id_pista       varchar(20) NOT NULL ,
 id_instalacion integer NOT NULL ,
 n_pista        varchar(20) NOT NULL ,
PRIMARY KEY (id_pista, id_instalacion),
KEY fkIdx_166 (id_instalacion),
CONSTRAINT FK_166 FOREIGN KEY fkIdx_166 (id_instalacion) REFERENCES instalacion (id_instalacion) ON DELETE CASCADE
) ENGINE=INNODB;


-- ************************************** deporte

CREATE TABLE deporte
(
 nombre_deporte varchar(45) NOT NULL ,
 descripcion    varchar(200) NOT NULL ,
PRIMARY KEY (nombre_deporte)
) ENGINE=INNODB;


-- ************************************** clase

-- CREATE TABLE clase
-- (
--  id_clase       varchar(20) NOT NULL ,
--  id_profesor    varchar(20) NOT NULL ,
--  nombre_deporte varchar(45) NOT NULL ,
--  dni            varchar(9) NOT NULL ,
--  id_pista       varchar(20) NOT NULL ,
--  id_instalacion integer NOT NULL ,
--  nombre_clase   varchar(45) NOT NULL ,
-- PRIMARY KEY (dni, id_pista, id_instalacion, id_clase, id_profesor, nombre_deporte),
-- KEY fkIdx_157 (nombre_deporte),
-- CONSTRAINT FK_157 FOREIGN KEY fkIdx_157 (nombre_deporte) REFERENCES deporte (nombre_deporte),
-- KEY fkIdx_222 (id_pista, id_instalacion),
-- CONSTRAINT FK_222 FOREIGN KEY fkIdx_222 (id_pista, id_instalacion) REFERENCES pista (id_pista, id_instalacion),
-- KEY fkIdx_95 (dni, id_profesor),
-- CONSTRAINT FK_95 FOREIGN KEY fkIdx_95 (dni, id_profesor) REFERENCES profesor (dni, id_profesor)
-- ) ENGINE=INNODB;

CREATE TABLE clase
(
 id_clase       varchar(20) NOT NULL ,
 nombre_deporte varchar(45) NOT NULL ,
 id_pista       varchar(20) NOT NULL ,
 id_instalacion integer NOT NULL ,
 nombre_clase   varchar(45) NOT NULL ,
PRIMARY KEY (id_clase, nombre_deporte, id_pista, id_instalacion),
KEY fkIdx_157 (nombre_deporte),
CONSTRAINT FK_157 FOREIGN KEY fkIdx_157 (nombre_deporte) REFERENCES deporte (nombre_deporte) ON DELETE CASCADE,
KEY fkIdx_222 (id_pista, id_instalacion),
CONSTRAINT FK_222 FOREIGN KEY fkIdx_222 (id_pista, id_instalacion) REFERENCES pista (id_pista, id_instalacion) ON DELETE CASCADE
) ENGINE=INNODB;



-- ************************************** reserva

CREATE TABLE reserva
(
 id_pista       varchar(20) NOT NULL ,
 id_instalacion integer NOT NULL ,
 dni            varchar(9) NOT NULL ,
 id_cliente     varchar(20) NOT NULL ,
 fecha          date NOT NULL ,
 hora_entrada   time NOT NULL ,
 hora_salida    time NOT NULL ,
 precio         double NOT NULL ,
PRIMARY KEY (id_pista, id_instalacion, dni, id_cliente),
KEY fkIdx_180 (id_pista, id_instalacion),
CONSTRAINT FK_180 FOREIGN KEY fkIdx_180 (id_pista, id_instalacion) REFERENCES pista (id_pista, id_instalacion) ON DELETE CASCADE,
KEY fkIdx_202 (dni, id_cliente),
CONSTRAINT FK_202 FOREIGN KEY fkIdx_202 (dni, id_cliente) REFERENCES cliente (dni, id_cliente) ON DELETE CASCADE
) ENGINE=INNODB;

-- ************************************** pertenece

-- CREATE TABLE pertenece
-- (
--  id_clase       varchar(20) NOT NULL ,
--  id_profesor    varchar(20) NOT NULL ,
--  nombre_deporte varchar(45) NOT NULL ,
--  dni            varchar(9) NOT NULL ,
--  id_cliente     varchar(20) NOT NULL ,
--  id_pista       varchar(20) NOT NULL ,
--  id_instalacion integer NOT NULL ,
-- PRIMARY KEY (id_pista, id_instalacion, id_clase, id_profesor, nombre_deporte, dni, id_cliente),
-- KEY fkIdx_205 (dni, id_cliente),
-- CONSTRAINT FK_205 FOREIGN KEY fkIdx_205 (dni, id_cliente) REFERENCES cliente (dni, id_cliente),
-- KEY fkIdx_35 (dni, id_pista, id_instalacion, id_clase, id_profesor, nombre_deporte),
-- CONSTRAINT FK_35 FOREIGN KEY fkIdx_35 (dni, id_pista, id_instalacion, id_clase, id_profesor, nombre_deporte) REFERENCES clase (dni, id_pista, id_instalacion, id_clase, id_profesor, nombre_deporte)
-- ) ENGINE=INNODB;


CREATE TABLE pertenece
(
 id_clase       varchar(20) NOT NULL ,
 nombre_deporte varchar(45) NOT NULL ,
 id_cliente     varchar(20) NOT NULL ,
 id_pista       varchar(20) NOT NULL ,
 id_instalacion integer NOT NULL ,
 dni            varchar(9) NOT NULL ,
 id_profesor    varchar(20) NOT NULL ,
PRIMARY KEY (dni, id_profesor, id_clase, nombre_deporte, id_cliente, id_pista, id_instalacion),
KEY fkIdx_205 (dni, id_cliente),
CONSTRAINT FK_205 FOREIGN KEY fkIdx_205 (dni, id_cliente) REFERENCES cliente (dni, id_cliente) ON DELETE CASCADE,
KEY fkIdx_241 (dni, id_profesor),
CONSTRAINT FK_241 FOREIGN KEY fkIdx_241 (dni, id_profesor) REFERENCES profesor (dni, id_profesor) ON DELETE CASCADE,
KEY fkIdx_35 (id_clase, nombre_deporte, id_pista, id_instalacion),
CONSTRAINT FK_35 FOREIGN KEY fkIdx_35 (id_clase, nombre_deporte, id_pista, id_instalacion) REFERENCES clase (id_clase, nombre_deporte, id_pista, id_instalacion) ON DELETE CASCADE
) ENGINE=INNODB;




-- ****************** SqlDBM: MySQL ******************;
-- ***************************************************;


-- ************************************** profesor






-- ************************************** pertenece



-- ****************** SqlDBM: MySQL ******************;
-- ***************************************************;


-- ************************************** clase









