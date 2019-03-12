<?php 
	
	//php -a -d auto_prepend_file=bin/shell_autoload.php

	// Ayuda a que funcione en Windows y en Linux
	define('DS', DIRECTORY_SEPARATOR); 

	// Raiz del proyecyo independiente de donde se despliegue la aplicacion.
	define('ROOT', dirname(dirname(__FILE__)));
	define('VIEW_ROOT', ROOT.DS."resources".DS);
	require(ROOT.DS."src".DS."init.php");
	//echo ModelNoticia::getAll();

	App::initDB();
	$user = [	
        "dni" =>"12345678X", 
        "nombre"=> "Roberto",
        "apellido_1" => "Laguna",

        "apellido_2" => "Lorca", 
        "direccion" => "Calle de la oca",		
        "sexo" => "0",

        "email" => "robert@gmail.com",
        "nacionalidad" => "Cubana",        
        "nombre_usuario" => "Robert", 

        "contrasena" => "1234",
        "fecha_nacimiento" => "1996-03-30",
                        ];
    	$admin = [	
        "dni" =>"12345678X", 
        "nombre"=> "Luis",
        "apellido_1" => "Lopez",

        "apellido_2" => "Olmos", 
        "direccion" => "Calle de los mil titulos",		
        "sexo" => "0",

		"administrador@hotmail.es",
        "nacionalidad" => "Española",        
        "nombre_usuario" => "Admin", 

        "contrasena" => "1234",
        "fecha_nacimiento" => "1996-03-30",
                        ];
	ModelUsuario::registrar($user);
	ModelUsuario::registrar($admin, true);
 ?>