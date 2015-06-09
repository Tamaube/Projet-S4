CREATE TABLE utilisateur
(
	id INT PRIMARY KEY NOT NULL,
	pseudo VARCHAR(20),
	nom VARCHAR(30),
	prenom VARCHAR(30),
	password VARCHAR(20),
	age INT,
	mail VARCHAR(30),
	rue VARCHAR(30),
	ville VARCHAR(50),
	code_postal INT,
	pays VARCHAR(30),
	droit INT
);

CREATE TABLE produit
(
	id INT PRIMARY KEY NOT NULL,
	nom VARCHAR(20),
	prix FLOAT(10),
	coup_coeur NUMBER(1),
	stock INT,
	description VARCHAR(255)
);

CREATE TABLE commande(
	id INT PRIMARY KEY NOT NULL,
	client INT NOT NULL, 
	produit INT NOT NULL,
	quantité INT,
	dateAjout DATE,
	statut VARCHAR(30),
	CONSTRAINT userID
		FOREIGN KEY (client)
		REFERENCES utilisateur(id),
	CONSTRAINT numProduit
		FOREIGN KEY (produit)
		REFERENCES produit(id)
);

CREATE TABLE avis(
	id INT PRIMARY KEY NOT NULL,
	contenu VARCHAR(255)
);

CREATE TABLE categorie(
	id INT PRIMARY KEY NOT NULL,
	nom VARCHAR(30)
);

CREATE TABLE sous_categorie(
	id INT PRIMARY KEY NOT NULL,
	nom VARCHAR(30)
);

CREATE TABLE ProduitSousCat(
	categorie INT NOT NULL,
	CONSTRAINT numCategorie
		FOREIGN KEY (categorie)
		REFERENCES categorie(id),
	sousCategorie INT NOT NULL,
	CONSTRAINT numSousCategorie
		FOREIGN KEY (sousCategorie)
		REFERENCES sous_categorie(id),
	produit INT NOT NULL,
	CONSTRAINT numProduitSousCat
		FOREIGN KEY (produit)
		REFERENCES produit(id)
);

CREATE TABLE avisClientProduit(
	avis INT NOT NULL,
	CONSTRAINT numAvis
		FOREIGN KEY (avis)
		REFERENCES avis(id),
	client INT NOT NULL,
	CONSTRAINT clientID
		FOREIGN KEY (client)
		REFERENCES utilisateur(id),
	produit INT NOT NULL,
	CONSTRAINT numProduitAvisClientProduit
		FOREIGN KEY (produit)
		REFERENCES produit(id)
);