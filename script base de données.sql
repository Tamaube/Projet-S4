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
	description VARCHAR(255),
	avis INT NOT NULL,
	CONSTRAINT numAvis
		FOREIGN KEY (avis)
		REFERENCES avis(id),
	catégorie INT NOT NULL,
	CONSTRAINT numCatégorie
		FOREIGN KEY (catégorie)
		REFERENCES catégorie(id),
);

CREATE TABLE commande(
	id INT(10) PRIMARY KEY NOT NULL,
	client INT NOT NULL, 
	produit INT NOT NULL,
	quantité INT(50),
	date DATE,
	statut VARCHAR(30),
	CONSTRAINT userID
		FOREIGN KEY (client)
		REFERENCES utilisateur(id),
	CONSTRAINT numProduit
		FOREIGN KEY (produit)
		REFERENCES produit(id),
);

CREATE TABLE avis(
	id INT(10) PRIMARY KEY NOT NULL,
	client INT NOT NULL,
	contenu VARCHAR(255),
	CONSTRAINT userID
		FOREIGN KEY (client)
		REFERENCES utilisateur(id),
);

CREATE TABLE catégorie(
	id INT(10) PRIMARY KEY NOT NULL,
	nom VARCHAR(30)
);

CREATE TABLE sous_categorie(
	id INT(10) PRIMARY KEY NOT NULL,
	nom VARCHAR(30)
);

CREATE TABLE ProduitSousCat(
	souscatégorie INT NOT NULL,
	CONSTRAINT numCatégorie
		FOREIGN KEY (souscatégorie)
		REFERENCES sous_categorie(id),
	produit INT NOT NULL,
	CONSTRAINT numProduit
		FOREIGN KEY (produit)
		REFERENCES produit(id)
);

