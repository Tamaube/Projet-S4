-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 19 Juin 2015 à 14:26
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `rock_n_clothes`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE IF NOT EXISTS `avis` (
`ID` int(10) NOT NULL,
  `CONTENU` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `avisclientproduit`
--

CREATE TABLE IF NOT EXISTS `avisclientproduit` (
  `AVIS` int(10) DEFAULT NULL,
  `CLIENT` int(10) DEFAULT NULL,
  `PRODUIT` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
`ID` int(10) NOT NULL,
  `NOM` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`ID`, `NOM`) VALUES
(1, 'femme'),
(2, 'homme'),
(3, 'accessoire'),
(4, 'chaussure');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
`ID` int(10) NOT NULL,
  `CLIENT` int(10) DEFAULT NULL,
  `PRODUIT` int(10) DEFAULT NULL,
  `QUANTITE` int(10) DEFAULT NULL,
  `DATEAJOUT` date DEFAULT NULL,
  `STATUT` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`ID`, `CLIENT`, `PRODUIT`, `QUANTITE`, `DATEAJOUT`, `STATUT`) VALUES
(28, 1, 4, 1, '2015-06-18', 'Valide'),
(34, 1, 3, 2, '2015-06-18', 'Valide'),
(35, 1, 6, 4, '2015-06-18', 'Valide'),
(40, 11, 4, 2, '2015-06-18', 'Valide'),
(41, 11, 6, 5, '2015-06-18', 'Valide'),
(42, 11, 4, 3, '2015-06-18', 'Valide'),
(43, 11, 4, 1, '2015-06-18', 'Valide'),
(44, 1, 4, 1, '2015-06-18', 'Valide'),
(45, 1, 4, 1, '2015-06-18', 'Valide'),
(46, 1, 4, 1, '2015-06-18', 'Valide'),
(47, 1, 5, 1, '2015-06-18', 'Valide'),
(48, 1, 4, 1, '2015-06-19', 'Valide'),
(49, 1, 4, 1, '2015-06-19', 'En cours'),
(50, 1, 5, 1, '2015-06-19', 'En cours');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
`ID` int(10) NOT NULL,
  `NOM` varchar(20) DEFAULT NULL,
  `PRIX` float DEFAULT NULL,
  `COUP_COEUR` int(1) DEFAULT NULL,
  `STOCK` int(20) DEFAULT NULL,
  `DESCRIPTION` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`ID`, `NOM`, `PRIX`, `COUP_COEUR`, `STOCK`, `DESCRIPTION`) VALUES
(1, 'TSMettallica', 12, 1, 20, 'teeshirt Metallica rose'),
(2, 'TSRock', 5, 1, 50, 'teeshirt Rock vert'),
(3, 'BottineHaute', 50, 1, 0, 'Chaussure Bautine Haute'),
(4, 'Sweat Metallica', 25, 1, 9, 'Un super Sweat'),
(5, 'Tee Shirt Rammstein', 15, 1, 44, 'tee shirt rammstein'),
(6, 'T-shirt Meow', 25, 0, 41, 'T-shirt en coton\r\nCouleur(s) du produit : Noir'),
(7, 'T-shirt Kitty', 25, 0, 20, 'Coton\r\nCouleur : noir');

-- --------------------------------------------------------

--
-- Structure de la table `produitsouscat`
--

CREATE TABLE IF NOT EXISTS `produitsouscat` (
  `CATEGORIE` int(10) DEFAULT NULL,
  `SOUSCATEGORIE` int(10) DEFAULT NULL,
  `PRODUIT` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `produitsouscat`
--

INSERT INTO `produitsouscat` (`CATEGORIE`, `SOUSCATEGORIE`, `PRODUIT`) VALUES
(1, 1, 1),
(1, 1, 2),
(4, 3, 3),
(2, 5, 4),
(2, 1, 5),
(1, 1, 6),
(1, 1, 7);

-- --------------------------------------------------------

--
-- Structure de la table `sous_categorie`
--

CREATE TABLE IF NOT EXISTS `sous_categorie` (
`ID` int(10) NOT NULL,
  `NOM` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sous_categorie`
--

INSERT INTO `sous_categorie` (`ID`, `NOM`) VALUES
(1, 'TeeShirt'),
(2, 'Pantalon'),
(3, 'CHaute'),
(4, 'CBasse'),
(5, 'Sweat');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
`ID` int(10) NOT NULL,
  `PSEUDO` varchar(20) DEFAULT NULL,
  `NOM` varchar(30) DEFAULT NULL,
  `PRENOM` varchar(30) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  `AGE` int(3) DEFAULT NULL,
  `MAIL` varchar(30) DEFAULT NULL,
  `RUE` varchar(30) DEFAULT NULL,
  `VILLE` varchar(50) DEFAULT NULL,
  `CODE_POSTAL` int(5) DEFAULT NULL,
  `PAYS` varchar(30) DEFAULT NULL,
  `DROIT` int(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `PSEUDO`, `NOM`, `PRENOM`, `PASSWORD`, `AGE`, `MAIL`, `RUE`, `VILLE`, `CODE_POSTAL`, `PAYS`, `DROIT`) VALUES
(1, 'Louvetia', 'Lescarret', 'Elisa', 'test', 20, 'lescarret@test.fr', '13 rue de la programmation', 'Orsay', 91400, 'France', 2),
(5, 'TestU', 'TestNom', 'Prenom1', 'test', 50, 'prenom.nom@test.com', '10 rue test', 'Grenoble', 38000, 'France', NULL),
(6, 'Truc', 'Machin', 'Truc', 'machin', 29, 'machin_truc@oui.org', '30 boulevard truc', 'Truc', 54123, 'France', NULL),
(10, 'jogij', 'rglijgreio', 'oijiopfj', 'truc', 20, 'iojiojvre@eighrui.fr', 'zegze', 'reherhe', 45123, 'grzerze', NULL),
(11, 'Test', 'Testn', 'testp', 'test', 23, 'oihvoihrq@ijvidj.fr', '30 rue jiozejfij', 'oigrigjroi', 48488, 'erqkjgbrkej', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `produitsouscat`
--
ALTER TABLE `produitsouscat`
 ADD PRIMARY KEY (`PRODUIT`);

--
-- Index pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `sous_categorie`
--
ALTER TABLE `sous_categorie`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
