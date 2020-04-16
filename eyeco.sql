-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 16 avr. 2020 à 13:40
-- Version du serveur :  5.6.11
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `eyeco`
--

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `id Faq` int(11) NOT NULL AUTO_INCREMENT,
  `id Utilisateur` int(11) NOT NULL,
  `date` date NOT NULL,
  `question` text NOT NULL,
  `reponse` text NOT NULL,
  PRIMARY KEY (`id Faq`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `idTEST` int(11) NOT NULL AUTO_INCREMENT,
  `id Utilisateur` int(11) NOT NULL,
  `id Test` int(11) NOT NULL,
  `date` date NOT NULL,
  `id Test composant` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`idTEST`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `codepilote` int(11) NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `identifiant` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `email`, `mdp`, `codepilote`, `admin`, `identifiant`) VALUES
(4, 'guilhem', 'Dubois', 'guilhem.dubois@isep.fr', '$2y$10$gz.3DAtBXkWXoFxt5HpiD.prqhpDRPskXkN8PbZYwlqxys8IbrZUO', 2, NULL, 'guigui');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
