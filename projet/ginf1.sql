-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 05 fév. 2022 à 12:40
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ensa`
--

-- --------------------------------------------------------

--
-- Structure de la table `ginf1`
--

CREATE TABLE `ginf1` (
  `mdp` varchar(20) NOT NULL,
  `codeAp` int(6) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `tele` int(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ginf1`
--

INSERT INTO `ginf1` (`mdp`, `codeAp`, `nom`, `prenom`, `tele`, `email`) VALUES
('ikram,reg', 100999, 'regragi', 'ikram', 677889966, 'ikram.reg@gmail.co'),
('karima,alt', 100777, 'alt', 'karima', 644556677, 'karima.alt@gmail.com'),
('laila,laila', 100123, 'rhoni', 'laila', 644372274, 'laila.rhoni@gmail.co'),
('salma,alami', 100111, 'salma', 'alami', 644558899, 'salma.alami@gmail.co');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ginf1`
--
ALTER TABLE `ginf1`
  ADD PRIMARY KEY (`mdp`,`codeAp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
