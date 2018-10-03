-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 03 oct. 2018 à 06:23
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ministere`
--

-- --------------------------------------------------------

--
-- Structure de la table `chiffreaffaires`
--

DROP TABLE IF EXISTS `chiffreaffaires`;
CREATE TABLE IF NOT EXISTS `chiffreaffaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_entreprise` int(11) NOT NULL,
  `montant` double NOT NULL,
  `impots` double NOT NULL,
  `annee` year(4) NOT NULL,
  `modification` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_enteprise` (`id_entreprise`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chiffreaffaires`
--

INSERT INTO `chiffreaffaires` (`id`, `id_entreprise`, `montant`, `impots`, `annee`, `modification`) VALUES
(1, 5, 50000, 12500, 2018, '2018-10-02 13:22:43'),
(2, 1, 200000, 66000, 2017, '2018-10-02 13:36:09');

-- --------------------------------------------------------

--
-- Structure de la table `denominations`
--

DROP TABLE IF EXISTS `denominations`;
CREATE TABLE IF NOT EXISTS `denominations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `creation` date NOT NULL,
  `user` varchar(255) NOT NULL,
  `pourcent` float NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_index` (`creation`,`nom`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `denominations`
--

INSERT INTO `denominations` (`id`, `nom`, `creation`, `user`, `pourcent`) VALUES
(1, 'auto-entreprises', '2018-10-01', 'MANRESA', 0.25),
(2, 'SAS', '2018-10-01', 'MANRESA LUIS', 0.33);

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

DROP TABLE IF EXISTS `entreprises`;
CREATE TABLE IF NOT EXISTS `entreprises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `siret` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `representant` varchar(255) NOT NULL,
  `id_denomination` int(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nom` (`nom`),
  KEY `FK_denomination` (`id_denomination`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `entreprises`
--

INSERT INTO `entreprises` (`id`, `siret`, `nom`, `representant`, `id_denomination`, `adresse`) VALUES
(1, 5446, 'iconect', '', 2, '28 rue du moulin 92800'),
(3, 1453, 'Wayne', '', 2, '77 avenue de france 75015'),
(4, 48, 'moulin', 'jad', 1, '28 rue du moulin 92800'),
(5, 7489, 'TOTAL', 'jad', 1, '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_index` (`telephone`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `mail`, `telephone`) VALUES
(4, 'jad', 'jad@gmail.com', '06-25-54-45-12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
