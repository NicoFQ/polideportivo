<?php 

	spl_autoload_register(function ($class) {
    $classPath = "./../src/";
    require("$classPath${class}.php");
	});
	$con = Conexion::getInstance();
	
 ?>