-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 12 Octobre 2018 à 10:56
-- Version du serveur :  5.6.16
-- Version de PHP :  5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `tpweb_sql`
--

-- --------------------------------------------------------

--
-- Structure de la table `ex30`
--

CREATE TABLE IF NOT EXISTS `ex30` (
  `id` varchar(20) NOT NULL,
  `login` varchar(20) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ex30`
--

INSERT INTO `ex30` (`id`, `login`, `mdp`, `mail`) VALUES
('21700215', 'paul', 'repain', 'paul.repain@free.fr'),
('fze', 'zef', 'zef', 'ezf'),
('a', 'a', 'a', 'a'),
('b', 'b', 'b', 'b'),
('c', 'c', 'c', 'c');

-- --------------------------------------------------------

--
-- Structure de la table `fiche_client`
--

CREATE TABLE IF NOT EXISTS `fiche_client` (
  `login` varchar(20) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `ville` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
