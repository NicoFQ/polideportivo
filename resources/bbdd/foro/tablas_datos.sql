   
drop table if exists usuario;
CREATE TABLE usuario(
	id_usuario     INT AUTO_INCREMENT NOT NULL ,
	nombre 		varchar(1000) NOT NULL ,
	nombre_usuario 	varchar(1000) NOT NULL ,
	contrasena 	varchar(1000) NOT NULL ,
	PRIMARY KEY (id_usuario)
) ENGINE=INNODB;
insert into usuario(nombre, nombre_usuario, contrasena)
		values ('Nicolas', 'nico', '1234');
     
   drop table if exists post;
CREATE TABLE post(
	id_post     INT AUTO_INCREMENT NOT NULL ,
	titulo 		varchar(1000) NOT NULL ,
	contenido 	varchar(1000) NOT NULL ,
	valoracion 	INT unsigned default 0,
	etiquetas   varchar(1000) NOT NULL,
    id_usuario INT NOT NULL,
	PRIMARY KEY (id_post),
    CONSTRAINT FK_364 FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario) ON DELETE CASCADE
) ENGINE=INNODB;


-- ['titulo', 'contenido', 'valoracion', 'etiquetas'];

insert into post (titulo,contenido,valoracion,etiquetas, id_usuario) 
		values ("Lanzamiento del foro", "Se lanza el foro para la preparacion del examen de PHP", 10, "#START #ARRANQUE #LANZAMIENTO",1);
insert into post (titulo,contenido,valoracion,etiquetas, id_usuario) 
		values ("Segundo post", "Este es un segundo post y habrá un tercero.",8, "#SEGUNDO #POST",1);
insert into post(titulo, contenido, etiquetas, id_usuario)
		values ('Titulo Uno', 'El gran contenido', 'Primero post', 1);
    
     
     
        
drop table if exists noticia;
create table noticia(
	id int AUTO_INCREMENT,
	titulo varchar(2048) not null,
	texto varchar(2048) not null,
	fecha date not null,
	PRIMARY KEY (id)
);
insert into noticia (titulo,texto, fecha) values ("Titulo1" , "textotextotextotextotexto", "2019-02-16");
desc noticia;