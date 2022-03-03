-- Creamos la base de datos
DROP SCHEMA IF EXISTS `galileo`;
CREATE SCHEMA `galileo`;

-- Nos situamos sobre la base de datos
USE `galileo`;

-- Creamos el usuario
DROP USER IF EXISTS `sqliuser`@localhost;
CREATE USER `sqliuser`@localhost IDENTIFIED BY 'password';

-- Asignamos permisos al usuario
GRANT ALL ON `galileo`.* TO `sqliuser`@localhost;

-- Creamos la tabla de usuarios
CREATE TABLE `usuarios`
(
    `idusuario` INT,
    `nombre`    VARCHAR(255),
    `apellidos` VARCHAR(255),
    `password`  VARCHAR(255)
);

-- Añadimos los usuarios
INSERT INTO `usuarios` (`idusuario`, `nombre`, `apellidos`, `password`)
VALUES (1, 'javier', 'Perez Jambrina', 'javi77'),
       (2, 'sofia', 'Alfonso Lucas', 'sflu12'),
       (3, 'julio', 'Narvaez lopez', 'ju12lio'),
       (4, 'eva', 'Santos Fernandez ', 'evaeva11');
