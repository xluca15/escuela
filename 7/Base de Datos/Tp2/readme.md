Escribir el enunciado de cada punto – presentarlo en un archivo .txt

a) Creación de la tabla MARCAS 
CREATE TABLE MARCAS (
IdMarca SMALLINT NOT NULL DEFAULT 1,
NombreMarca CHAR(10) NOT NULL,
NombreCiudad CHAR(60) NOT NULL,
PRIMARY KEY (idMarca))

b) Creación de la tabla COCHES
CREATE TABLE COCHES (
codcoche SMALLINT NOT NULL,
nombre CHAR(15) NOT NULL,
modelo CHAR(10),
PRIMARY KEY (codcoche))

c) Creación de la tabla MARCO
CREATE TABLE MARCO (
IdMarca SMALLINT NOT NULL,
codcoche SMALLINT NOT NULL,
PRIMARY KEY (cifm,codcoche),
FOREIGN KEY (cifm) REFERENCES MARCA,
FOREIGN KEY (codcoche) REFERENCES COCHE)

d) Insertar los registros en la tabla MARCAS
INSERT INTO MARCAS VALUES (1,'vw','Mar del Plata')
INSERT INTO MARCAS VALUES (2,'renault','Rosario')
INSERT INTO MARCAS VALUES (3,'fiat','Cordoba')
INSERT INTO MARCAS VALUES (4,'ford','Neuquen')

e) Seleccionar todos los registros de la tabla MARCAS
SELECT * FROM MARCAS

f) Seleccionar los campos "nombre" y "ciudad" de la tabla MARCAS
SELECT nombre, ciudad FROM MARCAS

g) Seleccionar los registros con "IdMarca" 2
select nombre,ciudad from MARCAS where IdMarca = 2

h) Seleccinar los registros con "ciudad" "Neuquen"
select NombreMarca,ciudad from marca
where ciudad = 'Neuquen'

i) Seleccionar NombreCiudad de la tabla marcas cuando la ciudad empieza con la letra "s"
select nombre,ciudad
from marcas
where ciudad LIKE 'S%'

j) Actualizar la ciudad de Jujuy a Neuquen en la tabla marcas
update marcas
set ciudad = 'Neuquen'
where ciudad = 'Jujuy'