/*1. Creación de la tabla "Lista de comidas"!*/

CREATE TABLE Lista_de_comidas (
    Numero INTEGER PRIMARY KEY AUTOINCREMENT,
    Plato TEXT(25) NOT NULL,
    Precio_porcion FLOAT NOT NULL
);

/*2. Completar la tabla con 12 platos diferentes*/
INSERT INTO Lista_de_comidas (Plato, Precio_porcion) VALUES
('Milanesa napolitana', 12000),
('Ensalada César', 8500),
('Hamburguesa clásica', 15000),
('Pizza mozzarella', 11000),
('Pollo al horno con papas', 13500),
('Spaghetti a la boloñesa', 10500),
('Sushi', 18000),
('Locro', 9000),
('Empanadas de carne', 7500),
('Bife de chorizo', 16000),
('Trucha a la parrilla', 14000),
('Helado de dulce de leche', 6000);

/*3. Buscar los datos del código 5*/
SELECT * FROM Lista_de_comidas WHERE Numero = 5;

/*4. Listar los platos cuyo nombre comience con la letra "M"*/
SELECT * FROM Lista_de_comidas WHERE Plato LIKE 'M%';

/*5. Buscar todos los platos cuyo precio sea mayor a $ 15000*/
SELECT * FROM Lista_de_comidas WHERE Precio_porcion > 15000;

/*6. Listar los platos cuyo precio sea menor a $ 90000*/
SELECT * FROM Lista_de_comidas WHERE Precio_porcion < 90000;