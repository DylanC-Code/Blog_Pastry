-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 17 jan. 2022 à 08:16
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
-- Base de données : `blog_pastry`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id_category` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_category`, `category_name`) VALUES
(1, 'Pies'),
(2, 'Macaroons'),
(3, 'Cakes');

-- --------------------------------------------------------

--
-- Structure de la table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
CREATE TABLE IF NOT EXISTS `recipes` (
  `id_recipe` int NOT NULL AUTO_INCREMENT,
  `recipe` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `difficulty` int NOT NULL,
  `date_publication` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ingredient_1` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `ingredient_2` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `ingredient_3` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `ingredient_4` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `ingredient_5` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `ingredient_6` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `user_name` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_recipe`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `recipes`
--

INSERT INTO `recipes` (`id_recipe`, `recipe`, `category`, `description`, `image`, `difficulty`, `date_publication`, `ingredient_1`, `ingredient_2`, `ingredient_3`, `ingredient_4`, `ingredient_5`, `ingredient_6`, `user_name`) VALUES
(1, 'Chocolate Macaroons', '2', 'Macaroons of chocolate', './assets/media/brown_macaroon.jpg', 1, '2022-01-12 07:57:36', 'macaroons', 'chocolate', '', '', '', '', 'Dylan'),
(2, 'Pink macaroons', '2', 'Raspberry macaroons', './assets/media/pink_macaroon.jpg', 2, '2022-01-12 07:58:27', 'Macaroons', 'Raspberry', '', '', '', '', ''),
(3, 'Raspberry pie', '1', 'A raspberry pie', './assets/media/cramberry_pie.jpg', 3, '2022-01-12 07:59:38', 'Raspberry', 'Pie', '', '', '', '', ''),
(4, 'Trianon cake', '3', 'An official trianon cake', './assets/media/trianon_cake.jpg', 1, '2022-01-12 08:01:51', 'Cake', 'Chocolate', 'Trianon', 'Lorem', 'Ipsum', 'Chacalaca', ''),
(5, 'Apple pie', '1', 'An official apple pie', './assets/media/apple_pie.jpg', 1, '2022-01-12 08:03:18', 'Apples', 'Pie', 'Canel', '', '', '', ''),
(6, 'Big raspberry pie', '1', 'A realy fat raspberry pie', './assets/media/tarte-framboises.jpg', 3, '2022-01-12 08:05:30', 'Fat', 'Raspberries', 'Pie', 'Chocolate', '', '', ''),
(7, 'Red Cake', '3', 'A beautiful red cake', './assets/media/red_cake.jpg', 3, '2022-01-12 08:06:15', 'Red', 'Beautiful', 'Cake', '', '', '', 'Dylan'),
(9, 'Orange Macaroons', '2', 'The veritable orange macaroons', './assets/media/orange_macaroon.jpg', 2, '2022-01-13 13:51:14', 'macaroons', 'orange', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `user_name`, `password`, `email`) VALUES
(1, 'admin', '$2y$10$.Qf0EjRRULiSN0qZqttLQOIs561cuCH4MQj0Y6iabPHzJRXFkkN4W', 'admin@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
