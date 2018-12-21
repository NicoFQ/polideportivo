
-- ************************************** `Usuario`

CREATE TABLE `Usuario`
(
 `dni` varchar(9) NOT NULL ,
PRIMARY KEY (`dni`)
);

-- ************************************** `administrador`

CREATE TABLE `administrador`
(
 `id_administrador` varchar(20) NOT NULL ,
 `dni`              varchar(9) NOT NULL ,
 `nombre`           varchar(45) NOT NULL ,
 `apellido1`        varchar(45) NOT NULL ,
 `apellido2`        varchar(45) ,
 `fecha_nacimiento` date NOT NULL ,
PRIMARY KEY (`dni`, `id_administrador`),
KEY `fkIdx_193` (`dni`),
CONSTRAINT `FK_193` FOREIGN KEY `fkIdx_193` (`dni`) REFERENCES `Usuario` (`dni`)
);

-- ************************************** `cliente`

CREATE TABLE `cliente`
(
 `dni`              varchar(9) NOT NULL ,
 `id_cliente`       varchar(20) NOT NULL ,
 `nombre`           varchar(45) NOT NULL ,
 `apellido1`        varchar(45) NOT NULL ,
 `apellido2`        varchar(45) NOT NULL ,
 `fecha_nacimiento` varchar(45) NOT NULL ,
PRIMARY KEY (`dni`, `id_cliente`),
KEY `fkIdx_189` (`dni`),
CONSTRAINT `FK_189` FOREIGN KEY `fkIdx_189` (`dni`) REFERENCES `Usuario` (`dni`)
);


-- ****************** SqlDBM: MySQL ******************;
-- ***************************************************;


-- ************************************** `profesor`

CREATE TABLE `profesor`
(
 `id_profesor`      varchar(20) NOT NULL ,
 `dni`              varchar(9) NOT NULL ,
 `nombre`           varchar(45) NOT NULL ,
 `apellido1`        varchar(45) NOT NULL ,
 `apellido2`        varchar(45) ,
 `fecha_nacimiento` date NOT NULL ,
 `descrip`          varchar(200) NOT NULL ,
PRIMARY KEY (`dni`, `id_profesor`),
KEY `fkIdx_196` (`dni`),
CONSTRAINT `FK_196` FOREIGN KEY `fkIdx_196` (`dni`) REFERENCES `Usuario` (`dni`)
);

-- ************************************** `Instalacion`

CREATE TABLE `instalacion`
(
 `id_instalacion` integer NOT NULL ,
 `nombre_insta`   varchar(45) NOT NULL ,
 `descripcion`    varchar(455) NOT NULL ,
PRIMARY KEY (`id_instalacion`)
);

-- ************************************** `pista`

CREATE TABLE `pista`
(
 `id_pista`       varchar(20) NOT NULL ,
 `id_instalacion` integer NOT NULL ,
 `n_pista`        varchar(20) NOT NULL ,
PRIMARY KEY (`id_pista`, `id_instalacion`),
KEY `fkIdx_166` (`id_instalacion`),
CONSTRAINT `FK_166` FOREIGN KEY `fkIdx_166` (`id_instalacion`) REFERENCES `Instalacion` (`id_instalacion`)
);


-- ************************************** `Deporte`

CREATE TABLE `deporte`
(
 `nombre_deporte` varchar(45) NOT NULL ,
 `descripcion`    varchar(200) NOT NULL ,
PRIMARY KEY (`nombre_deporte`)
);


-- ************************************** `Clase`

CREATE TABLE `Clase`
(
 `id_clase`       varchar(20) NOT NULL ,
 `id_profesor`    varchar(20) NOT NULL ,
 `nombre_deporte` varchar(45) NOT NULL ,
 `dni`            varchar(9) NOT NULL ,
 `id_pista`       varchar(20) NOT NULL ,
 `id_instalacion` integer NOT NULL ,
 `nombre_clase`   varchar(45) NOT NULL ,
PRIMARY KEY (`dni`, `id_pista`, `id_instalacion`, `id_clase`, `id_profesor`, `nombre_deporte`),
KEY `fkIdx_157` (`nombre_deporte`),
CONSTRAINT `FK_157` FOREIGN KEY `fkIdx_157` (`nombre_deporte`) REFERENCES `Deporte` (`nombre_deporte`),
KEY `fkIdx_222` (`id_pista`, `id_instalacion`),
CONSTRAINT `FK_222` FOREIGN KEY `fkIdx_222` (`id_pista`, `id_instalacion`) REFERENCES `pista` (`id_pista`, `id_instalacion`),
KEY `fkIdx_95` (`dni`, `id_profesor`),
CONSTRAINT `FK_95` FOREIGN KEY `fkIdx_95` (`dni`, `id_profesor`) REFERENCES `profesor` (`dni`, `id_profesor`)
);


-- ************************************** `reserva`

CREATE TABLE `reserva`
(
 `id_pista`       varchar(20) NOT NULL ,
 `id_instalacion` integer NOT NULL ,
 `dni`            varchar(9) NOT NULL ,
 `id_cliente`     varchar(20) NOT NULL ,
 `fecha`          date NOT NULL ,
 `hora_entrada`   time NOT NULL ,
 `hora_salida`    time NOT NULL ,
 `precio`         double NOT NULL ,
PRIMARY KEY (`id_pista`, `id_instalacion`, `dni`, `id_cliente`),
KEY `fkIdx_180` (`id_pista`, `id_instalacion`),
CONSTRAINT `FK_180` FOREIGN KEY `fkIdx_180` (`id_pista`, `id_instalacion`) REFERENCES `pista` (`id_pista`, `id_instalacion`),
KEY `fkIdx_202` (`dni`, `id_cliente`),
CONSTRAINT `FK_202` FOREIGN KEY `fkIdx_202` (`dni`, `id_cliente`) REFERENCES `cliente` (`dni`, `id_cliente`)
);

-- ************************************** `pertenece`

CREATE TABLE `pertenece`
(
 `id_clase`       varchar(20) NOT NULL ,
 `id_profesor`    varchar(20) NOT NULL ,
 `nombre_deporte` varchar(45) NOT NULL ,
 `dni`            varchar(9) NOT NULL ,
 `id_cliente`     varchar(20) NOT NULL ,
 `id_pista`       varchar(20) NOT NULL ,
 `id_instalacion` integer NOT NULL ,
PRIMARY KEY (`id_pista`, `id_instalacion`, `id_clase`, `id_profesor`, `nombre_deporte`, `dni`, `id_cliente`),
KEY `fkIdx_205` (`dni`, `id_cliente`),
CONSTRAINT `FK_205` FOREIGN KEY `fkIdx_205` (`dni`, `id_cliente`) REFERENCES `cliente` (`dni`, `id_cliente`),
KEY `fkIdx_35` (`dni`, `id_pista`, `id_instalacion`, `id_clase`, `id_profesor`, `nombre_deporte`),
CONSTRAINT `FK_35` FOREIGN KEY `fkIdx_35` (`dni`, `id_pista`, `id_instalacion`, `id_clase`, `id_profesor`, `nombre_deporte`) REFERENCES `Clase` (`dni`, `id_pista`, `id_instalacion`, `id_clase`, `id_profesor`, `nombre_deporte`)
);














