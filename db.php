CREATE DATABASE IF NOT EXISTS sistema_usuarios;

USE sistema_usuarios;

CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL
);

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    rol_id INT,
    foto VARCHAR(255),  -- Campo para almacenar la ruta o nombre del archivo de la foto
    FOREIGN KEY (rol_id) REFERENCES roles(id)
);

INSERT INTO roles (nombre) VALUES ('Admin'), ('Editor'), ('Viewer');

INSERT INTO usuarios (nombre, email, password, rol_id) VALUES
('Admin User', 'admin@example.com', 'password123', 1),
('Editor User', 'editor@example.com', 'password123', 2),
('Viewer User', 'viewer@example.com', 'password123', 3);


