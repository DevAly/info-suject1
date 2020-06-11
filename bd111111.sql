-- phpMyAdmin SQL Dump
-- version 3.3.8
-- http://www.phpmyadmin.net
--
-- Serveur: 127.0.0.1
-- Généré le : Jeu 11 Juin 2020 à 22:16
-- Version du serveur: 5.1.52
-- Version de PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `bd111111`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `numet` int(11) NOT NULL,
  `nomet` text NOT NULL,
  `preet` text NOT NULL,
  `emailet` text NOT NULL,
  `sexeet` text NOT NULL,
  `sectionet` text NOT NULL,
  `commentaire` text NOT NULL,
  PRIMARY KEY (`numet`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`numet`, `nomet`, `preet`, `emailet`, `sexeet`, `sectionet`, `commentaire`) VALUES
(1, 'Amine', 'Yaakoubi', 'amine@myemail.com', 'Masculin', 'Sciences Informatique', 'Test'),
(2, 'Mohamed', 'Ali', 'medali@myemail.com', 'Masculin', 'Sciences Expérimentale', 'Test'),
(3, 'Anis', 'Ben mariem', 'benmariemanis@email.com', 'Masculin', 'Maths', 'Test'),
(963741, 'Mariem', 'Bentaleb', 'Mariem@gmail.com', 'Féminin', 'Lettres', 'Test aa'),
(654321, 'Lotfi', 'Yaakoubi', 'sds@.', 'Masculin', 'Sciences Expérimentale', 'tyutyu'),
(987654, 'Malek', 'Yaakoubi', 'maklek@gmail.com', 'Féminin', 'Lettres', 'test de commenaire'),
(789123, '', '', '', '', 'Section', '');
