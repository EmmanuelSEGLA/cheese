#cheese

ceci est un projet de création de site web dynamique de vente fromage en ligne.La démarche pour avoir le privilège d'executer à bien le code de ce projet éducatif,
vous aurez bésoin de procéder à la création d'une base de donnée nommé "cheese" en collant le script ci-dessous
dans un environnement de dévéloppement de 'SQL'.Pour ce projet on a utilisé de "Mysql de PHPmyadmin".

CREATE DATABASE cheese ;



--SCRIPT DE CREATION DE BASES DE DONNEES DU PROJET CHEESE


-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 21 juin 2022 à 17:32
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
-- Base de données : `cheese`
--



--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `type` varchar(5) NOT NULL DEFAULT 'user',
  `active` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `pseudo`, `email`, `motdepasse`, `type`, `active`) VALUES
(35, 'manoubwss', 'seglaemm@gmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'admin', 1),
(46, 'ab', 'seglaemm@gmail.com', '75f7313c20144e39edcf57a14733d074aee0c482320d5178ee0ef2f2608c2996', 'user', 1),
(47, 'ac', 'ac@1212', 'cbfad02f9ed2a8d1e08d8f74f5303e9eb93637d47f82ab6f1c15871cf8dd0481', 'admin', 1),
(48, 'ac', 'ac@1212', 'cbfad02f9ed2a8d1e08d8f74f5303e9eb93637d47f82ab6f1c15871cf8dd0481', 'admin', 1),
(49, 'ac', 'ac@1212', 'cbfad02f9ed2a8d1e08d8f74f5303e9eb93637d47f82ab6f1c15871cf8dd0481', 'admin', 1),
(50, 'ac', 'ac@1212', 'cbfad02f9ed2a8d1e08d8f74f5303e9eb93637d47f82ab6f1c15871cf8dd0481', 'admin', 1);

-- 

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` text NOT NULL,
  `active` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `image`, `nom`, `prix`, `description`, `active`) VALUES
(7, 'https://th.bing.com/th/id/OIP.Aw-5K7gic0vswqLlvKwsWgHaHa?pid=ImgDet&rs=1', 'FROMAGE À PÂTÉ PERSILLE', 42, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eius error nihil iste dolorum enim architecto asperiores? Dolore consectetur molestiae, unde, nemo sit ut ab inventore deserunt, expedita harum dolor?', 1),
(8, 'https://img-3.journaldesfemmes.fr/9apapS_oe5kJuo7qLJoSP6B9yKo=/1500x/smart/c4b6a9bbd1434f17b5f02cd2b202ee7d/ccmcms-jdf/31503420.jpg', 'FROMAGE À PÂTÉ MOLLE ET CROÛTE FLEURIE', 75, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, quod. Expedita culpa fugit nam labore dolore alias hic voluptatum repellat animi similique cupiditate beatae, nisi tenetu', 1),
(9, 'https://img-3.journaldesfemmes.fr/g1DU58qWE_t4FDoz3xLhvGwNovo=/1500x/smart/2253585d9e57455487a0534fc18e18f3/ccmcms-jdf/31504034.jpg', 'FROMAGE À PÂTÉ PRESSÉE CUITE', 85, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, quod. Expedita culpa fugit nam labore dolore alias hic voluptatum repellat animi similique cupiditate beatae, nisi tenetur', 1),
(10, 'https://dam.savencia.com/api/wedia/dam/transform/fix635d9eidk9oocw6quhy34mimifj3xnodru6e/800?t=resize&amp;width=800', 'FROMAGE À PÂTÉ FRAICHE', 36, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, quod. Expedita culpa fugit nam labore dolore alias hic voluptatum repellat animi similique cupiditate beatae, nisi tenetur', 1),
(11, 'https://dam.savencia.com/api/wedia/dam/transform/fix635d9eidk6gu74dydn1yoapc64pcktk99zuy/800?t=resize&amp;width=800', 'FROMAGE À PÂTÉ PRESSÉE NON-CUITE', 28, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, quod. Expedita culpa fugit nam labore dolore alias hic voluptatum repellat animi similique cupiditate beatae, nisi tenetur', 1),
(12, 'https://cdn.radiofrance.fr/s3/cruiser-production/2020/12/b32fa5e2-f7ed-4e28-995a-bf9b5d73c9fb/1200x680_livarot_fromage_08.jpg', 'FROMAGE À PÂTÉ MOLLE ET CROÛTE LAVÉE', 73, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, quod. Expedita culpa fugit nam labore dolore alias hic voluptatum repellat animi similique cupiditate beatae, nisi tenetur', 1),
(13, 'https://anchorcaribbean.com/wp-content/uploads/2020/06/cheese-fondue-PDT87XD-scaled.jpg', 'FROMAGE FONDUE', 67, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, quod. Expedita culpa fugit nam labore dolore alias hic voluptatum repellat animi similique cupiditate beatae, nisi tenetur', 1),
(14, 'https://th.bing.com/th/id/OIP.Aw-5K7gic0vswqLlvKwsWgHaHa?pid=ImgDet&rs=1', 'FROMAGE BLANC', 45, 'fromage de qualités supérieur et bon pour la croissance de vos nourrissons de moins de 3ans', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
