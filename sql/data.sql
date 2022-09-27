-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 23 sep. 2022 à 13:31
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdd_sk`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `IDUSER` int(11) NOT NULL,
  `NOMUTILISATEURADMIN` char(32) DEFAULT NULL,
  `MDP` char(32) DEFAULT NULL,
  `NOM` char(32) DEFAULT NULL,
  `PRENOM` char(32) DEFAULT NULL,
  PRIMARY KEY (`IDUSER`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `IDCAT` int(11) NOT NULL,
  `TITRE` char(32) DEFAULT NULL,
  PRIMARY KEY (`IDCAT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `IDCOMMENTAIRE` int(11) NOT NULL,
  `IDFICHE` int(11) NOT NULL,
  `IDUSER` int(11) NOT NULL,
  `CONTENU` char(255) DEFAULT NULL,
  PRIMARY KEY (`IDCOMMENTAIRE`),
  KEY `I_FK_COMMENTAIRE_USERCONNECTEE` (`IDUSER`),
  KEY `I_FK_COMMENTAIRE_FICHECONNAISSANCE` (`IDFICHE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ficheconnaissance`
--

DROP TABLE IF EXISTS `ficheconnaissance`;
CREATE TABLE IF NOT EXISTS `ficheconnaissance` (
  `IDFICHE` int(11) NOT NULL,
  `IDCAT` int(11) NOT NULL,
  `IDUSER` int(11) NOT NULL,
  `TITRE` char(32) DEFAULT NULL,
  `DATE` datetime DEFAULT NULL,
  `TEXTEFICHE` char(255) DEFAULT NULL,
  PRIMARY KEY (`IDFICHE`),
  KEY `I_FK_FICHECONNAISSANCE_CATEGORIE` (`IDCAT`),
  KEY `I_FK_FICHECONNAISSANCE_USER` (`IDUSER`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `IDUSER` int(11) NOT NULL,
  `NOM` char(32) DEFAULT NULL,
  `PRENOM` char(32) DEFAULT NULL,
  `MAIL` varchar(128) DEFAULT NULL,
  `MDP` char(32) DEFAULT NULL,
  `DROITAJOUT` tinyint(1) DEFAULT NULL,
  `DROITMODIF` tinyint(1) DEFAULT NULL,
  `DROITSUPPRIMER` tinyint(1) DEFAULT NULL,
   PRIMARY KEY (`IDUSER`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
