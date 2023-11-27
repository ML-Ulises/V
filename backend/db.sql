-- MariaDB
CREATE DATABASE sales CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
use sales;

CREATE TABLE IF NOT EXISTS contactos (
    id BIGINT AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    servicio VARCHAR(50) NOT NULL,
    mensaje TEXT NOT NULL
    CONSTRAINT pkproduct PRIMARY KEY (id)
);

GRANT ALL PRIVILEGES ON sales.* TO Ulises@'%' IDENTIFIED BY '354947402';
GRANT ALL PRIVILEGES ON sales.* TO Ulises@'localhost' IDENTIFIED BY '354947402';

-- Postgres
CREATE DATABASE sales;
\c sales;
CREATE TABLE IF NOT EXISTS contactos (
    id BIGSERIAL,
    nombre VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    servicio VARCHAR(50) NOT NULL,
    mensaje TEXT NOT NULL
    CONSTRAINT pkproduct PRIMARY KEY (id)
);

-- insert data for both
INSERT INTO product (nombre, email, telefono, servicio, mensaje ) 
VALUES ('Ulises Isidro Mendez Lopez','ulises@gmail.com','9511459874','Instalación de Redes Wi-Fi','Quiero una instalacion');

INSERT INTO product (nombre, email, telefono, servicio, mensaje ) 
VALUES ('oswaldo miguel lopez','wall@gmail.com','9519473069','Configuración de Enrutadores y Dispositivos de Red','se desconfiguraron mis dispositivos');

INSERT INTO product (nombre, email, telefono, servicio, mensaje ) 
VALUES ('marisol hurtado lopez','marisol@gmail.com','9513807460','Optimización de la Señal Wi-Fi','no me llega bien la señal');

INSERT INTO product (nombre, email, telefono, servicio, mensaje ) 
VALUES ('marcos mendoza vazquez','mdz@gmail.com','9512580385','Seguridad de Red y Protección contra Amenaza','quiero una mayor seguridad');

INSERT INTO product (nombre, email, telefono, servicio, mensaje ) 
VALUES ('larry perez','larry@gmail.com','9511709483','Conexión de Dispositivos Inteligentes (IoT)','necesito que conecte mi alexa');

INSERT INTO product (nombre, email, telefono, servicio, mensaje ) 
VALUES ('david calvo garcia','david@gmail.com','9516930471','Resolución de Problemas de Conectividad','la señal se va por partes');

CREATE USER Ulises WITH PASSWORD '354947402';
GRANT ALL PRIVILEGES ON DATABASE sales to Ulises;
GRANT ALL PRIVILEGES ON TABLE contacto TO Ulises;