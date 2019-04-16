#!/bin/bash

#Despligue de la base de datos y el usuario administrador

ADMIN_POLIDEPORTIVO="./resources/database.sql"

mysql < $ADMIN_POLIDEPORTIVO
php bin/console doctrine:database:drop --force
php bin/console doctrine:database:create
echo "Se ha creado la base de datos."
php bin/console doctrine:schema:update --dump-sql --force
php bin/console doctrine:fixtures:load --append
echo "################################"
echo "## Se han agregado los datos. ##" 
echo "################################"

# Sleep: Permite lanzar un comando pasado un tiempo
sleep 3
clear

