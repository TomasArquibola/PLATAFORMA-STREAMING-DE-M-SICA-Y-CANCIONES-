CREATE DATABASE IF NOT EXISTS pro_music;
USE pro_music;
CREATE TABLE usuarios (id INT AUTO_INCREMENT PRIMARY KEY, nombre_usuario VARCHAR(50), correo_electronico VARCHAR(100), contrasena VARCHAR(255));
CREATE TABLE canciones (id INT AUTO_INCREMENT PRIMARY KEY, titulo VARCHAR(100), artista VARCHAR(100), archivo VARCHAR(255), id_usuario INT, FOREIGN KEY (id_usuario) REFERENCES usuarios(id));