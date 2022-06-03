-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 03 juin 2022 à 08:32
-- Version du serveur : 10.5.13-MariaDB-cll-lve
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `u360302984_job_lister`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'business'),
(2, 'technology'),
(3, 'retail'),
(4, 'construction');

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `contact_user` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jobs`
--

INSERT INTO `jobs` (`id`, `category_id`, `company`, `job_title`, `description`, `salary`, `location`, `contact_user`, `contact_email`, `post_date`) VALUES
(1, 1, 'JP Mortage', 'Senior Investor', 'Bampania, is a luxury brand, exclusively made in Italy, that is a single-source for customers searching for timeless yet modern essentials. We are currently seeking a Freelance Senior Investor Relationship Manager.', '90k', 'Milan', 'Magic Bonbon', 'bonbon-magic@gmail.com', '2022-06-01 19:51:20'),
(2, 2, 'JK tech', 'Entry Level Programmer', 'GamerT are looking for Software Engineers to join our studio in Prague to help take BeatS to the next level. This is a key role in building the future of VR games and entertainment.', '50k', 'Prague', 'Tarou', 'tarou@gmail.com', '2022-06-01 19:51:20'),
(6, 3, 'DATA cosmos', 'DATA SCIENTIST', 'The Infrastructure Quantitative Engineering group is responsible for the strategic analysis to support and enable the continued growth critical to Facebook’s infrastructure organization. We are applied quantitative and computational experts using math, st', '90k', 'Bruxelle', 'Dwayne Garick', 'dwayne@gmail.com', '2022-06-02 16:51:17'),
(8, 4, 'JK tech', 'Software Engineer ', 'lorem ipsum bla bla bla lorem updated ', '95k', 'New York city', 'Bernard umoris', 'bernard@gmail.com', '2022-06-02 22:57:46');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
