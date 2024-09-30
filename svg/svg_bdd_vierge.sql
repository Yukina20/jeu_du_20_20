-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 30 sep. 2024 à 10:19
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jeu_du_20_20`
--

-- --------------------------------------------------------

--
-- Structure de la table `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'identifiant',
  `content_text` text COLLATE utf8mb4_general_ci NOT NULL COMMENT 'contenu de la réponse',
  `content_code` text COLLATE utf8mb4_general_ci COMMENT 'code source pouvant accompagner la\r\nréponse',
  `content_image` smallint DEFAULT NULL COMMENT 'fichier image pouvant\r\naccompagner la réponse',
  `is_true` tinyint(1) NOT NULL COMMENT 'true si la réponse est une bonne\r\nréponse à la question associée ',
  `created_at` datetime NOT NULL COMMENT 'date et heure de création de la\r\nréponse',
  `revised_at` datetime DEFAULT NULL COMMENT 'date de la dernière révision de\r\nla réponse',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id` int NOT NULL COMMENT 'identifiant',
  `content_text` text NOT NULL COMMENT 'contenu de la question',
  `content_code` text COMMENT 'code pouvant accompagner une\r\nquestion',
  `content_image` varchar(200) DEFAULT NULL COMMENT 'fichier image pouvant\r\naccompagner la question',
  `is_to_be_revised` tinyint(1) NOT NULL COMMENT 'true si la question doit être\r\nrévisée',
  `created_at` datetime NOT NULL COMMENT 'date et heure de création de la\r\nquestion',
  `revised_at` datetime DEFAULT NULL COMMENT 'date de dernière révision de la\r\nquestion',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
