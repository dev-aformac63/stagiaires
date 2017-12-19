-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 17 déc. 2017 à 19:37
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
-- Base de données :  `coincoin`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_coincoin`
--

DROP TABLE IF EXISTS `tbl_coincoin`;
CREATE TABLE IF NOT EXISTS `tbl_coincoin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(200) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `description` text NOT NULL,
  `nb_like` int(11) DEFAULT NULL,
  `comment` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_coincoin`
--

INSERT INTO `tbl_coincoin` (`id`, `titre`, `image`, `description`, `nb_like`, `comment`) VALUES
(1, 'Coincoin classique', 'canard1.jpg', 'Le coincoin classique, indémodable.', 0, '0'),
(2, 'Coincoin Licorne', 'canard2.jpg', 'Le coincoin Licorne, pour en voir de toutes les couleurs de l\'arc-en-ciel!.', 0, '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
