<?php 

	spl_autoload_register(function ($class) {
    $classPath = "./../src/";
    require("$classPath${class}.php");
	});
	$con = Conexion::getInstance();
	$con = $con->conexion();

	$e = $con->prepare("select * from usuario;");
	$e->execute();
	print_r($e->fetchAll());

	
 ?>