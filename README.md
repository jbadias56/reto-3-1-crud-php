# Reto 3.1 - CRUD PHP

Aplicación web CRUD completa desarrollada en PHP con MySQL.

## Requisitos
- PHP 8+
- MySQL 8+
- Apache o Nginx

## Instalación

1. Clona el repositorio:
git clone https://github.com/jbadias56/reto-3-1-crud-php.git

2. Crea la base de datos en MySQL:
CREATE DATABASE crud_db;
USE crud_db;
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

3. Copia los ficheros de src/ a /var/www/html/

4. Accede a http://localhost/index.php
