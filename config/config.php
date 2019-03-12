<?php 

	Config::set('site.name','Polideportivo');
	Config::set('db.host','localhost');
	Config::set('db.name','proyecto_polideportivo');
	Config::set('db.user','admin_polideportivo');
	Config::set('db.pass','1234');
	//Config::set('ruta.defecto','/noticias/list/');
	Config::set('ruta.defecto','/index');
	Config::set('controlador.defecto','main');
	Config::set('session.user', 'BASIC_DATA'); // Guardar resto en localStorage
	Config::set('session.pref', 'BASIC_PREF'); 
	Config::set('session.clas', 'BASIC_CLAS'); 
?>