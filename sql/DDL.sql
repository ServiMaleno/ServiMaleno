CREATE DATABASE dbservimaleno;

USE dbservimaleno;

CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    direccion VARCHAR(150) NOT NULL,
    telefono INT NOT NULL,
    contraseña VARCHAR(255) NOT NULL,
    fecha VARCHAR(20) NULL
);