#!/bin/bash
BDUsuario="admin_polideportivo"
BDNombreBD="proyecto_polideportivo"
BDContrasena="1234"

BDCreaTablas="resources/bbdd/20181221_primerscript.sql"
BDCreaDatos="resources/bbdd/datos-polideportivo.sql"

mysql -u $BDUsuario -p$BDContrasena $BDNombreBD < $BDCreaTablas
mysql -u $BDUsuario -p$BDContrasena $BDNombreBD < $BDCreaDatos
