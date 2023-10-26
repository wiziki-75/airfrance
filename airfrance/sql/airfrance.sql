CREATE DATABASE airfrance;

USE airfrance;

CREATE TABLE Constructeur (
    idconstructeur INT PRIMARY KEY,
    nom VARCHAR(255),
    pays VARCHAR(255),
    statut VARCHAR(255)
);

CREATE TABLE Avion (
    idavion INT PRIMARY KEY,
    designation VARCHAR(255),
    capacite INT,
    dateAchat DATE,
    idconstructeur INT,
    FOREIGN KEY (idconstructeur) REFERENCES Constructeur(idconstructeur)
);

CREATE TABLE Pilote (
    idpilote INT PRIMARY KEY,
    nom VARCHAR(255),
    prenom VARCHAR(255),
    adresse VARCHAR(255),
    email VARCHAR(255),
    nbvols INT
);

CREATE TABLE Vol (
    idvol INT PRIMARY KEY,
    datevol DATE,
    designation VARCHAR(255),
    idavion INT,
    idPilote1 INT,
    idpilote2 INT,
    FOREIGN KEY (idavion) REFERENCES Avion(idavion),
    FOREIGN KEY (idPilote1) REFERENCES Pilote(idpilote),
    FOREIGN KEY (idpilote2) REFERENCES Pilote(idpilote)
);
