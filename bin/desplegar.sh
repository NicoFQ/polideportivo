#!/bin/bash
# ----------------------------------
BDNombreBD="proyecto_polideportivo"

BDUsuario="admin_polideportivo"
BDContrasena="1234"
# ----------------------------------




# ----------------------------------
MYSQLDespliegue="./resources/bbdd/despliegue.sql"
PHPDespliegue="./config/config_apache2.php"
PHPSleep="./config/sleep.php"

BDCreaTablas="./resources/bbdd/tablas-polideportivo.sql"
BDCreaDatos="./resources/bbdd/datos-polideportivo.sql"
# ----------------------------------




# ----------------------------------
mysql < $MYSQLDespliegue
echo "Desplegando base de datos..."

mysql -u $BDUsuario -p$BDContrasena $BDNombreBD < $BDCreaTablas
echo "Tablas creadas..."

mysql -u $BDUsuario -p$BDContrasena $BDNombreBD < $BDCreaDatos
echo "Datos insertados..."
# ----------------------------------




# ----------------------------------
sudo php $PHPDespliegue

sudo a2ensite 002-POLIDEPORTIVO.conf
sudo a2enmod rewrite

sudo service apache2 restart

sudo php $PHPSleep
# ----------------------------------
