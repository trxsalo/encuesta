CREATE DATABASE encuesta;
use encuesta;

CREATE Table registro(
id int AUTO_INCREMENT PRIMARY KEY,
profesion VARCHAR(50) ,
rol VARCHAR(50),
conocePHP VARCHAR(50),
phpConocimiento VARCHAR(50),
fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DROP Table registro;

