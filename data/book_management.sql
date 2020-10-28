DROP DATABASE IF EXISTS book_management;

CREATE DATABASE book_management DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE book_management;

DROP USER IF EXISTS 'bookManager'@'localhost';

CREATE USER 'bookManager'@'localhost';

GRANT ALL PRIVILEGES ON book_management.* To 'bookManager'@'localhost' IDENTIFIED BY 'bookManager';

CREATE TABLE User
(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_number VARCHAR (20) NOT NULL,
    firstname VARCHAR (30) NOT NULL,
    lastname VARCHAR (30) NOT NULL,
    email VARCHAR (20) NOT NULL,
    adress VARCHAR (50) NOT NULL,
    postal_code VARCHAR (10) NOT NULL,
    city VARCHAR (30) NOT NULL,
    PRIMARY KEY (id)
)
ENGINE=InnoDB;

INSERT INTO User (user_number, firstname, lastname, email, adress, postal_code, city)
VALUE ('0000lol0000', 'Penneflamme', 'Katty', 'tu@nes', '2 notre', '10101', 'Galaxie');

CREATE TABLE book 
(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    autor VARCHAR (50) NOT NULL,
    title VARCHAR (50) NOT NULL,
    release_date DATE NOT NULL,
    literary_style VARCHAR (30) NOT NULL,
    status VARCHAR (1) NOT NULL,
    resume TEXT,
    user_id INT UNSIGNED NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES User(id)
)
ENGINE=InnoDB;

INSERT INTO Book (autor, title, release_date, literary_style, status, resume, user_id)
VALUE ('Miguel de Cervantes', 'Don Quichotte' , 1605, 'roman', 'O', 'Don Quichotte est un Hidalgo (gentilhomme de la noblesse) obsédé par la chevalerie et Sancho Panza, un paysan obsédé par la nourriture, est son écuyer. Le premier est un chevalier errant et illuminé qui part combattre le mal à travers "l"Espagne sur son cheval : Rossinante.', NULL);