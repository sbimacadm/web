CREATE DATABASE QAIRA;
USE QAIRA;

CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password int(8) NOT NULL
);

INSERT INTO usuario (id, username, password)
VALUES (4, 'joseph', 33333333);
