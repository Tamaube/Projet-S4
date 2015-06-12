UTILISATEUR

insert into UTILISATEUR (ID, PSEUDO, NOM, PRENOM, PASSWORD, AGE, MAIL, RUE, VILLE, CODE_POSTAL, PAYS, DROIT) VALUES (1,'BP','Picsou','Balthazar','CARLBARKS',68,'balthazar.picsou@picsou&Co.com','killmotor','donaldville',1902,'Etats-Unis',1)
insert into UTILISATEUR (ID, PSEUDO, NOM, PRENOM, PASSWORD, AGE, MAIL, RUE, VILLE, CODE_POSTAL, PAYS, DROIT) VALUES (2,'ririCJ','Duck','riri','RI',10,'riri@castorjunior.com','Maison de Donald','donaldville',1937,'Etats-Unis',2)
insert into UTILISATEUR (ID, PSEUDO, NOM, PRENOM, PASSWORD, AGE, MAIL, RUE, VILLE, CODE_POSTAL, PAYS, DROIT) VALUES (3,'fifiCJ','Duck','fifi','FI',10,'fifi@castorjunior.com','Maison de Donald','donaldville',1937,'Etats-Unis',2);
insert into UTILISATEUR (ID, PSEUDO, NOM, PRENOM, PASSWORD, AGE, MAIL, RUE, VILLE, CODE_POSTAL, PAYS, DROIT) VALUES (4,'loulouCJ','Duck','loulou','LOU',10,'loulou@castorjunior.com','Maison de Donald','donaldville',1937,'Etats-Unis',2);

AVIS

insert into avis (id,contenu) values (1, 'très jolie teeshirt avec les couleur de l''asse')

AVISCLIENTPRODUIT

insert into avisclientproduit (avis,client,produit) values (1,2,2)