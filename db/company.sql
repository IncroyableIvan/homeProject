-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 08 Juin 2017 à 21:51
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `company`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `administrator`
--

INSERT INTO `administrator` (`id`, `user`, `password`) VALUES
(1, 'ivan', '1992'),
(2, 'vico', '1990'),
(3, 'juan', '1985');

-- --------------------------------------------------------

--
-- Structure de la table `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `workers`
--

INSERT INTO `workers` (`id`, `name`, `last_name`, `status`, `mail`) VALUES
(1, 'Safia', 'Gobet', 'Chef de projet', 'safia.gobet@dwm7.com'),
(2, 'Francois', 'Sarin', 'CEO', 'francois.sarin@dwm7.com'),
(3, 'Florent', 'Piquepaille', 'Developpeur', 'florent.piquepaille@dwm7.com'),
(4, 'Victor', 'Anton', 'Chef de projet', 'victor.anton@dwm7.com'),
(5, 'Gracien', 'Maloumbi', 'Developpeur', 'gracien.maloumbi@dwm7.com'),
(6, 'Anthony', 'Coste', 'Developpeur', 'anthony.coste@dwm7.com'),
(7, 'Ivan', 'Zanazzi', 'Developpeur', 'ivan.zanazzi@dwm7.com'),
(9, 'Juan Pablo', 'Casas', 'Developpeur', 'jpcasas@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `working_time`
--

CREATE TABLE `working_time` (
  `id_worker` int(11) NOT NULL,
  `jour` date NOT NULL,
  `work_time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `working_time`
--

INSERT INTO `working_time` (`id_worker`, `jour`, `work_time`) VALUES
(7, '2017-06-01', 10),
(6, '2017-06-14', 9),
(4, '2017-06-01', 25),
(8, '2017-06-14', 3);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `working_time`
--
ALTER TABLE `working_time`
  ADD PRIMARY KEY (`id_worker`,`jour`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `working_time`
--
ALTER TABLE `working_time`
  MODIFY `id_worker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
