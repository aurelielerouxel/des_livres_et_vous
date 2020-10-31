DROP DATABASE IF EXISTS librairie;

CREATE DATABASE librairie DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE librairie;

DROP USER IF EXISTS 'laloose'@'localhost';

CREATE USER 'laloose'@'localhost';

GRANT ALL PRIVILEGES ON librairie.* To 'laloose'@'localhost' IDENTIFIED BY 'laloose';

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
VALUE ('0000lol0000', 'Penneflamme', 'Katty', 'tu@nes', '2 notre', '10101', 'Galaxie'),
('1234lol4321', 'Tahiti', 'Bob', 'lessimpsons@fox.us', 'Krusty Burger', '90210', 'Springfield');

CREATE TABLE book 
(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    autor VARCHAR (50) NOT NULL,
    title VARCHAR (50) NOT NULL,
    release_date INT NOT NULL,
    literary_style VARCHAR (30) NOT NULL,
    status VARCHAR (1) NOT NULL,
    resume TEXT NOT NULL,
    user_id INT UNSIGNED,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES User(id)
)
ENGINE=InnoDB;

INSERT INTO Book (autor, title, release_date, literary_style, status, resume, user_id)
VALUE ('Miguel de Cervantes', 'Don Quichotte' , 1605, 'Roman', 'X', 'Don Quichotte est un Hidalgo (gentilhomme de la noblesse) obsédé par la chevalerie et Sancho Panza, un paysan obsédé par la nourriture, est son écuyer. Le premier est un chevalier errant et illuminé qui part combattre le mal à travers "l"Espagne son cheval : Rossinante.', 1),
('William Shakespeare', 'Le Roi Lear', 1606, 'Théâtre', 'O', 'Le roi Lear décide de léguer son royaume à ses trois filles : Goneril, épouse du Duc d Albany, Régane, épouse du Duc de Cornouailles, et Cordélia qui a deux prétendants : le Duc de Bourgogne et le roi de France. ... Lear déclare qu il ira vivre chaque mois chez l une de ses filles, accompagné de cent chevaliers.', NULL);