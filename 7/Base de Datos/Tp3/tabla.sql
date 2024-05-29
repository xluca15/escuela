SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*Creación de la tabla Autores en MySQL*/

CREATE TABLE Autores (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(255) NOT NULL,
  apellido VARCHAR(255) NOT NULL,
  fechaNacimiento DATE NOT NULL,
  nacionalidad VARCHAR(255) NOT NULL,
  mejorObra VARCHAR(255) NOT NULL,
  añoPublicacion INT NOT NULL,
  edadPublicacion INT NOT NULL
);

/*Población de la tabla Autores con los datos*/
  INSERT INTO Autores VALUES
  (1, 'Gabriel García Márquez', 'Márquez', '1927-03-06', 'Colombiano', 'Cien años de soledad', 1967, 40),
  (2, 'Julio Cortázar', 'Cortázar', '1914-08-26', 'Argentino', 'Rayuela', 1963, 48),
  (3, 'Mario Vargas Llosa', 'Llosa', '1936-03-28', 'Peruano', 'La ciudad y los perros', 1963, 26),
  (4, 'Pablo Neruda', 'Neruda', '1904-07-12', 'Chileno', 'Veinte poemas de amor y una canción desesperada', 1924, 19),
  (5, 'Isabel Allende', 'Allende', '1942-08-02', 'Chilena', 'La casa de los espíritus', 1982, 40),
  (6, 'Jorge Luis Borges', 'Borges', '1899-08-24', 'Argentino', 'Ficciones', 1944, 45),
  (7, 'Octavio Paz', 'Paz', '1914-03-31', 'Mexicano', 'El laberinto de la soledad', 1950, 36),
  (8, 'Clarice Lispector', 'Lispector', '1920-12-10', 'Brasileña', 'La hora de la estrella', 1977, 56),
  (9, 'Juan Rulfo', 'Rulfo', '1917-05-16', 'Mexicano', 'Pedro Páramo', 1955, 38),
  (10, 'Carlos Fuentes', 'Fuentes', '1928-11-11', 'Mexicano', 'La región más transparente', 1958, 29),
  (11, 'Eduardo Galeano', 'Galeano', '1940-09-03', 'Uruguayo', 'Las venas abiertas de América Latina', 1971, 31);

/* Listar todos los autores de que sean de Nacionalidad Argentina*/
SELECT * FROM Autores WHERE nacionalidad = 'Argentina';

/*Listar todos los autores que tengan hayan publicado entre 1960 a 1980*/
SELECT * FROM Autores WHERE añoPublicacion BETWEEN 1960 AND 1980;

/*Mostrar el promedio de la edad de publicación*/
SELECT AVG(edadPublicacion) AS promedio_edad_publicacion FROM Autores;
