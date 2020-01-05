-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 07 mai 2019 à 09:29
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `brobock`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE IF NOT EXISTS `adresse` (
  `IDA` int(11) NOT NULL AUTO_INCREMENT,
  `IDP` smallint(4) NOT NULL,
  `CP` int(5) DEFAULT NULL,
  `VILLE` varchar(128) DEFAULT NULL,
  `COMPLEMENT` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`IDA`),
  KEY `I_FK_ADRESSE_PAYS` (`IDP`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`IDA`, `IDP`, `CP`, `VILLE`, `COMPLEMENT`) VALUES
(1, 1, 43700, 'Saint-Germain Laprade', '3 impasse du Chouvet');

-- --------------------------------------------------------

--
-- Structure de la table `biere`
--

DROP TABLE IF EXISTS `biere`;
CREATE TABLE IF NOT EXISTS `biere` (
  `IDB` int(11) NOT NULL AUTO_INCREMENT,
  `IDC` smallint(4) NOT NULL,
  `IDM` smallint(4) NOT NULL,
  `NOMB` varchar(128) DEFAULT NULL,
  `PRIXL` decimal(13,2) DEFAULT NULL,
  `DATECREA` int(11) DEFAULT NULL,
  `TAUXA` double(13,2) DEFAULT NULL,
  `IMGBIERE` varchar(255) NOT NULL,
  PRIMARY KEY (`IDB`),
  KEY `I_FK_BIERE_CATEGORIE` (`IDC`),
  KEY `I_FK_BIERE_MARQUE` (`IDM`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `biere`
--

INSERT INTO `biere` (`IDB`, `IDC`, `IDM`, `NOMB`, `PRIXL`, `DATECREA`, `TAUXA`, `IMGBIERE`) VALUES
(1, 1, 1, ' Kwak', '6.90', 1791, 8.40, 'img/ImgBiere/kwak.jpg'),
(2, 2, 2, 'Vedette Extra White', '6.60', 1871, 4.70, 'img/ImgBiere/vedette.jpg'),
(3, 3, 3, 'Chouffe', '6.30', 1982, 8.00, 'img/ImgBiere/chouffe.png'),
(4, 3, 5, 'Desperados', '5.10', 1995, 5.90, 'img/ImgBiere/desperados.png'),
(5, 4, 6, ' St Bernardus Abt 12', '7.50', 1946, 10.00, 'img/ImgBiere/bernardus.png'),
(6, 5, 7, 'Guinness Foreign Extra Stout', '9.30', 1759, 7.50, 'img/ImgBiere/guinness.png'),
(7, 6, 3, 'Château d\'Ychouffe', '16.67', 1982, 8.00, 'img/ImgBiere/ychouffe.png'),
(8, 7, 8, 'Leffe Ruby', '4.98', 1952, 5.00, 'img/ImgBiere/ruby.png'),
(9, 8, 4, 'Bière du Sorcier', '10.50', 2008, 5.00, 'img/ImgBiere/sorcier.png');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `IDC` int(11) NOT NULL AUTO_INCREMENT,
  `LIBELLEC` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`IDC`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`IDC`, `LIBELLEC`) VALUES
(1, 'Ambrée'),
(2, 'Blanche'),
(3, 'Blonde'),
(4, 'Brune'),
(5, 'Noire'),
(6, 'Rosée'),
(7, 'Rubis'),
(8, 'Verte');

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `IDM` int(11) NOT NULL AUTO_INCREMENT,
  `IDP` smallint(4) NOT NULL,
  `LIBELLEM` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`IDM`),
  KEY `I_FK_MARQUE_PAYS` (`IDP`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`IDM`, `IDP`, `LIBELLEM`) VALUES
(1, 2, 'Brasserie Bosteels'),
(2, 2, 'Duvel'),
(3, 2, 'Brasserie D\'Achouffe'),
(4, 1, '3 Abbayes'),
(5, 4, 'Heineken'),
(6, 2, 'St Bernardus'),
(7, 3, 'Guinness'),
(8, 2, 'Leffe');

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `IDP` int(11) NOT NULL AUTO_INCREMENT,
  `LIBELLEP` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`IDP`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`IDP`, `LIBELLEP`) VALUES
(1, 'France'),
(2, 'Belgique'),
(3, 'Irlande'),
(4, 'Pays-Bas'),
(5, 'Suisse'),
(6, 'Guadeloupe'),
(7, 'Guyane');

-- --------------------------------------------------------

--
-- Structure de la table `sexe`
--

DROP TABLE IF EXISTS `sexe`;
CREATE TABLE IF NOT EXISTS `sexe` (
  `IDS` int(11) NOT NULL AUTO_INCREMENT,
  `LIBELLES` varchar(10) NOT NULL,
  PRIMARY KEY (`IDS`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sexe`
--

INSERT INTO `sexe` (`IDS`, `LIBELLES`) VALUES
(1, 'Homme'),
(2, 'Femme');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `IDU` int(11) NOT NULL AUTO_INCREMENT,
  `IDA` smallint(4) NOT NULL,
  `IDS` int(11) NOT NULL,
  `NOMU` char(32) DEFAULT NULL,
  `PRENOMU` char(32) DEFAULT NULL,
  `MAIL` varchar(255) DEFAULT NULL,
  `PSEUDO` char(32) DEFAULT NULL,
  `MDP` varchar(255) DEFAULT NULL,
  `AGE` smallint(3) DEFAULT NULL,
  `DROIT` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`IDU`),
  KEY `I_FK_UTILISATEUR_ADRESSE` (`IDA`),
  KEY `FK_utilisateur_sexe` (`IDS`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`IDU`, `IDA`, `IDS`, `NOMU`, `PRENOMU`, `MAIL`, `PSEUDO`, `MDP`, `AGE`, `DROIT`) VALUES
(1, 1, 1, 'Thalamas', 'Yvan', 'yvan0329@orange.fr', 'Worgueno', 'admin', 19, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
