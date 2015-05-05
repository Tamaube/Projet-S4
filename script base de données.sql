CREATE TABLE utilisateur
(
	id INT(10) PRIMARY KEY NOT NULL,
	pseudo VARCHAR(20),
	nom VARCHAR(30),
	prenom VARCHAR(30),
	password VARCHAR(20),
	age INT(3),
	mail VARCHAR(30),
	rue VARCHAR(30),
	ville VARCHAR(50),
	code_postal INT(5),
	pays VARCHAR(30),
	droit INT(1)
);

CREATE TABLE produit
(
	id INT(10) PRIMARY KEY NOT NULL,
	nom VARCHAR(20),
	prix FLOAT(10),
	coup_coeur BOOLEAN(1),
	stock INT(30),
	description VARCHAR(255)
);

CREATE TABLE commande(
	id INT(10) PRIMARY KEY NOT NULL,
	quantité INT(50),
	prix FLOAT(50),
	date DATE,
	statut VARCHAR(30)
);

CREATE TABLE avis(
	id INT(10) PRIMARY KEY NOT NULL,
	contenu VARCHAR(255)
);

CREATE TABLE catégorie(
	id INT(10) PRIMARY KEY NOT NULL,
	nom VARCHAR(30)
);

CREATE TABLE sous_categorie(
	id INT(10) PRIMARY KEY NOT NULL,
	nom VARCHAR(30)
);


