-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 11 Septembre 2017 à 11:12
-- Version du serveur :  5.7.17-0ubuntu0.16.04.2
-- Version de PHP :  7.0.16-2+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `classes`
--

INSERT INTO `classes` (`id`, `name`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(12, 'classA'),
(13, 'classB'),
(14, 'classC'),
(15, 'classD'),
(16, 'classE'),
(17, 'classF'),
(20, 'classG');

-- --------------------------------------------------------

--
-- Structure de la table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `job`
--

INSERT INTO `job` (`id`, `title`, `description`, `date_start`, `date_end`, `status`) VALUES
(1, 'Intégrateur', 'testtesttest', '2017-01-01 00:00:00', 'testtest', 'online'),
(2, 'professeur', 'testetest', '2012-01-01 00:00:00', 'qsdqsd', 'online');

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`) VALUES
(2, 'Jean', 'Jean'),
(3, 'Kevin', 'Kevin'),
(4, 'Paul', 'Paul'),
(5, 'Laura', 'Laura'),
(6, 'Jean', 'Jean'),
(7, 'Georges', 'Jean'),
(8, 'Lize', 'Lize'),
(9, 'Louis', 'Louis');

-- --------------------------------------------------------

--
-- Structure de la table `student_class`
--

CREATE TABLE `student_class` (
  `id` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `id_class` int(11) NOT NULL,
  `note` double NOT NULL,
  `date_registration` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `student_class`
--
ALTER TABLE `student_class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_657C600269BE0643` (`id_student`),
  ADD KEY `IDX_657C60023CE58AF` (`id_class`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `student_class`
--
ALTER TABLE `student_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `student_class`
--
ALTER TABLE `student_class`
  ADD CONSTRAINT `FK_657C60023CE58AF` FOREIGN KEY (`id_class`) REFERENCES `classes` (`id`),
  ADD CONSTRAINT `FK_657C600269BE0643` FOREIGN KEY (`id_student`) REFERENCES `students` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
