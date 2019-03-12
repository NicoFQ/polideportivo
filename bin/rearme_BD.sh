#!/bin/bash
BDNombreBD="proyecto_polideportivo"
BDUsuario="admin_polideportivo"
BDContrasena="1234"
# ----------------------------------
BDDesplegarReservas="./resources/bbdd/desplegar_reservas.sql"
BDDesplegarCompras="./resources/bbdd/desplegar_compras.sql"
# ----------------------------------
# ----------------------------------
BDCreaTablas="./resources/bbdd/tablas-polideportivo.sql"
BDCreaDatos="./resources/bbdd/datos-polideportivo.sql"
# ----------------------------------

mysql -u $BDUsuario -p$BDContrasena $BDNombreBD < $BDCreaTablas
echo "Tablas creadas..."

mysql -u $BDUsuario -p$BDContrasena $BDNombreBD < $BDCreaDatos
echo "Datos insertados..."
# ----------------------------------

# php -a -d auto_prepend_file=bin/rearme_users.php
php bin/rearme_users.php

mysql -u $BDUsuario -p$BDContrasena $BDNombreBD < $BDDesplegarReservas
echo 
mysql -u $BDUsuario -p$BDContrasena $BDNombreBD < $BDDesplegarCompras
echo "Insertando compras..."
# ----------------------------------
