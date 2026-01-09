CREATE DATABASE transport_db;
USE transport_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    role ENUM('admin','user') DEFAULT 'user'
);

INSERT INTO users (name,email,password,role)
VALUES ('Admin','admin@transport.com',MD5('admin123'),'admin');
