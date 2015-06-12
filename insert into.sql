UTILISATEUR

insert into UTILISATEUR (ID, PSEUDO, NOM, PRENOM, PASSWORD, AGE, MAIL, RUE, VILLE, CODE_POSTAL, PAYS, DROIT) VALUES (1,'BP','Picsou','Balthazar','CARLBARKS',68,'balthazar.picsou@picsou&Co.com','killmotor','donaldville',1902,'Etats-Unis',1)
insert into UTILISATEUR (ID, PSEUDO, NOM, PRENOM, PASSWORD, AGE, MAIL, RUE, VILLE, CODE_POSTAL, PAYS, DROIT) VALUES (2,'ririCJ','Duck','riri','RI',10,'riri@castorjunior.com','Maison de Donald','donaldville',1937,'Etats-Unis',2)
insert into UTILISATEUR (ID, PSEUDO, NOM, PRENOM, PASSWORD, AGE, MAIL, RUE, VILLE, CODE_POSTAL, PAYS, DROIT) VALUES (3,'fifiCJ','Duck','fifi','FI',10,'fifi@castorjunior.com','Maison de Donald','donaldville',1937,'Etats-Unis',2);
insert into UTILISATEUR (ID, PSEUDO, NOM, PRENOM, PASSWORD, AGE, MAIL, RUE, VILLE, CODE_POSTAL, PAYS, DROIT) VALUES (4,'loulouCJ','Duck','loulou','LOU',10,'loulou@castorjunior.com','Maison de Donald','donaldville',1937,'Etats-Unis',2);

AVIS

insert into avis (id,contenu) values (1, 'très jolie teeshirt avec les couleur de l''asse')

AVISCLIENTPRODUIT

insert into avisclientproduit (avis,client,produit) values (1,2,2)

PRODUITSOUSCAT

INSERT INTO PRODUITSOUSCAT (CATEGORIE, SOUSCATEGORIE, PRODUIT) VALUES (1,1,2)
INSERT INTO PRODUITSOUSCAT (CATEGORIE, SOUSCATEGORIE, PRODUIT) VALUES (4,3,3)

SOUS_CATEGORIE

INSERT INTO SOUS_CATEGORIE (ID, NOM) VALUES (3,'CHaute');
INSERT INTO SOUS_CATEGORIE (ID, NOM) VALUES (4,'CBasse');
INSERT INTO SOUS_CATEGORIE (ID, NOM) VALUES (2,'Pantalon');	
INSERT INTO SOUS_CATEGORIE (ID, NOM) VALUES (1,'TeeShirt');

PRODUIT

INSERT INTO PRODUIT (ID, NOM, PRIX, COUP_COEUR, STOCK, DESCRIPTION) VALUES (3,'CBautineHaute', 50, 0, 2, 'Chaussure Bautine Haute');
INSERT INTO PRODUIT (ID, NOM, PRIX, COUP_COEUR, STOCK, DESCRIPTION) VALUES (2,'TSRock', 5, 0, 50, 'teeshirt Rock vert');
INSERT INTO PRODUIT (ID, NOM, PRIX, COUP_COEUR, STOCK, DESCRIPTION) VALUES (1,'TSMettallica', 12, 1, 20, 'teeshirt Metallica rose');

CATEGORIE

INSERT INTO CATEGORIE (ID, NOM) VALUES (4,'chaussure');
INSERT INTO CATEGORIE (ID, NOM) VALUES (3,'accessoire');
INSERT INTO CATEGORIE (ID, NOM) VALUES (2,'homme');
INSERT INTO CATEGORIE (ID, NOM) VALUES (1,'femme');