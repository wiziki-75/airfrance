-- Insertion dans la table Constructeur
INSERT INTO Constructeur (idconstructeur, nom, pays, statut)
VALUES (1, 'Boeing', 'États-Unis', 'Actif'),
       (2, 'Airbus', 'France', 'Actif');

-- Insertion dans la table Avion
INSERT INTO Avion (idavion, designation, capacite, dateAchat, idconstructeur)
VALUES (1, 'Boeing 737', 150, '2022-05-10', 1),
       (2, 'Airbus A320', 180, '2022-06-15', 2),
       (3, 'Boeing 747', 350, '2022-04-20', 1);

-- Insertion dans la table Pilote
INSERT INTO Pilote (idpilote, nom, prenom, adresse, email, nbvols)
VALUES (1, 'Dupont', 'Jean', '123 rue des Lilas, Paris', 'jean.dupont@email.com', 50),
       (2, 'Martin', 'Marie', '456 avenue des Roses, Lyon', 'marie.martin@email.com', 30),
       (3, 'Lefevre', 'Pierre', '789 chemin des Champs, Marseille', 'pierre.lefevre@email.com', 40);

-- Insertion dans la table Vol
INSERT INTO Vol (idvol, datevol, designation, idavion, idPilote1, idpilote2)
VALUES (1, '2022-07-05', 'Paris - New York', 1, 1, 2),
       (2, '2022-08-10', 'Lyon - Berlin', 2, 2, 3),
       (3, '2022-09-15', 'Marseille - Tokyo', 3, 3, 1);
