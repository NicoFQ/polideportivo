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



insert into usuario (
	email,
	contrasena,
	dni,
	nombre,
	apellido_1,
	apellido_2,
	direccion,
	imagen_perfil,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"nicolas@hotmail.es",
	"1234",
	"12345678P",
	"Nicolas",
	"Avila",
	"Lopez",
	"C/Leon 34 5C",
	"empty.jpg",
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
	imagen_perfil,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"kevin@hotmail.es",
	"1234",
	"12345678P",
	"Kevin",
	"Avila",
	"Lopez",
	"C/Limon 23 1D",
	"empty.jpg",
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
	imagen_perfil,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"miguel@hotmail.es",
	"1234",
	"12345678P",
	"Miguel",
	"Avila",
	"Lopez",
	"C/Uva 152 3D",
	"empty.jpg",
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
	imagen_perfil,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"mario@hotmail.es",
	"1234",
	"12345678P",
	"Mario",
	"Avila",
	"Lopez",
	"C/Alcala 34 2A",
	"empty.jpg",
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
	imagen_perfil,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"alvaro@hotmail.es",
	"1234",
	"12345678P",
	"Alvaro",
	"Avila",
	"Lopez",
	"C/Marron 201 SN",
	"empty.jpg",
	"Alvaro123",
	"1996-03-30",
	0,
	"Española",
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
	imagen_perfil,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"sergio@hotmail.es",
	"1234",
	"12345678P",
	"Sergio",
	"Avila",
	"Lopez",
	"Avda/Robles 11 7D",
	"empty.jpg",
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
	imagen_perfil,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"victor@hotmail.es",
	"1234",
	"12345678P",
	"Victor",
	"Avila",
	"Lopez",
	"Pza. Constitucion 12 2C",
	"empty.jpg",
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
	imagen_perfil,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"javier@hotmail.es",
	"1234",
	"12345678P",
	"Javier",
	"Avila",
	"Lopez",
	"C/Limon 43 4E",
	"empty.jpg",
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
	imagen_perfil,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"marta@hotmail.es",
	"1234",
	"12345678P",
	"Marta",
	"Avila",
	"Lopez",
	"C/Hortaleza 31 1A",
	"empty.jpg",
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
	imagen_perfil,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"lola@hotmail.es",
	"1234",
	"12345678P",
	"Lola",
	"Avila",
	"Lopez",
	"C/Fresno 20 SN",
	"empty.jpg",
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
	imagen_perfil,
	nombre_usuario,
	fecha_nacimiento,
	sexo,
	nacionalidad,
	id_tipo_usuario
	) values (
	"miriam@hotmail.es",
	"1234",
	"12345678P",
	"Miriam",
	"Avila",
	"Lopez",
	"Avda.Constitucion 101 2D",
	"empty.jpg",
	"Miri123",
	"1996-03-30",
	1,
	"Española",
	"CL");

-- RESERVAS RESERVAS RESERVAS RESERVAS RESERVAS RESERVAS

	insert into reserva (
	id_reserva,
	id_usuario,
	fecha,
	hora_inicio,
	hora_fin,
	id_pista,
	precio_reserva
	) values (
	"123456789",
	6,
	"2018-12-23",
	"15:00:00",
	"15:59:59",
	"P-01",
	5.69
	);

	insert into reserva (
	id_reserva,
	id_usuario,
	fecha,
	hora_inicio,
	hora_fin,
	id_pista,
	precio_reserva
	) values (
	"123456789",
	7,
	"2018-12-23",
	"16:00:00",
	"16:59:59",
	"P-02",
	4.50
	);

	insert into reserva (
	id_reserva,
	id_usuario,
	fecha,
	hora_inicio,
	hora_fin,
	id_pista,
	precio_reserva
	) values (
	"123456789",
	8,
	"2018-12-23",
	"15:00:00",
	"15:59:59",
	"P-03",
	4.50
	);
	
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


