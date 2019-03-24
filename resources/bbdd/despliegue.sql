CREATE USER IF NOT EXISTS 'admin_polideportivo'@'localhost' IDENTIFIED BY '1234';

CREATE DATABASE IF NOT EXISTS proyecto_polideportivo;

GRANT ALL PRIVILEGES ON proyecto_polideportivo.* TO 'admin_polideportivo'@'localhost' WITH GRANT OPTION;

