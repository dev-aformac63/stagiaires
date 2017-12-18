-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 12 déc. 2017 à 09:56
-- Version du serveur :  10.1.26-MariaDB-0+deb9u1
-- Version de PHP :  7.0.19-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `aformac`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_actualites`
--

CREATE TABLE `tbl_actualites` (
  `id` int(10) UNSIGNED NOT NULL,
  `section` varchar(75) NOT NULL,
  `titre` varchar(225) NOT NULL,
  `texte` text NOT NULL,
  `date_crea` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_actualites`
--

INSERT INTO `tbl_actualites` (`id`, `section`, `titre`, `texte`, `date_crea`) VALUES
(1, 'section abcd', 'titre1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce volutpat, massa ullamcorper ornare rhoncus, lectus urna porta neque, at dictum odio urna vitae lacus. Praesent ultrices neque enim, et tincidunt erat placerat id. Fusce elementum condimentum leo, nec sagittis ligula rutrum at. Nulla vel mauris magna. Sed sed velit dignissim, blandit libero non, hendrerit lectus. Aenean egestas sapien nunc, in pretium purus imperdiet id. Pellentesque aliquam vehicula aliquet.', '2017-11-27 00:00:00'),
(2, 'section efgh', 'azerty', 'Maecenas finibus tristique augue, sit amet vulputate nibh facilisis id. Cras rhoncus neque sed sem mollis, in laoreet nisi dapibus. Maecenas semper diam sed sagittis semper. Suspendisse faucibus faucibus nunc, eu dictum nisl. Praesent pellentesque condimentum risus eu finibus. Vestibulum metus risus, dictum id tempor sit amet, tincidunt vitae massa. Proin maximus risus sapien, sed molestie sapien feugiat feugiat. Mauris faucibus rutrum justo, ut suscipit quam pellentesque et. Mauris non pharetra nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse magna mi, consectetur eu tincidunt ac, fringilla vitae arcu. Phasellus consectetur elit vitae augue suscipit eleifend. Nulla facilisi. Nam sagittis tellus dolor, quis euismod urna cursus at. Nam felis leo, fringilla ac tristique sed, porta non eros.', '2017-11-27 00:00:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tbl_actualites`
--
ALTER TABLE `tbl_actualites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tbl_actualites`
--
ALTER TABLE `tbl_actualites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
