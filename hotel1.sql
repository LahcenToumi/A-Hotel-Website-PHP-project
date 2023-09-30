-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 10 juin 2022 à 14:46
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hotel1`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambres`
--

CREATE TABLE `chambres` (
  `Numchambre` int(11) NOT NULL,
  `typechambre` varchar(40) NOT NULL,
  `orientation` varchar(40) NOT NULL,
  `descriptions` varchar(1000) NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chambres`
--

INSERT INTO `chambres` (`Numchambre`, `typechambre`, `orientation`, `descriptions`, `images`) VALUES
(1, 'Double Confort', 'WEST', 'Des chambres chaleureuses et accueillantes qui invitent au repos. Elles sont équipées d\'un lit king-size ou de deux lits jumeaux sur demande, d\'un grand bureau, d\'une salle de bain (baignoire ou douch', 'i2.jpg'),
(2, 'Double Classique', 'NORD', 'Des chambres chaleureuses et accueillantes qui invitent au repos. Elles sont équipées d\'un lit king-size ou de deux lits jumeaux sur demande, d\'un grand bureau, d\'une salle de bain (baignoire ou douch', 'i3.jpg'),
(3, 'Double Deluxe', 'NORD', 'Des chambres chaleureuses et accueillantes qui invitent au repos. Elles sont équipées d', 'i2.jpg'),
(4, 'Double Classique', 'EST', 'D\'une superficie d\'environ 30m², la Chambre Double Deluxe peut accueillir jusqu\'à 2 personnes dans un grand lit de qualité (180×200) ou deux lits simples (90x200). Possibilité de rajouter 1 lit bébé, ', 'i1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `login` varchar(100) NOT NULL,
  `NumChambre` int(11) NOT NULL,
  `dateArrive` date NOT NULL,
  `dateSortie` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`login`, `NumChambre`, `dateArrive`, `dateSortie`) VALUES
('J04', 2, '2022-06-01', '2022-06-09'),
('J05', 2, '2022-06-10', '2022-06-13'),
('J04', 1, '2022-06-16', '2022-06-18'),
('TOUMI-LAHCEN', 1, '2022-06-10', '2022-06-26'),
('TOUMI-LAHCEN', 1, '2022-06-17', '2022-06-19'),
('TOUMI-LAHCEN', 1, '2022-06-15', '2022-06-24');

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `typechambre` varchar(40) NOT NULL,
  `tarif` int(11) NOT NULL,
  `Nbpersonnes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`typechambre`, `tarif`, `Nbpersonnes`) VALUES
('Double Classique', 400, 3),
('Double Confort', 700, 1),
('Double Deluxe', 600, 2),
('Double Economique', 300, 4),
('Quadruple Familiale', 2001, 5);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `login` varchar(100) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`login`, `nom`, `prenom`, `email`, `password`, `role`) VALUES
('J04', 'toumi555', 'hassan', 'hassan04@gmail.com', '222', 'admin'),
('J05', 'toumi', 'hassan', 'hassan09@gmail.com', '222', 'user'),
('J06', 'toumi', 'hassan', 'hassan03@gmail.com', '222', 'user'),
('J09', 'toumi', 'hassan', 'hassan0100@mail.com', '222', 'user'),
('TOUMI-LAHCEN', 'toumi', 'Lahcen', 'lahcentoumi24@gmail.com', '234', 'admin'),
('TOUMI-v5', 'Lahcen', 'toumi', 'lahcentoumi50@gmail.com', '234', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chambres`
--
ALTER TABLE `chambres`
  ADD PRIMARY KEY (`Numchambre`),
  ADD KEY `fk_typec` (`typechambre`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD KEY `fk_lg` (`login`) USING BTREE,
  ADD KEY `fk_NmCh` (`NumChambre`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`typechambre`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chambres`
--
ALTER TABLE `chambres`
  MODIFY `Numchambre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chambres`
--
ALTER TABLE `chambres`
  ADD CONSTRAINT `fk_typec` FOREIGN KEY (`typechambre`) REFERENCES `types` (`typechambre`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_typech` FOREIGN KEY (`typechambre`) REFERENCES `types` (`typechambre`);

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `fk_NmCh` FOREIGN KEY (`NumChambre`) REFERENCES `chambres` (`Numchambre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_NumCh` FOREIGN KEY (`NumChambre`) REFERENCES `chambres` (`Numchambre`) ON DELETE NO ACTION,
  ADD CONSTRAINT `fk_lg` FOREIGN KEY (`login`) REFERENCES `utilisateur` (`login`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
