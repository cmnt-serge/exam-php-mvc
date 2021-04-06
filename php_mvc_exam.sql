-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 06 avr. 2021 à 15:00
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `php_mvc_exam`
--

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `points` int(11) NOT NULL,
  `goal_taken` int(11) NOT NULL,
  `goal_scored` int(11) NOT NULL,
  `logo_url` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Déchargement des données de la table `team`
--

INSERT INTO `team` (`id`, `name`, `points`, `goal_taken`, `goal_scored`, `logo_url`) VALUES
(1, 'test', 25, 10, 2, 'https://upload.wikimedia.org/wikipedia/fr/thumb/4/43/Logo_Olympique_de_Marseille.svg/1200px-Logo_Olympique_de_Marseille.svg.png'),
(5, 'test', 50, 30, 40, 'ge'),
(7, 'Lyon', 10, 20, 50, ''),
(8, 'lyon', 52, 45, 15, 'utils/uploads/ol-logo.png'),
(9, 'paris', 55, 56, 55, NULL),
(10, 'lens', 5, 5, 5, NULL),
(11, 'tarbe', 5, 6, 5, 'utils/uploads/1223389068606c6d7e3cc4d.png');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'seoxis', 'test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
