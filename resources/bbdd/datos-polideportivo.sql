insert into instalacion (id_instalacion,nombre_insta)
values ("INST-01", "Instalacion de Baloncesto");

insert into instalacion (id_instalacion,nombre_insta)
values ("INST-02", "Instalacion de Padel");

insert into instalacion (id_instalacion,nombre_insta)
values ("INST-03", "Instalacion de Futbol");

insert into instalacion (id_instalacion,nombre_insta)
values ("INST-04", "Instalacion de Futbol");



insert into deporte (id_deporte,nombre_deporte)
values ("DEP-FUTBOL", "Futbol");

insert into deporte (id_deporte,nombre_deporte)
values ("DEP-BALONCESTO", "Baloncesto");

insert into deporte (id_deporte,nombre_deporte)
values ("DEP-PADEL", "Padel");

insert into deporte (id_deporte,nombre_deporte)
values ("DEP-TENIS", "Tenis");

insert into deporte (id_deporte,nombre_deporte)
values ("DEP-VOLEY", "Voleybol");

insert into deporte (id_deporte,nombre_deporte)
values ("DEP-NAT", "Natacion");



insert into pista (id_pista,n_pista,precio_hora,id_deporte,id_instalacion,estado)
values ("P-01", "Pista de Futbol", 3.5,"DEP-FUTBOL", "INST-01", 1);

insert into pista (id_pista,n_pista,precio_hora,id_deporte,id_instalacion,estado)
values ("P-02", "Pista de Futbol", 3.5,"DEP-FUTBOL", "INST-01", 1);

insert into pista (id_pista,n_pista,precio_hora,id_deporte,id_instalacion,estado)
values ("P-03", "Pista de Baloncesto", 3.5,"DEP-BALONCESTO", "INST-02", 1);

insert into pista (id_pista,n_pista,precio_hora,id_deporte,id_instalacion,estado)
values ("P-04", "Pista de Baloncesto", 3.5,"DEP-BALONCESTO", "INST-02", 1);

insert into pista (id_pista,n_pista,precio_hora,id_deporte,id_instalacion,estado)
values ("P-05", "Pista de Voleybol", 3.5,"DEP-VOLEY", "INST-03", 1);

insert into pista (id_pista,n_pista,precio_hora,id_deporte,id_instalacion,estado)
values ("P-06", "Pista de Voleybol", 3.5,"DEP-VOLEY", "INST-03", 1);

insert into pista (id_pista,n_pista,precio_hora,id_deporte,id_instalacion,estado)
values ("P-07", "Pista de Natacion", 3.5,"DEP-NAT", "INST-04", 1);




insert into horario (fecha,hora_inicio,hora_fin,id_pista)
values ("2018-12-23", "15:00:00", "15:59:59", "P-01");

insert into horario (fecha,hora_inicio,hora_fin,id_pista)
values ("2018-12-23", "16:00:00", "16:59:59", "P-01");

insert into horario (fecha,hora_inicio,hora_fin,id_pista)
values ("2018-12-23", "16:00:00", "16:59:59", "P-02");

insert into horario (fecha,hora_inicio,hora_fin,id_pista)
values ("2018-12-23", "15:00:00", "15:59:59", "P-03");

insert into horario (fecha,hora_inicio,hora_fin,id_pista)
values ("2018-12-23", "15:00:00", "15:59:59", "P-04");

insert into horario (fecha,hora_inicio,hora_fin,id_pista)
values ("2018-12-23", "15:00:00", "15:59:59", "P-05");

insert into horario (fecha,hora_inicio,hora_fin,id_pista)
values ("2019-01-01", "17:00:00", "17:59:59", "P-03");


insert into tipo_usuario (id_tipo_usuario,nombre_tipo)
values ("AD", "Administrador");
insert into tipo_usuario (id_tipo_usuario,nombre_tipo)
values ("CL", "Cliente");
insert into tipo_usuario (id_tipo_usuario,nombre_tipo)
values ("PR", "Profesor");

-- PRESENTEACION

insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"administrador@hotmail.es",
	"1234",
	"99999999P",
	"Admin",
	"Admin",
	"Admin",
	"Calle del administrador 19 BJ4",
	"Admin",
	"1996-03-30",
	0,
	"Española",
	"AD");

insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"profesor@hotmail.es",
	"1234",
	"99999999P",
	"Profesor",
	"Profesor",
	"Profesor",
	"Calle del Profesor 19 BJ4",
	"Profesor",
	"1996-03-30",
	0,
	"Española",
	"PR");

insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"cliente@hotmail.es",
	"1234",
	"99999999P",
	"Cliente",
	"Cliente",
	"Cliente",
	"Calle del Cliente 19 BJ4",
	"Cliente",
	"1996-03-30",
	0,
	"Española",
	"CL");
insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"nicolas@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Nicolas",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Nico123",
	"1996-03-30",
	0,
	"Boliviana",
	"AD");


insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"kevin@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Kevin",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Kevin123",
	"1996-03-30",
	0,
	"Boliviana",
	"AD");

	insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"miguel@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Miguel",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Miguel123",
	"1996-03-30",
	0,
	"Española",
	"AD");


	insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"mario@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Mario",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Mario123",
	"1996-03-30",
	0,
	"Española",
	"AD");

-- PROFESORES PROFESORES PROFESORES PROFESORES PROFESORES

insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"alvaro@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Alvaro",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Alvaro123",
	"1996-03-30",
	0,
	"Española",
	"PR");

insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"Sara@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Sara",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Sarita123",
	"1996-03-30",
	1,
	"Dominicana",
	"PR");

insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"ramon@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Ramon",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Ramon123",
	"1996-03-30",
	0,
	"Portuguesa",
	"PR");

insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"augusto@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Augusto",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Augusto123",
	"1996-03-30",
	0,
	"Española",
	"PR");

insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"lorena@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Lorena",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Lore123",
	"1996-03-30",
	1,
	"Española",
	"PR");


insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"carla@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Carla",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Carla123",
	"1996-03-30",
	1,
	"Española",
	"PR");

insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"beatriz@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Beatriz",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Beatriz123",
	"1996-03-30",
	1,
	"Española",
	"PR");

insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"andrea@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Andrea",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Andrea123",
	"1996-03-30",
	1,
	"Española",
	"PR");

insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"mikaela@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Mikaela",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Mikaela123",
	"1996-03-30",
	1,
	"Venezolana",
	"PR");

insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"palmira@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Palmira",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Palmii123",
	"1996-03-30",
	1,
	"Española",
	"PR");

insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"sofia@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Sofia",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Sofia123",
	"1996-03-30",
	1,
	"Brasileña",
	"PR");

-- CLIENTES CLIENTES CLIENTES CLIENTES CLIENTES 	
insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"sergio@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Sergio",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Sergio123",
	"1996-03-30",
	0,
	"Española",
	"CL");


insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"victor@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Victor",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Victor123",
	"1996-03-30",
	0,
	"Española",
	"CL");

insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"javier@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Javier",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Javier123",
	"1996-03-30",
	0,
	"Española",
	"CL");

insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"marta@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Marta",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Marta123",
	"1996-03-30",
	1,
	"Española",
	"CL");

insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"lola@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Lola",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Lola123",
	"1996-03-30",
	1,
	"Española",
	"CL");

	
insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"miriam@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Miriam",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Miri123",
	"1996-03-30",
	1,
	"Española",
	"CL");
	
insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"sonia@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Sonia",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Sonia123",
	"1996-03-30",
	1,
	"Española",
	"CL");
	
insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"pedro@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Pedro",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Pedrito123",
	"1996-03-30",
	0,
	"Española",
	"CL");
	
insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"gustavo@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Gustavo",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Gustavo123",
	"1996-03-30",
	0,
	"Española",
	"CL");
	
insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"mercedes@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Mercedes",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Mercedes123",
	"1996-03-30",
	1,
	"Española",
	"CL");
	
insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"david@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"David",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"David123",
	"1996-03-30",
	0,
	"Española",
	"CL");
	
insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"samanta@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Samanta",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Samanta123",
	"1996-03-30",
	1,
	"Española",
	"CL");
	
insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"oscar@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Oscar",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Oscar123",
	"1996-03-30",
	0,
	"Española",
	"CL");
	
insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"Carmelo@hotmail.es",
	"$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk",
	"12345678P",
	"Carmelo",
	"Avila",
	"Lopez",
	"Calle Toledo 19 BJ4",
	"Carmelo123",
	"1996-03-30",
	0,
	"Española",
	"CL");

insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'diego.santos@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '19374040-P',
    'diego',
    'santos',
    'Lopez',
    'paseo de zorrilla 113 2A CP:35511',
    'bluegorilla700',
    '1995-07-28',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'aurora.alonso@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '19005276-O',
    'aurora',
    'alonso',
    'Lopez',
    'calle nebrija 60 2A CP:23965',
    'beautifulgorilla805',
    '1989-11-11',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'pilar.jimenez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '55703669-X',
    'pilar',
    'jimenez',
    'Lopez',
    'calle de pedro bosch 141 2A CP:46229',
    'greensnake634',
    '1976-11-12',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'jose.reyes@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '22786765-A',
    'jose',
    'reyes',
    'Lopez',
    'avenida de andalucía 103 2A CP:14320',
    'lazypanda895',
    '1963-06-14',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'ricardo.soto@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '06562308-S',
    'ricardo',
    'soto',
    'Lopez',
    'avenida de salamanca 98 2A CP:66242',
    'happybird365',
    '1955-03-23',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'iker.jimenez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '50146778-F',
    'iker',
    'jimenez',
    'Lopez',
    'calle mota 105 2A CP:72551',
    'silvergoose591',
    '1946-07-28',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'purificacion.pascual@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '43332687-G',
    'purificacion',
    'pascual',
    'Lopez',
    'calle de toledo 134 2A CP:24273',
    'redzebra344',
    '1984-06-17',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'nerea.perez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '46177054-B',
    'nerea',
    'perez',
    'Lopez',
    'avenida de castilla 137 2A CP:15294',
    'happybird660',
    '1963-09-25',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'salvador.torres@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '62060634-T',
    'salvador',
    'torres',
    'Lopez',
    'calle de arturo soria 85 2A CP:29255',
    'bluefrog122',
    '1984-11-20',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'agustin.cabrera@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '66717011-H',
    'agustin',
    'cabrera',
    'Lopez',
    'calle de ángel garcía 72 2A CP:98230',
    'orangepeacock166',
    '1991-09-17',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'carlos.garrido@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '38796392-A',
    'carlos',
    'garrido',
    'Lopez',
    'calle de la democracia 85 2A CP:85044',
    'browngorilla812',
    '1949-05-12',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'jaime.muñoz@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '55621079-H',
    'jaime',
    'muñoz',
    'Lopez',
    'calle del pez 131 2A CP:45278',
    'happykoala898',
    '1973-05-01',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'aitor.rubio@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '43919674-X',
    'aitor',
    'rubio',
    'Lopez',
    'avenida de la albufera 105 2A CP:73768',
    'crazyrabbit609',
    '1970-02-14',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'miguel.romero@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '64164822-C',
    'miguel',
    'romero',
    'Lopez',
    'calle de la almudena 126 2A CP:87402',
    'blackelephant932',
    '1977-12-09',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'felipe.alonso@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '01564325-K',
    'felipe',
    'alonso',
    'Lopez',
    'ronda de toledo 127 2A CP:76207',
    'sadduck162',
    '1982-01-01',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'john.soto@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '25870726-O',
    'john',
    'soto',
    'Lopez',
    'paseo de zorrilla 103 2A CP:42025',
    'redgorilla181',
    '1952-07-31',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'sandra.santiago@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '19957652-V',
    'sandra',
    'santiago',
    'Lopez',
    'avenida de salamanca 110 2A CP:90227',
    'silverbutterfly669',
    '1983-08-20',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'teresa.molina@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '49187677-S',
    'teresa',
    'molina',
    'Lopez',
    'calle del prado 88 2A CP:14864',
    'bluelion453',
    '1966-03-16',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'elisa.romero@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '71025565-O',
    'elisa',
    'romero',
    'Lopez',
    'calle del prado 123 2A CP:74453',
    'angryostrich391',
    '1980-08-29',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'alvaro.lorenzo@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '70466585-Y',
    'alvaro',
    'lorenzo',
    'Lopez',
    'calle de la almudena 53 2A CP:70371',
    'bigpanda450',
    '1985-03-29',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'monica.sanchez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '58869803-V',
    'monica',
    'sanchez',
    'Lopez',
    'avenida de américa 87 2A CP:34185',
    'heavybird552',
    '1971-08-03',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'agustin.velasco@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '98268397-T',
    'agustin',
    'velasco',
    'Lopez',
    'calle del arenal 111 2A CP:29340',
    'heavyswan752',
    '1974-06-09',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'david.gil@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '35399166-J',
    'david',
    'gil',
    'Lopez',
    'avenida del planetario 55 2A CP:59597',
    'tinybear754',
    '1990-12-30',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'ruben.garrido@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '74472643-X',
    'ruben',
    'garrido',
    'Lopez',
    'calle de ángel garcía 143 2A CP:68910',
    'redfish449',
    '1979-10-29',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'andres.ortiz@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '73325130-J',
    'andres',
    'ortiz',
    'Lopez',
    'calle de argumosa 145 2A CP:50979',
    'angrymouse878',
    '1972-01-02',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'gabriel.moreno@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '62488936-L',
    'gabriel',
    'moreno',
    'Lopez',
    'calle de pedro bosch 86 2A CP:59794',
    'heavycat117',
    '1954-10-23',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'remedios.santos@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '36208417-Q',
    'remedios',
    'santos',
    'Lopez',
    'paseo de extremadura 80 2A CP:17555',
    'bigwolf657',
    '1987-05-04',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'luz.rubio@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '94936063-H',
    'luz',
    'rubio',
    'Lopez',
    'calle del arenal 50 2A CP:10032',
    'angryfish495',
    '1976-10-23',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'ruben.santos@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '63543323-Q',
    'ruben',
    'santos',
    'Lopez',
    'calle de atocha 141 2A CP:61909',
    'heavyostrich917',
    '1973-11-11',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'enrique.hidalgo@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '51841481-T',
    'enrique',
    'hidalgo',
    'Lopez',
    'calle de la democracia 134 2A CP:75637',
    'orangeladybug418',
    '1952-08-18',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'noelia.serrano@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '59810757-B',
    'noelia',
    'serrano',
    'Lopez',
    'calle de argumosa 148 2A CP:31304',
    'crazyfrog108',
    '1958-10-16',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'natalia.hernandez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '05429783-B',
    'natalia',
    'hernandez',
    'Lopez',
    'avenida de la albufera 107 2A CP:64487',
    'brownleopard644',
    '1996-02-14',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'guillermo.ramirez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '58884508-J',
    'guillermo',
    'ramirez',
    'Lopez',
    'calle de pedro bosch 72 2A CP:94069',
    'whitetiger842',
    '1979-03-22',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'lucas.gallardo@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '91177323-T',
    'lucas',
    'gallardo',
    'Lopez',
    'calle de ferraz 140 2A CP:88910',
    'tinydog571',
    '1985-10-21',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'isabel.montero@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '95412543-R',
    'isabel',
    'montero',
    'Lopez',
    'calle de arturo soria 126 2A CP:33397',
    'beautifulleopard527',
    '1964-05-22',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'valentin.delgado@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '62287341-X',
    'valentin',
    'delgado',
    'Lopez',
    'calle del arenal 122 2A CP:21892',
    'heavygorilla445',
    '1976-10-10',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'manuela.ruiz@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '68087996-M',
    'manuela',
    'ruiz',
    'Lopez',
    'calle de la almudena 50 2A CP:57166',
    'tinysnake186',
    '1957-12-13',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'domingo.castillo@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '10493771-T',
    'domingo',
    'castillo',
    'Lopez',
    'calle de ángel garcía 75 2A CP:28124',
    'bigsnake312',
    '1972-06-20',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'josefa.ferrer@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '90206773-I',
    'josefa',
    'ferrer',
    'Lopez',
    'calle del arenal 144 2A CP:51871',
    'greenbear984',
    '1992-11-15',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'elena.ortega@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '92058089-P',
    'elena',
    'ortega',
    'Lopez',
    'calle de toledo 142 2A CP:89997',
    'sadcat529',
    '1945-05-22',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'magdalena.gil@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '99639012-I',
    'magdalena',
    'gil',
    'Lopez',
    'avenida del planetario 146 2A CP:70034',
    'lazycat976',
    '1988-09-01',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'tomas.martin@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '87231118-V',
    'tomas',
    'martin',
    'Lopez',
    'calle de ángel garcía 69 2A CP:44019',
    'whiteladybug476',
    '1978-04-01',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'marco.santos@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '01744965-V',
    'marco',
    'santos',
    'Lopez',
    'calle de ferraz 53 2A CP:54927',
    'smallwolf872',
    '1976-05-14',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'ignacio.jimenez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '93625695-R',
    'ignacio',
    'jimenez',
    'Lopez',
    'calle de arturo soria 109 2A CP:92832',
    'blackduck142',
    '1995-03-04',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'silvia.marquez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '57026819-P',
    'silvia',
    'marquez',
    'Lopez',
    'avenida del planetario 133 2A CP:12478',
    'happyduck170',
    '1985-01-13',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'nieves.carmona@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '91154519-M',
    'nieves',
    'carmona',
    'Lopez',
    'avenida de la albufera 78 2A CP:98069',
    'redswan980',
    '1980-05-31',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'elisa.moreno@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '99046252-U',
    'elisa',
    'moreno',
    'Lopez',
    'avenida de burgos 141 2A CP:33383',
    'smalldog529',
    '1960-03-20',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'rosa.fernandez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '53412601-G',
    'rosa',
    'fernandez',
    'Lopez',
    'calle de téllez 89 2A CP:13173',
    'happymouse975',
    '1972-11-06',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'clara.molina@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '86247355-S',
    'clara',
    'molina',
    'Lopez',
    'calle mota 56 2A CP:21167',
    'ticklishrabbit308',
    '1983-10-22',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'juan.montero@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '80191991-P',
    'juan',
    'montero',
    'Lopez',
    'ronda de toledo 92 2A CP:81528',
    'silvermeercat840',
    '1955-09-13',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'amparo.reyes@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '15592637-X',
    'amparo',
    'reyes',
    'Lopez',
    'calle de arganzuela 56 2A CP:45519',
    'heavybird206',
    '1952-01-22',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'ruben.saez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '67314075-A',
    'ruben',
    'saez',
    'Lopez',
    'calle covadonga 127 2A CP:88552',
    'beautifulpeacock174',
    '1984-05-22',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'alfredo.serrano@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '70257477-V',
    'alfredo',
    'serrano',
    'Lopez',
    'paseo de extremadura 121 2A CP:61383',
    'biglion504',
    '1982-05-03',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'susana.garrido@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '71550157-V',
    'susana',
    'garrido',
    'Lopez',
    'paseo de zorrilla 79 2A CP:94457',
    'greenrabbit604',
    '1983-10-05',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'montserrat.gil@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '67954762-A',
    'montserrat',
    'gil',
    'Lopez',
    'calle de tetuán 142 2A CP:11746',
    'goldenwolf229',
    '1970-08-05',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'miguel.diez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '00504912-P',
    'miguel',
    'diez',
    'Lopez',
    'calle de la democracia 60 2A CP:22626',
    'redswan328',
    '1993-07-25',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'sara.carrasco@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '65981358-Y',
    'sara',
    'carrasco',
    'Lopez',
    'avenida de burgos 134 2A CP:58779',
    'crazygoose355',
    '1950-04-14',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'esperanza.ortega@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '80330146-B',
    'esperanza',
    'ortega',
    'Lopez',
    'calle de argumosa 137 2A CP:64257',
    'purplegorilla889',
    '1968-07-03',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'esperanza.garrido@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '17025802-P',
    'esperanza',
    'garrido',
    'Lopez',
    'calle de téllez 147 2A CP:39618',
    'brownelephant755',
    '1947-12-23',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'mohamed.calvo@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '26342869-K',
    'mohamed',
    'calvo',
    'Lopez',
    'calle de bravo murillo 88 2A CP:77145',
    'angrydog265',
    '1990-05-24',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'milagros.marin@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '56678748-O',
    'milagros',
    'marin',
    'Lopez',
    'calle de tetuán 113 2A CP:67247',
    'redostrich390',
    '1966-05-16',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'eva.benitez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '88466512-R',
    'eva',
    'benitez',
    'Lopez',
    'calle del pez 147 2A CP:19345',
    'redbird712',
    '1959-07-17',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'alex.cabrera@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '45397334-V',
    'alex',
    'cabrera',
    'Lopez',
    'calle de la democracia 52 2A CP:50569',
    'angrykoala913',
    '1966-05-06',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'nerea.pascual@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '69290554-Y',
    'nerea',
    'pascual',
    'Lopez',
    'calle del barquillo 60 2A CP:96239',
    'organictiger981',
    '1992-03-11',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'agustin.ramirez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '07322336-D',
    'agustin',
    'ramirez',
    'Lopez',
    'ronda de toledo 56 2A CP:21724',
    'silverduck148',
    '1949-05-22',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'carmen.rojas@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '95099950-D',
    'carmen',
    'rojas',
    'Lopez',
    'avenida de burgos 71 2A CP:14086',
    'ticklishfish761',
    '1947-12-10',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'felix.soler@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '37753398-B',
    'felix',
    'soler',
    'Lopez',
    'avenida de castilla 83 2A CP:67427',
    'heavydog228',
    '1978-07-13',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'catalina.soler@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '76125555-R',
    'catalina',
    'soler',
    'Lopez',
    'paseo de extremadura 136 2A CP:87160',
    'goldenmeercat204',
    '1975-05-16',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'soledad.nieto@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '26805180-L',
    'soledad',
    'nieto',
    'Lopez',
    'calle nebrija 135 2A CP:81689',
    'tinyfish290',
    '1984-10-17',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'lourdes.soto@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '75611360-N',
    'lourdes',
    'soto',
    'Lopez',
    'calle de atocha 63 2A CP:37758',
    'beautifulduck214',
    '1951-09-15',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'david.prieto@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '49403700-H',
    'david',
    'prieto',
    'Lopez',
    'avenida de burgos 98 2A CP:17610',
    'organicpeacock673',
    '1957-10-24',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'gregorio.hidalgo@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '36363721-Q',
    'gregorio',
    'hidalgo',
    'Lopez',
    'calle de la democracia 60 2A CP:41220',
    'silverpanda467',
    '1997-01-08',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'laura.rodriguez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '83031618-J',
    'laura',
    'rodriguez',
    'Lopez',
    'avenida de américa 72 2A CP:20919',
    'bigelephant788',
    '1997-05-05',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'john.gonzalez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '86920316-R',
    'john',
    'gonzalez',
    'Lopez',
    'calle de toledo 103 2A CP:87765',
    'silverswan391',
    '1981-09-18',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'nuria.navarro@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '91659066-I',
    'nuria',
    'navarro',
    'Lopez',
    'calle de atocha 96 2A CP:31819',
    'lazybutterfly181',
    '1970-12-02',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'pilar.esteban@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '90939836-I',
    'pilar',
    'esteban',
    'Lopez',
    'calle nebrija 119 2A CP:80475',
    'goldenwolf800',
    '1947-08-26',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'amparo.aguilar@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '32542272-E',
    'amparo',
    'aguilar',
    'Lopez',
    'avenida del planetario 65 2A CP:42102',
    'redostrich746',
    '1972-12-22',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'fernando.gimenez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '03185865-C',
    'fernando',
    'gimenez',
    'Lopez',
    'calle de la democracia 126 2A CP:23361',
    'greensnake849',
    '1970-12-22',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'julia.esteban@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '12586804-X',
    'julia',
    'esteban',
    'Lopez',
    'calle covadonga 102 2A CP:92759',
    'angrylion298',
    '1972-12-04',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'celia.gallardo@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '83450334-G',
    'celia',
    'gallardo',
    'Lopez',
    'calle de bravo murillo 129 2A CP:22468',
    'tinyostrich519',
    '1976-01-22',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'beatriz.ramirez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '21682040-D',
    'beatriz',
    'ramirez',
    'Lopez',
    'avenida de andalucía 131 2A CP:98099',
    'redrabbit297',
    '1975-08-26',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'aitor.medina@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '90438337-N',
    'aitor',
    'medina',
    'Lopez',
    'calle del arenal 77 2A CP:49959',
    'purpleladybug560',
    '1978-08-30',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'ramon.delgado@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '60247195-N',
    'ramon',
    'delgado',
    'Lopez',
    'calle nebrija 94 2A CP:99057',
    'orangefish796',
    '1984-05-23',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'christian.cortes@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '78935163-G',
    'christian',
    'cortes',
    'Lopez',
    'ronda de toledo 128 2A CP:41024',
    'organicwolf657',
    '1994-12-30',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'alexander.lorenzo@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '38457348-R',
    'alexander',
    'lorenzo',
    'Lopez',
    'calle covadonga 143 2A CP:84154',
    'sadfish181',
    '1977-09-08',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'daniela.mendez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '14825561-O',
    'daniela',
    'mendez',
    'Lopez',
    'calle de segovia 89 2A CP:42062',
    'brownkoala279',
    '1981-02-19',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'sonia.ferrer@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '86543432-K',
    'sonia',
    'ferrer',
    'Lopez',
    'avenida de américa 95 2A CP:15859',
    'brownzebra325',
    '1958-02-14',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'nicolas.benitez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '69958076-X',
    'nicolas',
    'benitez',
    'Lopez',
    'calle de alcalá 77 2A CP:28585',
    'whiteleopard831',
    '1951-12-20',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'jose.crespo@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '67171672-J',
    'jose',
    'crespo',
    'Lopez',
    'calle de arganzuela 88 2A CP:65057',
    'goldenkoala940',
    '1966-01-15',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'ana.castillo@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '24811547-N',
    'ana',
    'castillo',
    'Lopez',
    'calle de alcalá 53 2A CP:30884',
    'silverzebra846',
    '1950-01-08',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'clara.vidal@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '85918506-C',
    'clara',
    'vidal',
    'Lopez',
    'avenida de américa 104 2A CP:92120',
    'orangegorilla260',
    '1951-11-21',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'borja.gomez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '15752802-N',
    'borja',
    'gomez',
    'Lopez',
    'avenida de la albufera 97 2A CP:89742',
    'angryfrog821',
    '1995-11-30',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'domingo.martinez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '47756493-V',
    'domingo',
    'martinez',
    'Lopez',
    'calle de tetuán 107 2A CP:81072',
    'ticklishleopard214',
    '1973-02-16',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'juana.peña@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '74415155-K',
    'juana',
    'peña',
    'Lopez',
    'calle del barquillo 137 2A CP:67249',
    'greenbird514',
    '1981-09-22',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'carla.mendez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '01475344-C',
    'carla',
    'mendez',
    'Lopez',
    'calle de arganzuela 54 2A CP:36994',
    'brownbear535',
    '1974-10-08',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'angeles.hernandez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '74807004-I',
    'angeles',
    'hernandez',
    'Lopez',
    'avenida de burgos 143 2A CP:61234',
    'lazyladybug403',
    '1978-06-02',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'hugo.flores@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '53543903-V',
    'hugo',
    'flores',
    'Lopez',
    'calle de pedro bosch 65 2A CP:97737',
    'greenrabbit512',
    '1970-12-26',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'manuel.calvo@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '15125309-I',
    'manuel',
    'calvo',
    'Lopez',
    'calle del pez 60 2A CP:87296',
    'blueduck367',
    '1953-05-27',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'jesus.gomez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '92923858-T',
    'jesus',
    'gomez',
    'Lopez',
    'calle de tetuán 135 2A CP:56631',
    'bluelion336',
    '1967-12-31',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'elisa.ortiz@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '65463374-G',
    'elisa',
    'ortiz',
    'Lopez',
    'calle nebrija 61 2A CP:21027',
    'goldenelephant717',
    '1981-05-28',
    1,
    'Española',
    'CL');

      insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'agustin.medina@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '33741852-W',
    'agustin',
    'medina',
    'Lopez',
    'calle de alcalá 79 2A CP:73542',
    'purplemouse501',
    '1957-02-01',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'luz.romero@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '03651287-I',
    'luz',
    'romero',
    'Lopez',
    'calle de la almudena 139 2A CP:85063',
    'organicfish827',
    '1972-04-04',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'elisa.ramirez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '69673613-O',
    'elisa',
    'ramirez',
    'Lopez',
    'avenida de américa 81 2A CP:13543',
    'smallbutterfly525',
    '1959-09-11',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'trinidad.gonzalez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '23667439-E',
    'trinidad',
    'gonzalez',
    'Lopez',
    'calle del pez 74 2A CP:39575',
    'purplezebra306',
    '1952-04-27',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'carlos.torres@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '70111683-K',
    'carlos',
    'torres',
    'Lopez',
    'calle nebrija 68 2A CP:43544',
    'blackmeercat950',
    '1996-10-11',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'aitor.nuñez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '34477146-H',
    'aitor',
    'nuñez',
    'Lopez',
    'calle mota 99 2A CP:84874',
    'heavyswan316',
    '1981-08-28',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'rosa.molina@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '03604379-N',
    'rosa',
    'molina',
    'Lopez',
    'calle covadonga 64 2A CP:92586',
    'greenbutterfly371',
    '1973-01-30',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'yolanda.sanchez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '36940553-F',
    'yolanda',
    'sanchez',
    'Lopez',
    'calle de la democracia 76 2A CP:57737',
    'tinyleopard256',
    '1958-04-12',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'alex.ortiz@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '24644216-I',
    'alex',
    'ortiz',
    'Lopez',
    'calle de alcalá 123 2A CP:80082',
    'crazybutterfly230',
    '1956-06-13',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'consuelo.carmona@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '87322989-S',
    'consuelo',
    'carmona',
    'Lopez',
    'calle del pez 78 2A CP:37808',
    'bluetiger877',
    '1974-01-02',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'adriana.nuñez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '61776647-X',
    'adriana',
    'nuñez',
    'Lopez',
    'avenida de castilla 136 2A CP:89340',
    'lazybird589',
    '1995-01-10',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'miguel.ferrer@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '49353812-P',
    'miguel',
    'ferrer',
    'Lopez',
    'avenida de salamanca 129 2A CP:16686',
    'whitefish713',
    '1970-04-18',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'mario.esteban@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '89760702-U',
    'mario',
    'esteban',
    'Lopez',
    'paseo de extremadura 138 2A CP:50812',
    'tinymeercat769',
    '1983-02-15',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'josefa.iglesias@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '27900459-F',
    'josefa',
    'iglesias',
    'Lopez',
    'ronda de toledo 63 2A CP:89128',
    'orangegoose355',
    '1989-04-16',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'alejandro.lozano@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '85219851-U',
    'alejandro',
    'lozano',
    'Lopez',
    'calle del pez 70 2A CP:96048',
    'crazypanda862',
    '1944-08-27',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'raul.martinez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '38126119-T',
    'raul',
    'martinez',
    'Lopez',
    'calle del arenal 90 2A CP:90959',
    'angryelephant554',
    '1966-07-13',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'cristian.ortiz@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '02863798-I',
    'cristian',
    'ortiz',
    'Lopez',
    'calle de pedro bosch 127 2A CP:10662',
    'blueladybug896',
    '1950-04-27',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'tomas.gomez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '41582000-U',
    'tomas',
    'gomez',
    'Lopez',
    'calle de la almudena 136 2A CP:66658',
    'sadfish386',
    '1949-12-01',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'luz.torres@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '90504129-W',
    'luz',
    'torres',
    'Lopez',
    'calle del arenal 97 2A CP:96069',
    'orangeduck565',
    '1948-12-14',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'jaime.crespo@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '32411775-W',
    'jaime',
    'crespo',
    'Lopez',
    'avenida de salamanca 64 2A CP:10424',
    'ticklishpanda315',
    '1985-09-27',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'daniela.peña@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '03866767-V',
    'daniela',
    'peña',
    'Lopez',
    'avenida del planetario 115 2A CP:49411',
    'crazyfish700',
    '1946-10-12',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'felix.soto@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '56483629-Q',
    'felix',
    'soto',
    'Lopez',
    'calle de alberto aguilera 91 2A CP:94281',
    'tinyfish492',
    '1950-08-22',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'alejandra.alonso@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '30821591-Q',
    'alejandra',
    'alonso',
    'Lopez',
    'calle de téllez 56 2A CP:88052',
    'organicduck529',
    '1962-04-27',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'rocio.alvarez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '85609874-E',
    'rocio',
    'alvarez',
    'Lopez',
    'avenida de andalucía 133 2A CP:70925',
    'tinyduck905',
    '1967-11-06',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'borja.jimenez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '14951112-X',
    'borja',
    'jimenez',
    'Lopez',
    'calle del prado 115 2A CP:95798',
    'bluefish217',
    '1976-10-10',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'ivan.molina@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '72431079-J',
    'ivan',
    'molina',
    'Lopez',
    'calle de segovia 126 2A CP:34021',
    'sadduck304',
    '1946-12-08',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'manuela.garrido@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '83246085-I',
    'manuela',
    'garrido',
    'Lopez',
    'paseo de extremadura 129 2A CP:10983',
    'happypanda644',
    '1966-04-09',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'emilio.blanco@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '91684741-W',
    'emilio',
    'blanco',
    'Lopez',
    'calle de la democracia 94 2A CP:99824',
    'goldenfrog604',
    '1982-10-06',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'vanesa.morales@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '32675048-R',
    'vanesa',
    'morales',
    'Lopez',
    'calle de arturo soria 77 2A CP:84920',
    'happyswan849',
    '1990-10-31',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'samuel.nuñez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '26011262-P',
    'samuel',
    'nuñez',
    'Lopez',
    'calle del pez 61 2A CP:34217',
    'brownlion549',
    '1994-12-18',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'lucas.campos@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '92079825-Q',
    'lucas',
    'campos',
    'Lopez',
    'calle de tetuán 98 2A CP:77090',
    'ticklishbutterfly426',
    '1975-06-30',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'cristian.gil@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '50620538-R',
    'cristian',
    'gil',
    'Lopez',
    'calle de alcalá 66 2A CP:11950',
    'silverduck516',
    '1968-06-20',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'andres.medina@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '92341769-B',
    'andres',
    'medina',
    'Lopez',
    'calle de alcalá 133 2A CP:94958',
    'greenfish761',
    '1967-12-05',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'mariano.santiago@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '94055768-H',
    'mariano',
    'santiago',
    'Lopez',
    'calle de arturo soria 95 2A CP:88326',
    'bigtiger644',
    '1980-09-23',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'vanesa.mora@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '46696784-R',
    'vanesa',
    'mora',
    'Lopez',
    'calle de alberto aguilera 100 2A CP:59431',
    'yellowladybug278',
    '1947-03-27',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'felix.carmona@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '37690353-U',
    'felix',
    'carmona',
    'Lopez',
    'calle de la democracia 60 2A CP:62338',
    'organicmeercat159',
    '1991-03-05',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'rodrigo.moya@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '06470671-R',
    'rodrigo',
    'moya',
    'Lopez',
    'avenida de andalucía 75 2A CP:67336',
    'orangepeacock654',
    '1962-10-14',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'ernesto.rubio@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '16648812-D',
    'ernesto',
    'rubio',
    'Lopez',
    'calle de téllez 141 2A CP:32907',
    'heavyduck496',
    '1949-02-16',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'mohamed.navarro@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '56258743-E',
    'mohamed',
    'navarro',
    'Lopez',
    'calle de tetuán 100 2A CP:99826',
    'purplelion334',
    '1968-04-16',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'alba.alonso@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '22975158-K',
    'alba',
    'alonso',
    'Lopez',
    'calle covadonga 140 2A CP:46398',
    'sadmouse943',
    '1978-07-24',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'laura.gomez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '46101319-F',
    'laura',
    'gomez',
    'Lopez',
    'calle mota 57 2A CP:20578',
    'yellowostrich552',
    '1951-08-14',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'emilio.vega@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '74497857-G',
    'emilio',
    'vega',
    'Lopez',
    'calle de toledo 105 2A CP:91404',
    'browngoose325',
    '1952-03-03',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'eugenio.muñoz@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '78301060-V',
    'eugenio',
    'muñoz',
    'Lopez',
    'calle de pedro bosch 71 2A CP:20653',
    'silverladybug255',
    '1952-05-10',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'antonia.iglesias@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '52332097-V',
    'antonia',
    'iglesias',
    'Lopez',
    'avenida de castilla 95 2A CP:78404',
    'ticklishbear362',
    '1945-07-30',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'josefina.muñoz@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '51502111-T',
    'josefina',
    'muñoz',
    'Lopez',
    'calle de arganzuela 132 2A CP:33294',
    'beautifulbear682',
    '1993-07-27',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'vanesa.hidalgo@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '18207377-V',
    'vanesa',
    'hidalgo',
    'Lopez',
    'calle covadonga 56 2A CP:94166',
    'heavyswan360',
    '1979-10-05',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'lidia.aguilar@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '77216937-M',
    'lidia',
    'aguilar',
    'Lopez',
    'calle de ferraz 76 2A CP:75890',
    'lazyleopard446',
    '1987-12-21',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'nerea.lozano@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '08707451-G',
    'nerea',
    'lozano',
    'Lopez',
    'calle de tetuán 81 2A CP:10258',
    'purplegorilla860',
    '1993-10-24',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'arturo.fernandez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '01896395-C',
    'arturo',
    'fernandez',
    'Lopez',
    'calle de arturo soria 128 2A CP:10332',
    'bluetiger405',
    '1962-11-29',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'mohamed.sanchez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '99944108-K',
    'mohamed',
    'sanchez',
    'Lopez',
    'calle de argumosa 109 2A CP:64700',
    'sadelephant305',
    '1966-01-12',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'eduardo.gomez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '95985367-W',
    'eduardo',
    'gomez',
    'Lopez',
    'calle del pez 96 2A CP:52542',
    'yellowgoose260',
    '1981-12-28',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'emilia.delgado@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '68185455-G',
    'emilia',
    'delgado',
    'Lopez',
    'ronda de toledo 134 2A CP:82061',
    'lazycat107',
    '1996-12-12',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'marc.sanz@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '80562677-F',
    'marc',
    'sanz',
    'Lopez',
    'calle de atocha 57 2A CP:85098',
    'ticklishtiger920',
    '1989-12-17',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'gregorio.muñoz@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '31972267-A',
    'gregorio',
    'muñoz',
    'Lopez',
    'calle de la democracia 63 2A CP:98665',
    'lazyduck717',
    '1966-01-07',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'esperanza.prieto@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '21212325-E',
    'esperanza',
    'prieto',
    'Lopez',
    'calle del arenal 141 2A CP:49199',
    'organicbear206',
    '1989-12-15',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'antonio.arias@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '25692597-N',
    'antonio',
    'arias',
    'Lopez',
    'calle del barquillo 56 2A CP:39232',
    'purplecat759',
    '1996-06-17',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'carlos.esteban@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '69366792-I',
    'carlos',
    'esteban',
    'Lopez',
    'avenida del planetario 55 2A CP:24788',
    'yellowpanda730',
    '1991-09-15',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'pablo.serrano@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '62894660-Z',
    'pablo',
    'serrano',
    'Lopez',
    'calle de tetuán 146 2A CP:75466',
    'ticklishmeercat965',
    '1959-03-23',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'alfonso.carrasco@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '21580910-U',
    'alfonso',
    'carrasco',
    'Lopez',
    'calle mota 100 2A CP:13471',
    'beautifulbutterfly376',
    '1982-07-24',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'ruben.mora@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '76676092-U',
    'ruben',
    'mora',
    'Lopez',
    'calle de ferraz 67 2A CP:89494',
    'beautifulrabbit775',
    '1963-01-12',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'mohamed.flores@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '76752245-C',
    'mohamed',
    'flores',
    'Lopez',
    'calle de téllez 141 2A CP:85478',
    'organicsnake464',
    '1973-04-02',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'lidia.ibañez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '87707084-X',
    'lidia',
    'ibañez',
    'Lopez',
    'calle del prado 128 2A CP:35030',
    'beautifulmeercat102',
    '1965-03-19',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'nieves.velasco@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '40609534-P',
    'nieves',
    'velasco',
    'Lopez',
    'calle de segovia 111 2A CP:37419',
    'beautifulgoose939',
    '1976-08-26',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'roberto.alonso@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '67821744-G',
    'roberto',
    'alonso',
    'Lopez',
    'avenida de la albufera 73 2A CP:53072',
    'purplezebra511',
    '1980-01-20',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'pedro.muñoz@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '73560922-K',
    'pedro',
    'muñoz',
    'Lopez',
    'calle de argumosa 86 2A CP:42237',
    'goldenostrich572',
    '1951-04-01',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'patricia.garrido@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '89240997-I',
    'patricia',
    'garrido',
    'Lopez',
    'calle de segovia 78 2A CP:99504',
    'sadsnake121',
    '1951-07-05',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'domingo.vidal@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '79046197-S',
    'domingo',
    'vidal',
    'Lopez',
    'calle de téllez 87 2A CP:45080',
    'purplemouse816',
    '1972-11-30',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'andrea.suarez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '80536832-H',
    'andrea',
    'suarez',
    'Lopez',
    'avenida de salamanca 87 2A CP:68379',
    'beautifulpeacock361',
    '1947-02-04',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'magdalena.santiago@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '94123728-B',
    'magdalena',
    'santiago',
    'Lopez',
    'calle mota 94 2A CP:32444',
    'sadgoose790',
    '1972-11-17',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'carla.dominguez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '04769748-E',
    'carla',
    'dominguez',
    'Lopez',
    'calle de téllez 126 2A CP:13621',
    'smallgorilla109',
    '1993-04-24',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'tomas.rubio@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '05801172-N',
    'tomas',
    'rubio',
    'Lopez',
    'calle de ángel garcía 66 2A CP:14829',
    'blackmouse890',
    '1965-02-21',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'inmaculada.bravo@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '11339518-Q',
    'inmaculada',
    'bravo',
    'Lopez',
    'paseo de extremadura 56 2A CP:20875',
    'organicwolf478',
    '1953-04-07',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'adolfo.calvo@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '44522389-T',
    'adolfo',
    'calvo',
    'Lopez',
    'calle del barquillo 75 2A CP:18730',
    'lazywolf218',
    '1960-03-04',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'cristobal.roman@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '00324812-T',
    'cristobal',
    'roman',
    'Lopez',
    'paseo de extremadura 64 2A CP:24747',
    'yellowladybug571',
    '1960-03-23',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'pilar.hernandez@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '95602267-C',
    'pilar',
    'hernandez',
    'Lopez',
    'avenida de américa 112 2A CP:25530',
    'bigfrog730',
    '1958-08-31',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'santiago.romero@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '75058773-P',
    'santiago',
    'romero',
    'Lopez',
    'avenida de burgos 143 2A CP:38185',
    'greensnake639',
    '1967-06-15',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'fernando.lorenzo@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '63147689-Q',
    'fernando',
    'lorenzo',
    'Lopez',
    'calle de toledo 120 2A CP:58344',
    'purpletiger720',
    '1992-11-29',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'sergio.garcia@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '68114341-V',
    'sergio',
    'garcia',
    'Lopez',
    'calle de arturo soria 79 2A CP:24743',
    'bluepeacock987',
    '1951-08-12',
    0,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'fatima.carmona@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '96551263-X',
    'fatima',
    'carmona',
    'Lopez',
    'avenida del planetario 120 2A CP:14092',
    'blackwolf951',
    '1992-05-04',
    1,
    'Española',
    'CL');
            
insert into usuario (
    email,
    contrasena,
    dni,
    nombre,
    apellido_1,
    apellido_2,
    direccion,
    nombre_usuario,
    fecha_nacimiento,
    sexo,
    nacionalidad,
    id_tipo_usuario
    ) values (
    'vicenta.flores@example.com',
    '$argon2i$v=19$m=1024,t=2,p=2$bkpkYTMyWGV3bjEwb0pLeQ$4EmaMLTLUMLlSde/RbchkZywgjwrkdbWzJRcHW7oAYk',
    '87765091-P',
    'vicenta',
    'flores',
    'Lopez',
    'avenida de castilla 60 2A CP:28222',
    'beautifulsnake290',
    '1975-05-02',
    1,
    'Española',
    'CL');

	
-- CLASE CLASE CLASE CLASE CLASE CLASE CLASE
	insert into clase (
	id_clase,
	fecha,
	hora_inicio,
	hora_fin,
	id_pista,
	nombre_clase,
	precio_clase,
	id_usuario
	) values (
	"CLASS-FUTBOL",
	"2019-01-01", -- Para añadir una clase es necesario tener 
	"17:00:00",   -- el horario creado. 
	"17:59:59",
	"P-03",
	"Clase de Futbol",
	38.50,
	5
	);

    insert into clase (
	id_clase,
	fecha,
	hora_inicio,
	hora_fin,
	id_pista,
	nombre_clase,
	precio_clase,
	id_usuario
	) values (
	"CLASS-TENIS",
	"2018-12-23", -- Para añadir una clase es necesario tener 
	"16:00:00",   -- el horario creado. 
	"16:59:59",
	"P-01",
	"Clase de Tenis",
	18.50,
	7
	);

    insert into clase (
	id_clase,
	fecha,
	hora_inicio,
	hora_fin,
	id_pista,
	nombre_clase,
	precio_clase,
	id_usuario
	) values (
	"CLASS-NAT",
	"2018-12-23", -- Para añadir una clase es necesario tener 
	"15:00:00",   -- el horario creado. 
	"15:59:59",
	"P-05",
	"Clase de Natacion",
	12.50,
	8
	);

-- ASISTE ASISTE ASISTE ASISTE ASISTE ASISTE ASISTE	
	insert into asiste (	
	id_usuario,
	id_clase,
	fecha,
	hora_inicio,
	hora_fin,
	id_pista
	) values (
	8,
	"CLASS-FUTBOL",
	"2019-01-01", -- Para añadir una clase es necesario tener 
	"17:00:00",   -- el horario creado. 
	"17:59:59",
	"P-03"
	);
    
    
    insert into asiste (	
	id_usuario,
	id_clase,
	fecha,
	hora_inicio,
	hora_fin,
	id_pista
	) values (
	4,
	"CLASS-FUTBOL",
	"2019-01-01", -- Para añadir una clase es necesario tener 
	"17:00:00",   -- el horario creado. 
	"17:59:59",
	"P-03"
	);
        	insert into asiste (	
	id_usuario,
	id_clase,
	fecha,
	hora_inicio,
	hora_fin,
	id_pista
	) values (
	3,
	"CLASS-FUTBOL",
	"2019-01-01", -- Para añadir una clase es necesario tener 
	"17:00:00",   -- el horario creado. 
	"17:59:59",
	"P-03"
	);
    	insert into asiste (	
	id_usuario,
	id_clase,
	fecha,
	hora_inicio,
	hora_fin,
	id_pista
	) values (
	3,
	"CLASS-TENIS",
	"2018-12-23", -- Para añadir una clase es necesario tener 
	"16:00:00",   -- el horario creado. 
	"16:59:59",
	"P-01"
	);
    

	insert into asiste (	
	id_usuario,
	id_clase,
	fecha,
	hora_inicio,
	hora_fin,
	id_pista
	) values (
	9,
	"CLASS-FUTBOL",
	"2019-01-01", -- Para añadir una clase es necesario tener 
	"17:00:00",   -- el horario creado. 
	"17:59:59",
	"P-03"
	);

	insert into asiste (	
	id_usuario,
	id_clase,
	fecha,
	hora_inicio,
	hora_fin,
	id_pista
	) values (
	10,
	"CLASS-FUTBOL",
	"2019-01-01", -- Para añadir una clase es necesario tener 
	"17:00:00",   -- el horario creado. 
	"17:59:59",
	"P-03"
	);

-- GUSTOS GUSTOS GUSTOS GUSTOS GUSTOS GUSTOS 
insert into gustos_usuario(deportes_favoritos, comentarios, id_usuario)
		values("Futbol, Baloncesto, Tenis", "Soy un apasionado de los deportes.", 3);
	


-- NOTICIAS NOTICIAS NOTICIAS NOTICIAS NOTICIAS 

insert into noticia(titulo, texto, imagen, fecha)
		values('Dovizioso gana el GP de Qatar', 
			'Dovizioso ha ganado el Gran Premio de Qatar por delante de Márquez. Crutchlow, en tercera posición, ha cerrado el podio. Valentino Rossi, después de una remontada, ha acabado en quinta posición.',
			'1_GP.jpg',
            '2019-03-10');

insert into noticia(titulo, texto, imagen, fecha)
		values('El Betis insiste y gana en Balaídos a un Celta sin soluciones', 
			'El Betis no solo es cristalino sino que si se le mirase sin la lupa de los prejuicios se le ponderaría por una vocación que no todos atesoran no ya en el fútbol sino en la vida: el equipo que ordena Quique Setién salta al campo dispuesto a tomar el mando, no quiere ser gregario. Le acusan de horizontal, de poco profundo, barroco y tedioso sin valorar que en el fútbol quedarte con el balón es lo más complicado. Lo fácil, lo que puede hacer todo el mundo, los malos y los buenos, es correr tras él. En un tiempo en el que podría brotar la duda, después de ganar apenas un partido de ocho, de caer en la Copa del Rey y en Europa, de que en el Villamarín surgiesen gritos críticos contra el técnico, el Betis redobló su credo en Balaídos, maduró el partido, lo buscó, lo mereció y lo ganó en un ejercicio de paciencia en el que, por el camino, anuló al Celta. ¿Alguien puede reprocharlo?',
			'2_Betis.jpg',
            '2019-03-10');

insert into noticia(titulo, texto, imagen, fecha)
		values('Cómo exprimir al máximo la experiencia de esquiar', 
			'En todas las estaciones se ofrecen servicio de guías e instructores, en algunas como St. Anton am Alberg (Austria) para realizar descensos fuera de pista un guía es obligatorio. No todos ofrecen el mismo servicio. Los guías lideran las rutas, pero no dan clases de esquí, y, por lo general, los instructores se centran en mejorar la técnica del esquiador y no en descubrir la estación. A la hora de contratar a un monitor se debe tener claro qué se necesita. Pero en algunas estaciones, como Soldeu el Tarter (Grandvalira, Principado de Andorra), existe la figura del profesor top class, un mentor 360º del deporte de la nieve. Un top class es un esquiador fuera de serie, instructor al máximo nivel cuyo objetivo es garantizar la mejor experiencia al cliente, no solo desarrollando su técnica de esquí, su disposición mental, o estado físico, sino descubriendo el dominio esquiable, o acompañándolo a esquiar la primera nieve, durante la hora mágica, con el sol apareciendo detrás de las montañas cuando la estación aún no ha abierto. Pero incluso después del cierre de los remontes, el top class sigue guiando al esquiador',
			'3_Esquiar.jpg',
            '2019-03-10');
insert into noticia(titulo, texto, imagen, fecha)
		values('Piqué: “Tenemos los tres títulos en la cabeza”', 
			'Piqué llegó al Camp Nou con el paso parsimonioso de los futbolistas cuando no están lejos del balón. Iba de la mano de sus dos hijos, Sasha y Milan, vestidos de azulgrana, que no se querían perder el partido de su padre. “So cute (muy tierno)”, publicó el Barcelona. La imagen del 3, un imán para las redes sociales; su presencia, un clásico en el once de Valverde. No descansa el central, ni siquiera cuando Umtiti ya está recuperado de los problemas en la rodilla izquierda. “Es muy regular, en algún momento tendrá que descansar. Tiene cuatro amarillas”, aseguró el Txingurri. El defensa catalán cuenta 2.430 minutos en LaLiga, el jugador de campo que más ha participado.Juega como nunca, marca como casi nunca. Frente al Rayo, Piqué sumó su cuarto gol en LaLiga. La temporada que más dianas firmó fue la 2014-2015: cinco. “En racha, jugando. El último gol lo metí en noviembre o en diciembre. Contento. Me encuentro muy bien, son rachas en una carrera de muchos años. Hay momentos en los que estás mejor. Cuando el equipo está bien, yo me encuentro bien, cómodo y tranquilo, con los tres títulos ahí en la cabeza. Ese es el objetivo”, comentó el central. Piqué sorprendió al Rayo por donde menos se lo esperaba. “Un fallo, una decisión de medio segundo. Sabíamos que los que rematan en el Barça solo podían ser Piqué, Umtiti y Busquets. Es una lástima que nos hayan marcado a balón parado”, se lamentó Míchel.',
			'4_Pique.jpg',
            '2019-03-10');
		



