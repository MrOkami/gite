-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 02 mars 2021 à 14:20
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gite`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int NOT NULL,
  `email_admin` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `password_admin` varchar(255) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `category_gites`
--

DROP TABLE IF EXISTS `category_gites`;
CREATE TABLE IF NOT EXISTS `category_gites` (
  `type` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gites`
--

DROP TABLE IF EXISTS `gites`;
CREATE TABLE IF NOT EXISTS `gites` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom_gite` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `description_gite` text COLLATE utf8_swedish_ci NOT NULL,
  `img_gite` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `prix` float NOT NULL,
  `nbr_chambre` int NOT NULL,
  `SaleDeBain` int NOT NULL,
  `disponible` tinyint NOT NULL,
  `zone_geo` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `date_arrivee` datetime NOT NULL,
  `date_depart` datetime NOT NULL,
  `gite_category` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `gite_category` (`gite_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `gites`
--
ALTER TABLE `gites`
  ADD CONSTRAINT `gites_ibfk_1` FOREIGN KEY (`gite_category`) REFERENCES `category_gites` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
