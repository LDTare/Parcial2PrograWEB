/*
Created: 26/09/2021
Modified: 26/09/2021
Model: MySQL 8.0
Database: MySQL 8.0
*/

-- Create tables section -------------------------------------------------

-- Table Usuario

CREATE TABLE `Usuario`
(
  `IdUser` Int NOT NULL AUTO_INCREMENT,
  `Nombre` Varchar(35) NOT NULL,
  `Apellido` Varchar(35) NOT NULL,
  `Email` Varchar(55) NOT NULL,
  `NameUser` Varchar(75) NOT NULL,
  `Pasword` Varchar(100) NOT NULL,
  `Estado` Int NOT NULL,
  PRIMARY KEY (`IdUser`)
)
;

-- Table Album

CREATE TABLE `Album`
(
  `IdAlbum` Int NOT NULL AUTO_INCREMENT,
  `IdUser` Int,
  `Nombre` Varchar(55) NOT NULL,
  `Fecha` Date NOT NULL,
  `Estado` Int NOT NULL,
  PRIMARY KEY (`IdAlbum`)
)
;

CREATE INDEX `IX_Relationship1` ON `Album` (`IdUser`)
;

-- Table Fotografia

CREATE TABLE `Fotografia`
(
  `IdFotografia` Int NOT NULL AUTO_INCREMENT,
  `Nombre` Varchar(25),
  `Fecha` Date NOT NULL,
  `Fotografia` Blob NOT NULL,
  `Estado` Int NOT NULL,
  `IdAlbum` Int,
  PRIMARY KEY (`IdFotografia`)
)
;

CREATE INDEX `IX_Relationship2` ON `Fotografia` (`IdAlbum`)
;

-- Create foreign keys (relationships) section -------------------------------------------------

ALTER TABLE `Album` ADD CONSTRAINT `Relationship1` FOREIGN KEY (`IdUser`) REFERENCES `Usuario` (`IdUser`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

ALTER TABLE `Fotografia` ADD CONSTRAINT `Relationship2` FOREIGN KEY (`IdAlbum`) REFERENCES `Album` (`IdAlbum`) ON DELETE RESTRICT ON UPDATE RESTRICT
;

