<?php 
	class Conexion 
	{
		private static $instancia;
		private $bd;
		private function __construct()
		{
			try {
				$this->bd = new PDO("mysql:host=localhost;dbname=proyecto_polideportivo", "admin_polideportivo","1234");	
			} catch (PDOException $e) {
				print "¡Error!: " . $e->getMessage() . "<br/>";
				die();
			}
			
		}
		
		public static function getInstance()
		{
			if (!isset(static::$instancia)) {
		        $miclase = __CLASS__;
		        self::$instancia = new $miclase;
			}
        	return self::$instancia;
		}
	}
 ?>