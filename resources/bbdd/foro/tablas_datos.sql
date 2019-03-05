drop table if exists post;
CREATE TABLE post(
	id_post     INT AUTO_INCREMENT NOT NULL ,
	titulo 		varchar(1000) NOT NULL ,
	contenido 	varchar(1000) NOT NULL ,
	valoracion 	INT unsigned default 0,
	etiquetas   varchar(1000) NOT NULL,
	PRIMARY KEY (id_post)
) ENGINE=INNODB;

-- ['titulo', 'contenido', 'valoracion', 'etiquetas'];

insert into post (titulo,contenido,valoracion,etiquetas) 
		values ("Lanzamiento del foro", "Se lanza el foro para la preparacion del examen de PHP", 10, "#START #ARRANQUE #LANZAMIENTO");
insert into post (titulo,contenido,valoracion,etiquetas) 
		values ("Segundo post", "Este es un segundo post y habrá un tercero.",8, "#SEGUNDO #POST");
        
        
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