CREATE DATABASE my_db;

USE my_db;

CREATE TABLE users(
    u_id INT AUTO_INCREMENT PRIMARY KEY,
    u_name VARCHAR(255),
    u_email VARCHAR(255) UNIQUE,
    u_password VARCHAR(255) UNIQUE
);
