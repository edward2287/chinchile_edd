CREATE TABLE productos
(
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR (100) NOT null,
  descripcion TEXT NOT NULL,
  precio DECIMAL (10,2) not NULL,
  categoria VARCHAR (50) NOT NULL,
  activo INT NOT NULL,
  created_by INT NOT NULL,
  PRIMARY KEY (id)
);

SELECT * FROM productos;