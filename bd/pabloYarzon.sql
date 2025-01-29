DROP IF EXISTS DATABASE portafolioPablo;

CREATE DATABASE portafolioPablo;

USE portafolioPablo;


CREATE TABLE proyectos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion VARCHAR(500),
    foto_url VARCHAR(100),
    linkgit VARCHAR(100),
    fecha DATE,
    tecnologias VARCHAR(300), 
);

INSERT INTO proyectos (
    nombre,
    descripcion,
    foto_url,
    linkgit,
    fecha,
    tecnologias
) VALUES (
    'SISVIANSA',
    'Proyecto de egreso para UTU',
    'https://github.com/santiMartinez97/ProyectoITI2023',
    'https://via.placeholder.com/150',
    'https://via.placeholder.com/150',
    '2023-12-20',
    'HTML, CSS, JS, ETC'
),
(
    'Club Atletico Cerro',
    'Pagina de el Club Atletico Cerro',
    'https://github.com/blitocerro/ca_cerro',
    'https://via.placeholder.com/150',
    'https://via.placeholder.com/150',
    '2025-01-01',
    'HTML, CSS, JS, ETC'
);