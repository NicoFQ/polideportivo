<?php 
	define('HOSTS', '/etc/hosts');
	define('BACKUP_HOSTS', './bin/backup-hosts/hosts-copy');
	define('BACKUP_APACHE2', './resources/despliegue-apache2/002-POLIDEPORTIVO.conf');
	define('SITE_POLIDEPORTIVO', '/etc/apache2/sites-available/002-POLIDEPORTIVO.conf');

	define('DOMINIO', 'polideportivo.es');
	define('HOST', '127.0.0.1');
	echo "\n";
	$my_file = HOSTS;
	$handle = fopen($my_file, 'r');
	$data = fread($handle,filesize($my_file));

	$arrayHosts = explode("\n", $data);
	$hayDominio = false;
	$hayDireccion = false;
	foreach ($arrayHosts as $key => $value) {
		$direccion = is_int(strpos($value, HOST));
		$dominio = is_int(strpos($value, DOMINIO));
		if ($dominio && $direccion) {
			echo "Dominio ".DOMINIO."\t OK\n";
			echo "Direccion ".HOST."\t\t OK\n";
			$hayDominio = true;
			$hayDominio = true;
		}
	}

	if (!$hayDominio && !$hayDireccion) {
		echo "\nNo se pudo encontrar un dominio correcto para el polideportivo.\n";

		echo "\n\t- Creando copia de seguridad de " . HOSTS."\n";
		if (copy(HOSTS, BACKUP_HOSTS)) {
			echo "\t- Copia de seguridad creada.\n";
			echo "\t- Añadiendo nuevo dominio a " . HOSTS."\n";

			$my_file = HOSTS;
			$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
			$data = "\n# Host añadido por script de despliegue del polideportivo.";
			fwrite($handle, $data);
			$new_data = "\n".HOST ."\t" . DOMINIO;
			fwrite($handle, $new_data);
			
		}else{
			echo "\n\t- No se pudo crear la copia de seguridad.\n";
			echo "\n\t- Es necesario añadir el dominio manualmente.\n";
			echo "\n\t- Abortando...\n";
			die();
		}
	}

	fclose($handle);

	if (file_exists(SITE_POLIDEPORTIVO)) {
		echo "\nConfiguracion de apache2\t OK\n";
	}else{
		echo "\nNo se ha encontrado una configuracion apache2 correcta\n";
		echo "\t- Copiando configuracion de apache2\n";
		if (copy(BACKUP_APACHE2, SITE_POLIDEPORTIVO)) {
			echo "\t- Se ha copiado la configuracion \n";
		}else{
			echo "\t- No se ha podido copiar la configuracion\n";
			echo "\t- Es necesario copiar la configuracion manualmente\n";
		}
	}
 ?>