-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 23 fév. 2021 à 09:38
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vtiger`
--

-- --------------------------------------------------------

--
-- Structure de la table `chirurgien`
--

CREATE TABLE `chirurgien` (
  `id` int(11) NOT NULL,
  `nom_chirurgien` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chirurgien`
--

INSERT INTO `chirurgien` (`id`, `nom_chirurgien`, `prenom`, `adresse`, `email`, `telephone`) VALUES
(1, 'Marinetti', 'Christian', '2 rue de la paix 13008 Marseille', 'marinetti@gmail.com', '0102030405'),
(2, 'Amar', 'test', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `intervention`
--

CREATE TABLE `intervention` (
  `id` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `id_chirurgien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `id_interne` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`id`, `id_interne`, `nom`) VALUES
(1, 'OE5256', 'toto'),
(2, 'TEST', 'john');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `typestock` varchar(255) NOT NULL,
  `fournisseur` varchar(255) NOT NULL,
  `type_prothese` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `numero_lot` varchar(255) NOT NULL,
  `numero_serie` varchar(255) NOT NULL,
  `codebarre` varchar(255) NOT NULL,
  `quantite` int(11) NOT NULL,
  `date_peremption` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `typestock`, `fournisseur`, `type_prothese`, `reference`, `numero_lot`, `numero_serie`, `codebarre`, `quantite`, `date_peremption`) VALUES
(1, 'Permanent', 'Sebbin', 'Mammaire', 'REF-TEST', 'LOT-TEST', 'SERIE-TEST', '3103220034774', 1, '0000-00-00'),
(2, 'Permanent', 'Sebbin', 'Mammaire', 'REF-TEST', 'LOT-TEST', 'SERIE-TEST', '3103220034774', 1, '0000-00-00'),
(3, 'Provisoire', 'Eurosilicone', 'Fesse', '000', '111', '222', 'ERSD-380Q', 1, '2025-01-06'),
(4, 'Provisoire', 'Sebbin', 'Fesse', '000', 'LOT-TEST', 'SERIE-TEST', '3068320124537', 0, '0000-00-00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chirurgien`
--
ALTER TABLE `chirurgien`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `intervention`
--
ALTER TABLE `intervention`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_OpPatient` (`id_patient`),
  ADD KEY `FK_OpProduit` (`id_produit`),
  ADD KEY `FK_OpChirurgien` (`id_chirurgien`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chirurgien`
--
ALTER TABLE `chirurgien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `intervention`
--
ALTER TABLE `intervention`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `intervention`
--
ALTER TABLE `intervention`
  ADD CONSTRAINT `FK_OpChirurgien` FOREIGN KEY (`id_chirurgien`) REFERENCES `chirurgien` (`id`),
  ADD CONSTRAINT `FK_OpPatient` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id`),
  ADD CONSTRAINT `FK_OpProduit` FOREIGN KEY (`id_produit`) REFERENCES `produits` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
