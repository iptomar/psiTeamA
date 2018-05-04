CREATE DATABASE website;

CREATE TABLE Persons (
    nome varchar(255) NOT NULL,
    idade int NOT NULL,
    username varchar(255) PRIMARY KEY,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL 
)ENGINE=InnoDB;