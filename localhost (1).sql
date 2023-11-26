-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 18 oct. 2023 à 04:22
-- Version du serveur :  8.0.23-0ubuntu0.20.04.1
-- Version de PHP : 7.2.34-10+ubuntu20.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- utf8mb4_0900_ai_ci
-- Base de données : `teleme6060_telemex`
--
CREATE DATABASE IF NOT EXISTS `teleme6060_telemex` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `teleme6060_telemex`;

-- --------------------------------------------------------

--
-- Structure de la table `abonnements`
--

CREATE TABLE `abonnements` (
  `id_abonnement` int NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `marque` varchar(30) NOT NULL,
  `date_deb` varchar(10) NOT NULL,
  `date_fin` varchar(10) NOT NULL,
  `gps` int NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `type_vehicule` varchar(50) NOT NULL,
  `poid_max` int NOT NULL,
  `img_vehicule` varchar(100) NOT NULL,
  `valide` int NOT NULL DEFAULT '1',
  `ID_gps` varchar(25) NOT NULL,
  `nom_chauffeur` varchar(255) NOT NULL,
  `telephone_chauffeur` varchar(255) NOT NULL,
  `cni` varchar(255) NOT NULL,
  `assurance` varchar(255) NOT NULL,
  `carte_grise` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `abonnements`
--

INSERT INTO `abonnements` (`id_abonnement`, `matricule`, `marque`, `date_deb`, `date_fin`, `gps`, `telephone`, `type_vehicule`, `poid_max`, `img_vehicule`, `valide`, `ID_gps`, `nom_chauffeur`, `telephone_chauffeur`, `cni`, `assurance`, `carte_grise`) VALUES
(2, 'MTX001', 'BAJAJ', '', '02/10/2024', 0, '6904651 ', 'Moto', 1, '16861963371.jpg', 0, '859707', 'MOUMBE  STEVE', '670133880', '16811184732.jpg', '16811184733.jpg', '16811184734.jpg'),
(3, 'MTX002', 'BAJAJ', '', '04/10/2024', 0, '6904651 ', 'Moto', 1, '16895945921.jpg', 0, '859706', 'YOHOU DJIKEM ', '651248667', '16831944622.jpg', '16831944623.jpg', '16831944624.jpg'),
(4, 'MTX004', 'BAJAJ', '', '09/10/2024', 0, '6904651 ', 'Moto', 1, '16831948251.jpg', 0, '859704', 'MELI Louisdin', '654547111', '16831956954.jpg', '16831948253.jpg', '16831956952.jpg'),
(5, 'MTX003', 'BAJAJ', '', '23/09/2024', 0, '6904651 ', 'Moto', 1, '16831952291.jpg', 1, '859703', 'Pas disponible ', 'Sans numéro ', '16831952292.jpg', '16831952293.jpg', '16831952294.jpg'),
(6, 'MTX005', 'BAJAJ', '', '23/09/2024', 0, '6904651 ', 'Moto', 1, '16831990691.jpg', 1, '859705', 'Sylvain ', '694126842', '16831990692.jpg', '16831990693.jpg', '16831990694.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `chargement`
--

CREATE TABLE `chargement` (
  `id_charg` int NOT NULL,
  `marchandise` varchar(50) NOT NULL,
  `emballage` varchar(50) NOT NULL,
  `mode_t` varchar(50) NOT NULL,
  `valeurm` varchar(50) NOT NULL,
  `poid` varchar(50) NOT NULL,
  `nb_colis` int NOT NULL,
  `volume` varchar(50) NOT NULL,
  `type_vehicule` varchar(50) NOT NULL,
  `details_march` varchar(100) NOT NULL,
  `img_march` varchar(50) NOT NULL,
  `pays_charg` varchar(50) NOT NULL,
  `ville_charg` varchar(50) NOT NULL,
  `date_charg` text NOT NULL,
  `adresse_charg` varchar(100) NOT NULL,
  `pays_liv` varchar(50) NOT NULL,
  `ville_liv` varchar(50) NOT NULL,
  `date_liv` text NOT NULL,
  `adresse_liv` varchar(100) NOT NULL,
  `tol_charg` varchar(10) NOT NULL,
  `jr_retard2` varchar(11) NOT NULL,
  `tol_liv` varchar(10) NOT NULL,
  `jr_retard` varchar(11) NOT NULL,
  `contact_name` varchar(20) NOT NULL,
  `contact_phone` varchar(20) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `prix_prop` varchar(20) NOT NULL,
  `nb_vehicules` int NOT NULL DEFAULT '1',
  `status` tinyint NOT NULL DEFAULT '0',
  `avance` int NOT NULL,
  `methodepayement` varchar(255) NOT NULL,
  `autre_info` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `longitude` float DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude1` float DEFAULT NULL,
  `latitude1` float DEFAULT NULL,
  `name_expediteur` text,
  `telephone_expediteur` text,
  `priceestimated` float DEFAULT NULL,
  `distance` float DEFAULT NULL,
  `statutenvoi` int NOT NULL DEFAULT '0',
  `rate` int DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chargement`
--

INSERT INTO `chargement` (`id_charg`, `marchandise`, `emballage`, `mode_t`, `valeurm`, `poid`, `nb_colis`, `volume`, `type_vehicule`, `details_march`, `img_march`, `pays_charg`, `ville_charg`, `date_charg`, `adresse_charg`, `pays_liv`, `ville_liv`, `date_liv`, `adresse_liv`, `tol_charg`, `jr_retard2`, `tol_liv`, `jr_retard`, `contact_name`, `contact_phone`, `telephone`, `prix_prop`, `nb_vehicules`, `status`, `avance`, `methodepayement`, `autre_info`, `created_at`, `longitude`, `latitude`, `longitude1`, `latitude1`, `name_expediteur`, `telephone_expediteur`, `priceestimated`, `distance`, `statutenvoi`, `rate`) VALUES
(3, 'Vêtements', '', '', ' ', '', 0, '', 'Moto', 'T-shirts ', '', 'Cameroun', 'Bernabé Cameroun', '25/09/2023 14:05:00', '', 'Cameroun', 'ndogbong', '25/09/2023 00:22:00', '', '0', '0', '0', '0', 'Alpha Bio', '674115319', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-25 13:53:17', 9.70131, 4.05072, 9.76787, 4.05106, 'Client ', '699927225', 1500, 0, 2, 4),
(2, 'repas', '', '', ' ', '', 0, '', 'Moto', 'Respecter l\'heure de ramassage ', '', 'Cameroun', '', '25/09/2023 11:00:00', '', 'Cameroun', 'Le Glacier Moderne Bonamoussadi', '25/09/2023 00:03:00', '', '0', '0', '0', '0', 'Client ', '696770483', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-25 10:34:08', 9.74284, 4.08918, 9.73567, 4.08765, 'Crêperie KIRIKOU ', '674510241', 500, 0, 2, 4),
(4, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Expedition bracelet.', '', 'Cameroun', 'Makepe Missoke', '25/09/2023 14:30:00', '', 'Cameroun', 'United Express', '25/09/2023 00:18:00', '', '0', '0', '0', '0', 'United ', '1', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-25 14:17:27', 9.73825, 4.06055, 9.69507, 4.05036, 'MAB Shop', '696495798', 1000, 0, 2, 4),
(6, 'Vêtements', '', '', ' ', '', 0, '', 'Moto', 'RAS', '', 'Cameroun', 'Bessengue', '25/09/2023 14:57:00', '', 'Cameroun', 'ACEP Bonamoussadi', '25/09/2023 00:16:00', '', '0', '0', '0', '0', 'Client', '695903995', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-25 14:53:38', 9.71142, 4.04733, 9.74094, 4.08944, 'Best Office', '699171002', 1000, 0, 2, 4),
(7, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Bracelets ', '', 'Cameroun', 'Makepe Missoke', '25/09/2023 15:01:00', '', 'Cameroun', 'LA CAVE PK13', '25/09/2023 00:25:00', '', '0', '0', '0', '0', 'Client', '696641100', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-25 15:28:42', 9.73825, 4.06055, 9.7927, 4.07449, 'MAB shop', '696495798', 1000, 0, 2, 4),
(26, 'repas', '', '', ' ', '', 0, '', 'Moto', 'Repas', '', 'Cameroun', 'Pizza dorée', '27/09/2023 09:25:00', '', 'Cameroun', 'IUGET (ISTTI), Douala', '27/09/2023 00:04:00', '', '0', '0', '0', '0', 'Client ', '693322158', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-27 09:40:31', 9.74391, 4.09154, 9.73447, 4.08452, 'Pizza dorée ', '690748357', 500, 0, 2, 4),
(9, 'repas', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'TotalEnergies MAKEPE', '26/09/2023 16:00:00', '', 'Cameroun', 'ARI', '26/09/2023 00:45:00', '', '0', '0', '0', '0', 'Client ', '691184356', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-26 09:45:51', 9.75097, 4.07676, 9.81322, 3.97077, 'Mbella Market Foods ', '675169672', 1500, 0, 2, 5),
(10, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Denver, Douala, Cameroun', '26/09/2023 11:05:00', '', 'Cameroun', 'Kotto immeuble', '26/09/2023 00:07:00', '', '0', '0', '0', '0', 'Client ', '672090907', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-26 11:40:24', 9.73143, 4.08311, 9.75269, 4.09147, 'Cika collection ', '697567246', 500, 0, 2, 4),
(11, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', 'Recouvrement 12000F', '', 'Cameroun', 'Denver, Douala, Cameroun', '26/09/2023 11:55:00', '', 'Cameroun', 'Makèpe bloc L', '26/09/2023 00:04:00', '', '0', '0', '0', '0', 'Client ', '696438518', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-26 11:48:10', 9.73142, 4.08311, 9.74824, 4.08447, 'Client ', '697567246', 1000, 0, 2, 4),
(12, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', 'RAS', '', 'Cameroun', 'Denver, Douala, Cameroun', '26/09/2023 12:00:00', '', 'Cameroun', 'ndogbong', '26/09/2023 00:18:00', '', '0', '0', '0', '0', 'Client ', '676060643', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-26 11:52:57', 9.73143, 4.08311, 9.76787, 4.05106, 'Cika ', '697567246', 1000, 0, 2, 4),
(13, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', 'RAS', '', 'Cameroun', 'Denver, Douala, Cameroun', '26/09/2023 12:00:00', '', 'Cameroun', 'Rond-Point Deido', '26/09/2023 00:08:00', '', '0', '0', '0', '0', 'Client ', '675453941', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-26 11:58:07', 9.73143, 4.08311, 9.70687, 4.0642, 'CiKa', '697567246', 500, 0, 2, 4),
(14, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', 'RAS', '', 'Cameroun', 'Denver, Douala, Cameroun', '26/09/2023 12:00:00', '', 'Cameroun', 'Boulangerie Coaf', '26/09/2023 00:08:00', '', '0', '0', '0', '0', 'Client ', '698980768', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-26 11:59:42', 9.73143, 4.08311, 9.71266, 4.06029, 'CiKa', '697567246', 500, 0, 2, 4),
(15, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', 'RAS', '', 'Cameroun', 'Denver, Douala, Cameroun', '26/09/2023 12:00:00', '', 'Cameroun', 'Poste Centrale de Bonanjo', '26/09/2023 00:17:00', '', '0', '0', '0', '0', 'Client ', '697602493', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-26 12:01:34', 9.73143, 4.08311, 9.68523, 4.04306, 'CiKa ', '697567246', 1500, 0, 2, 4),
(16, 'repas', '', '', ' ', '', 0, '', 'Moto', 'RAS', '', 'Cameroun', 'Institut Universitaire de la Côte - IUC', '26/09/2023 12:15:00', '', 'Cameroun', 'College De La Salle', '26/09/2023 00:18:00', '', '0', '0', '0', '0', 'Client ', '696819080', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-26 12:08:18', 9.78032, 4.0831, 9.72601, 4.07936, 'TACOS\' ABC ', '656726476', 1000, 0, 2, 4),
(17, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'ndogbong', '26/09/2023 12:55:00', '', 'Cameroun', 'Touristique Voyage VIP (Ancien Centrale voyage, Do', '26/09/2023 00:23:00', '', '0', '0', '0', '0', 'Client ', '675838720', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-26 12:49:12', 9.76787, 4.05106, 9.70145, 4.04379, 'Alpha bio', '674115319', 1000, 0, 2, 4),
(18, 'Vêtements', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter : 8000F', '', 'Cameroun', 'Hôtel Lewat', '26/09/2023 14:55:00', '', 'Cameroun', 'Ecole Publique de bonamoussadi, Douala', '26/09/2023 00:14:00', '', '0', '0', '0', '0', 'Mme Georgette ', '650114821', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-26 14:49:01', 9.7088, 4.05743, 9.74081, 4.09433, 'Best Office ', '699171002', 1000, 0, 2, 4),
(19, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Bracelets ', '', 'Cameroun', 'Makepe Missoke', '26/09/2023 15:30:00', '', 'Cameroun', 'Yassa', '26/09/2023 00:35:00', '', '0', '0', '0', '0', 'Client ', '658859930', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-26 14:53:25', 9.73825, 4.06055, 9.81015, 3.99787, 'Client ', '696495798', 2000, 0, 2, 5),
(20, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter 5000F+ livraison ', '', 'Cameroun', 'Makepe Missoke', '26/09/2023 15:30:00', '', 'Cameroun', 'IPH ( Institut Professionnel D\'hôtellerie)', '26/09/2023 00:09:00', '', '0', '0', '0', '0', 'Client ', '671658208', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-26 14:59:27', 9.73825, 4.06055, 9.74806, 4.0506, 'MAB Shop ', '696495798', 1000, 0, 2, 4),
(21, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter 5000F + livraison ', '', 'Cameroun', 'Makepe Missoke', '26/09/2023 15:30:00', '', 'Cameroun', 'Hopital General de Douala', '26/09/2023 00:21:00', '', '0', '0', '0', '0', 'Client ', '693335617', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-26 15:05:53', 9.73825, 4.06055, 9.75881, 4.0644, 'MAB SHOP ', '696495798', 1000, 0, 2, 4),
(22, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', 'RAS', '', 'Cameroun', 'Denver, Douala, Cameroun', '26/09/2023 15:05:00', '', 'Cameroun', 'Ndokoti', '26/09/2023 00:15:00', '', '0', '0', '0', '0', 'Client ', '656003534', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-26 15:12:03', 9.73143, 4.0831, 9.74243, 4.04349, 'Cika ', '697567246', 1000, 0, 2, 4),
(23, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter 30500F', '', 'Cameroun', 'B004 Immeuble St Eli Rond point Maetur, Douala, Ca', '26/09/2023 15:06:00', '', 'Cameroun', 'PK 12', '26/09/2023 00:17:00', '', '0', '0', '0', '0', 'Client ', '697165111', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-26 15:16:38', 9.73424, 4.08409, 9.76787, 4.05106, 'CiKa ', '697567246', 1000, 0, 2, 4),
(24, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', 'RAS', '', 'Cameroun', 'Denver, Douala, Cameroun', '26/09/2023 15:30:00', '', 'Cameroun', 'Pk10', '26/09/2023 00:34:00', '', '0', '0', '0', '0', 'Client ', '690174481', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-26 15:50:09', 9.73143, 4.0831, 9.79939, 4.03292, 'CiKa', '697567246', 1000, 0, 2, 4),
(27, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'RAS', '', 'Cameroun', 'ndogbong', '27/09/2023 10:00:00', '', 'Cameroun', 'Angel raphael', '27/09/2023 00:24:00', '', '0', '0', '0', '0', 'Client ', '696529065', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-27 09:44:41', 9.76787, 4.05106, 9.76996, 4.09453, 'Alpha bio ', '674115319', 1000, 0, 2, 4),
(28, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'RAS', '', 'Cameroun', 'ndogbong', '27/09/2023 10:00:00', '', 'Cameroun', 'OPIOM Lounge Bonamoussadi', '27/09/2023 00:18:00', '', '0', '0', '0', '0', 'Client ', '657611436', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-27 09:46:18', 9.76787, 4.05106, 9.74143, 4.09222, 'Alpha Bio ', '674115319', 1000, 0, 2, 4),
(29, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'RAS', '', 'Cameroun', 'ndogbong', '27/09/2023 10:30:00', '', 'Cameroun', 'DAUPHINE 2, Douala', '27/09/2023 00:04:00', '', '0', '0', '0', '0', 'Client ', '697755870', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-27 10:28:40', 9.76787, 4.05106, 9.76187, 4.04982, 'Alpha Bio ', '674115319', 1000, 0, 2, 4),
(30, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'RAS', '', 'Cameroun', 'Marché bonamoussadi', '27/09/2023 11:30:00', '', 'Cameroun', 'Logpom', '27/09/2023 00:12:00', '', '0', '0', '0', '0', 'Client ', '657789229', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-27 11:25:55', 9.7428, 4.08899, 9.77066, 4.0838, 'KINKY NATURE', '679739705', 1000, 0, 2, 4),
(31, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'RAS', '', 'Cameroun', 'Marché bonamoussadi', '27/09/2023 11:30:00', '', 'Cameroun', 'Clinique Saint Georgette', '27/09/2023 00:17:00', '', '0', '0', '0', '0', 'Client ', '699032662', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-27 11:27:39', 9.7428, 4.08899, 9.70052, 4.04613, 'KINKY NATURE ', '679739705', 1000, 0, 2, 4),
(32, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Récupérer 30.000F chez le destinataire ', '', 'Cameroun', 'Denver, Douala, Cameroun', '27/09/2023 13:30:00', '', 'Cameroun', 'COLLÈGE LA CONQUÊTE', '27/09/2023 00:09:00', '', '0', '0', '0', '0', 'Client ', '652557460', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-27 12:53:10', 9.73143, 4.08311, 9.75569, 4.06843, 'CiKa ', '697567246', 1000, 0, 2, 4),
(34, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter : 9000 + frais de livraison ', '', 'Cameroun', 'Makepe Missoke', '27/09/2023 15:59:00', '', 'Cameroun', 'Douala Yassa Maetur', '27/09/2023 00:35:00', '', '0', '0', '0', '0', 'Client ', '697913955', '6904651 ', ' FCFA', 0, 0, 0, 'Espèce', '', '2023-09-27 14:59:22', 9.73825, 4.06055, 9.79691, 4.01575, 'MAB Shop ', '696495798', 2000, 0, 2, 4),
(35, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'RAS', '', 'Cameroun', 'ndogbong', '27/09/2023 15:15:00', '', 'Cameroun', 'Bonassama', '27/09/2023 00:26:00', '', '0', '0', '0', '0', 'Client ', '675900068', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-27 15:05:44', 9.76787, 4.05106, 9.68496, 4.07412, 'Alpha Bio ', '674115319', 1500, 0, 2, 4),
(36, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'RAS', '', 'Cameroun', 'ndogbong', '27/09/2023 15:30:00', '', 'Cameroun', 'ISTAMA Douala Sable Bonamoussadi', '27/09/2023 00:19:00', '', '0', '0', '0', '0', 'Client ', '694592184', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-27 15:12:06', 9.76787, 4.05106, 9.72929, 4.08179, 'Alpha Bio ', '674115319', 1250, 0, 2, 4),
(37, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'RAS', '', 'Cameroun', 'Makepe Missoke', '27/09/2023 19:30:00', '', 'Cameroun', 'Noblesse Voyage', '27/09/2023 00:20:00', '', '0', '0', '0', '0', 'Client ', '677666791', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-27 20:54:15', 9.73825, 4.06055, 9.73402, 4.02536, 'MAB SHOP ', '696495798', 1500, 0, 2, 4),
(38, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'ndogbong', '28/09/2023 12:10:00', '', 'Cameroun', 'Bonapriso', '28/09/2023 00:25:00', '', '0', '0', '0', '0', 'Client ', '696361995', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-28 12:06:50', 9.76787, 4.05106, 9.70028, 4.02478, 'Alpha bio', '674115319', 1500, 0, 2, 4),
(39, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Bonamoussadi', '28/09/2023 12:00:00', '', 'Cameroun', 'PK 12', '28/09/2023 00:18:00', '', '0', '0', '0', '0', 'Client ', '657140938', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-28 12:13:54', 9.74278, 4.08919, 9.76787, 4.05106, 'Kinky', '679739705', 1500, 0, 2, 4),
(40, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Expéditions ', '', 'Cameroun', 'Bessengue', '28/09/2023 15:30:00', '', 'Cameroun', 'Rond-Point Deido', '28/09/2023 00:08:00', '', '0', '0', '0', '0', 'Client ', '677966780', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-28 15:29:44', 9.71142, 4.04733, 9.70687, 4.0642, 'Glam\'s Chic', '676067275', 1000, 0, 2, 4),
(53, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Carrefour elfes Douala Cameroun', '02/10/2023 10:30:00', '', 'Cameroun', 'Logpom Basson domicile arontiof', '02/10/2023 00:26:00', '', '0', '0', '0', '0', 'Client', '695930145', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-02 10:04:23', 9.73221, 4.01186, 9.76677, 4.07875, 'Cheresty Kitchen', '651934680', 2000, 0, 2, 4),
(43, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '02 Expéditions ', '', 'Cameroun', 'Makepe Missoke', '29/09/2023 09:30:00', '', 'Cameroun', 'United Express', '29/09/2023 00:18:00', '', '0', '0', '0', '0', 'Client ', '656003167', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-29 09:34:24', 9.73825, 4.06055, 9.69507, 4.05036, 'MAB SHOP ', '696495798', 1000, 0, 2, 4),
(44, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter\r\n23800+1000', '', 'Cameroun', 'Petit terrain de bonamoussadi', '29/09/2023 17:31:00', '', 'Cameroun', 'Bessengue', '29/09/2023 00:17:00', '', '0', '0', '0', '0', 'Client ', '698049003', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-29 17:15:18', 9.73834, 4.08578, 9.71142, 4.04733, 'KESSY COSMETICS ', '653310130', 1000, 0, 2, 4),
(45, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter 47000F', '', 'Cameroun', 'Bessengue', '29/09/2023 17:30:00', '', 'Cameroun', 'Makèpe bloc L', '29/09/2023 00:17:00', '', '0', '0', '0', '0', 'Client ', '698334879', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-29 17:18:39', 9.71142, 4.04733, 9.74824, 4.08447, 'Glam\'s Chic ', '676067275', 1000, 0, 2, 4),
(46, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Parfum ', '', 'Cameroun', 'Bessengue', '30/09/2023 19:30:00', '', 'Cameroun', 'Centrale thermique de Yassa-Dibamba', '30/09/2023 00:37:00', '', '0', '0', '0', '0', 'Client ', '690885574', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-30 19:53:25', 9.71142, 4.04733, 9.81949, 3.99553, 'Glam\'s Chic ', '676067275', 2000, 0, 2, 4),
(47, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'ndogbong', '30/09/2023 19:55:00', '', 'Cameroun', 'Nyalla Chateau', '30/09/2023 00:12:00', '', '0', '0', '0', '0', 'Client ', '699102487', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-30 19:56:05', 9.76787, 4.05106, 9.78812, 4.03255, 'Alpha Bio ', '674115319', 1000, 0, 2, 4),
(48, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Makèpe bloc L', '30/09/2023 19:58:00', '', 'Cameroun', 'HAPPY SPORT NDOGBONG', '30/09/2023 00:09:00', '', '0', '0', '0', '0', 'Client ', '694972967', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-30 19:59:18', 9.74824, 4.08447, 9.74541, 4.06003, 'MBELLA MARKET ', '675169672', 1300, 0, 2, 4),
(49, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Makepe Missoke', '30/09/2023 20:30:00', '', 'Cameroun', 'Bonapriso', '30/09/2023 00:22:00', '', '0', '0', '0', '0', 'Client ', '658859930', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-30 20:01:54', 9.73825, 4.06055, 9.70028, 4.02478, 'MAB SHOP ', '696495798', 1000, 0, 2, 4),
(50, 'repas', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Institut Universitaire de la Côte - IUC', '30/09/2023 20:30:00', '', 'Cameroun', 'Eto’o Crossroad', '30/09/2023 00:34:00', '', '0', '0', '0', '0', 'Client ', '696541578', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-30 20:12:48', 9.78032, 4.0831, 9.69714, 4.03263, 'ABC\'S TACOS', '656726476', 1500, 0, 2, 4),
(51, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Yassa', '30/09/2023 20:30:00', '', 'Cameroun', 'Bali', '30/09/2023 00:33:00', '', '0', '0', '0', '0', 'Client ', '693501914', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-09-30 20:21:10', 9.81015, 3.99787, 9.69401, 4.03808, 'Glam\'s Chic ', '676067275', 2000, 0, 2, 4),
(52, 'Meubles', '', '', ' ', '', 0, '', 'Tricycle', 'Salon en cuir  6 places', '16962160561.jpg', 'Cameroun', 'Mahima super Marche Bonamoussadi', '02/10/2023 08:29:00', '', 'Cameroun', 'Logpom', '02/10/2023 00:13:00', '', '0', '0', '0', '0', 'Eric', '690465196', '656003167', ' FCFA', 0, 0, 5000, 'Espèce', '', '2023-10-02 04:07:36', 9.73659, 4.09443, 9.77066, 4.0838, 'FUNGA ', '656003167', 950, 0, 0, NULL),
(54, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Mahima super Marche Bonamoussadi', '02/10/2023 12:15:00', '', 'Cameroun', 'General Express Voyages Bepanda', '02/10/2023 00:09:00', '', '0', '0', '0', '0', 'Client ', '677407945', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-02 12:18:04', 9.73659, 4.09443, 9.72614, 4.07062, 'LA TERMA', '691012239', 1000, 0, 2, 4),
(55, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'À NDogbong', '02/10/2023 12:58:00', '', 'Cameroun', 'Eco Pressing Makepe', '02/10/2023 00:11:00', '', '0', '0', '0', '0', 'Client', '697776597', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-02 12:59:17', 9.75388, 4.05654, 9.74536, 4.07425, 'Alpha Bio ', '674115319', 1000, 0, 2, 4),
(56, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'ndogbong', '02/10/2023 12:59:00', '', 'Cameroun', 'KMC ANGE RAPHAËL', '02/10/2023 00:12:00', '', '0', '0', '0', '0', 'Client ', '696529065', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-02 13:00:38', 9.76787, 4.05106, 9.73706, 4.05292, 'Alpha Bio ', '674115319', 1000, 0, 2, 4),
(57, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Marché bonamoussadi', '02/10/2023 12:30:00', '', 'Cameroun', 'Cite des Palmiers', '02/10/2023 00:17:00', '', '0', '0', '0', '0', 'Client ', '696016875', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-02 13:17:09', 9.7428, 4.08899, 9.76369, 4.05237, 'KINKY NATURE ', '679739705', 1000, 0, 2, 4),
(58, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'ndogbong', '02/10/2023 15:30:00', '', 'Cameroun', 'Hôpital Laquintinie', '02/10/2023 00:22:00', '', '0', '0', '0', '0', 'Client ', '671325915', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-02 15:26:22', 9.76787, 4.05106, 9.70341, 4.04837, 'Alpha Bio ', '674115319', 1000, 0, 2, 4),
(59, 'Vêtements', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter : 8000F', '', 'Cameroun', 'Hôtel le Wat', '02/10/2023 16:00:00', '', 'Cameroun', 'Ecole BRIGUINY', '02/10/2023 00:22:00', '', '0', '0', '0', '0', 'Client ', '656961337', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-02 15:33:53', 9.76787, 4.05106, 9.7761, 4.09263, 'Best Office ', '699171002', 1000, 0, 2, 4),
(60, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'ndogbong', '03/10/2023 13:30:00', '', 'Cameroun', 'Elf', '03/10/2023 00:19:00', '', '0', '0', '0', '0', 'Client ', '693327595', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-03 12:33:04', 9.76787, 4.05106, 9.73224, 4.01156, 'Alpha Bio ', '674115319', 1000, 0, 2, 4),
(61, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'ndogbong', '04/10/2023 13:30:00', '', 'Cameroun', 'Stade Omnisports De Bépanda, Douala', '04/10/2023 00:17:00', '', '0', '0', '0', '0', 'Client ', '695521442', '6904651 ', ' FCFA', 0, 0, 0, 'Espèce', '', '2023-10-03 12:34:36', 9.76787, 4.05106, 9.7182, 4.05611, 'Alpha Bio ', '674115319', 1000, 0, 2, 4),
(62, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter : 16000F ', '', 'Cameroun', 'Bonapriso', '04/10/2023 14:00:00', '', 'Cameroun', 'Bonabéri', '04/10/2023 00:29:00', '', '0', '0', '0', '0', 'Client ', '681851645', '6904651 ', ' FCFA', 0, 0, 0, 'Espèce', '', '2023-10-03 12:42:16', 9.70028, 4.02478, 9.65084, 4.07769, 'Cika', '697567246', 1000, 14.13, 2, 4),
(63, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Hôtel de L\'air', '04/10/2023 14:00:00', '', 'Cameroun', 'complexe chimique camerounais ccc', '04/10/2023 00:12:00', '', '0', '0', '0', '0', 'Client', '690561295', '6904651 ', ' FCFA', 0, 0, 0, 'Espèce', '', '2023-10-03 12:51:49', 9.7014, 4.01956, 9.74114, 4.03593, 'CiKa ', '697567246', 1000, 0, 2, 4),
(64, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', 'EXPÉDITION', '', 'Cameroun', 'Hôtel de L\'air', '03/10/2023 14:00:00', '', 'Cameroun', '', '03/10/2023 00:25:00', '', '0', '0', '0', '0', 'Client ', '699239520', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-03 12:54:23', 9.7014, 4.01956, 9.74284, 4.08918, 'CiKa ', '697567246', 1000, 0, 2, 4),
(65, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Expédition ', '', 'Cameroun', 'Yassa', '03/10/2023 14:00:00', '', 'Cameroun', 'Rond-Point Deido', '03/10/2023 00:40:00', '', '0', '0', '0', '0', 'Client ', '677035671', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-03 13:37:20', 9.81015, 3.99787, 9.70687, 4.0642, 'Glam\'s Chic ', '676067275', 2000, 0, 2, 4),
(66, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter : 9900', '', 'Cameroun', 'Petit terrain de bonamoussadi', '04/10/2023 09:20:00', '', 'Cameroun', 'Usine Tampico', '04/10/2023 00:19:00', '', '0', '0', '0', '0', 'Client ', '656846311', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-04 08:57:40', 9.73834, 4.08578, 9.77446, 4.09787, 'KESSY COSMETICS ', '653310130', 1000, 0, 2, 4),
(67, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Yassa', '04/10/2023 09:10:00', '', 'Cameroun', 'Ancienne route', '04/10/2023 00:46:00', '', '0', '0', '0', '0', 'Client ', '670387766', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-04 09:15:26', 9.81015, 3.99787, 9.67119, 4.07854, 'Glam\'s Chic ', '676067275', 2500, 0, 2, 4),
(68, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter : 9500F', '', 'Cameroun', 'Marché bonamoussadi', '04/10/2023 09:30:00', '', 'Cameroun', 'Cite des Palmiers', '04/10/2023 00:17:00', '', '0', '0', '0', '0', 'Client', '691852376', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-04 09:21:37', 9.7428, 4.08899, 9.76369, 4.05237, 'KINKY NATURE ', '679739705', 1000, 0, 2, 4),
(69, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Hôtel de L\'air', '04/10/2023 11:00:00', '', 'Cameroun', 'Marché bonamoussadi', '04/10/2023 00:25:00', '', '0', '0', '0', '0', 'Client ', '690681381', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-04 11:01:35', 9.7014, 4.01956, 9.7428, 4.08899, 'Cika', '697567246', 1000, 0, 2, 4),
(70, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'ndogbong', '05/10/2023 09:40:00', '', 'Cameroun', 'Parcours Vita', '05/10/2023 00:16:00', '', '0', '0', '0', '0', 'Client ', '676584297', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-05 09:25:24', 9.76787, 4.05106, 9.74253, 4.08079, 'Alpha Bio ', '674115319', 1000, 0, 2, 4),
(71, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Denver, Douala, Cameroun', '05/10/2023 10:00:00', '', 'Cameroun', 'Ecole Publique de bonamoussadi, Douala', '05/10/2023 00:04:00', '', '0', '0', '0', '0', 'Client ', '690404112', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-05 09:55:04', 9.73143, 4.08319, 9.74081, 4.09433, 'CiKa ', '697567246', 1000, 0, 2, 4),
(72, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'ndogbong', '05/10/2023 14:00:00', '', 'Cameroun', 'Bali', '05/10/2023 00:25:00', '', '0', '0', '0', '0', 'Client ', '652878801', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-05 13:44:36', 9.76787, 4.05106, 9.69401, 4.03808, 'Alpha Bio ', '674115319', 1500, 0, 2, 4),
(73, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Ngangue', '05/10/2023 16:00:00', '', 'Cameroun', 'Hopital General de Douala', '05/10/2023 00:31:00', '', '0', '0', '0', '0', 'Client ', '697602493', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-05 16:01:14', 9.71073, 4.02276, 9.75881, 4.0644, 'CiKa ', '697567246', 1000, 0, 2, 4),
(74, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Denver, Douala, Cameroun', '05/10/2023 17:00:00', '', 'Cameroun', 'depot de planche', '05/10/2023 00:15:00', '', '0', '0', '0', '0', 'Client ', '679596969', '6904651 ', ' FCFA', 0, 0, 0, 'Espèce', '', '2023-10-05 17:01:47', 9.73144, 4.08319, 9.74242, 4.04347, 'Cika', '697564672', 1000, 7.835, 2, 4),
(75, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Kotto-Bloc', '06/10/2023 12:40:00', '', 'Cameroun', 'Bonapriso', '06/10/2023 00:35:00', '', '0', '0', '0', '0', 'Client ', '697168898', '6904651 ', ' FCFA', 0, 0, 0, 'Espèce', '', '2023-10-06 12:43:13', 9.74975, 4.09541, 9.70028, 4.02478, 'My ROOTS', '694104793', 1000, 0, 2, 4),
(76, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'ndogbong', '06/10/2023 15:30:00', '', 'Cameroun', 'Bonapriso', '06/10/2023 00:25:00', '', '0', '0', '0', '0', 'Client ', '678943644', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-06 13:57:28', 9.76787, 4.05106, 9.70028, 4.02478, 'Alpha Bio ', '674115319', 1500, 0, 2, 4),
(77, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Yassa', '06/10/2023 14:30:00', '', 'Cameroun', 'Kotto badem_badem', '06/10/2023 00:59:00', '', '0', '0', '0', '0', 'Client ', '694909276', '6904651 ', ' FCFA', 0, 0, 0, 'Espèce', '', '2023-10-06 14:01:00', 9.81324, 3.97078, 9.76178, 4.1012, 'Glam\'s Chic ', '676067275', 2000, 0, 2, 4),
(78, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Denver, Douala, Cameroun', '06/10/2023 14:50:00', '', 'Cameroun', 'Bonabéri', '06/10/2023 00:26:00', '', '0', '0', '0', '0', 'Client ', '681851645', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-06 14:44:25', 9.73144, 4.08319, 9.65084, 4.07769, 'CiKa ', '697567246', 1500, 0, 2, 4),
(79, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'ndogbong', '06/10/2023 16:00:00', '', 'Cameroun', 'Ndokoti', '06/10/2023 00:14:00', '', '0', '0', '0', '0', 'Client ', '676067275', '6904651 ', ' FCFA', 0, 0, 0, 'Espèce', '', '2023-10-06 15:25:12', 9.76787, 4.05106, 9.74243, 4.04349, 'Alpha Bio ', '674115319', 1000, 0, 2, 4),
(80, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'ndogbong', '06/10/2023 15:30:00', '', 'Cameroun', 'Parcours Vita', '06/10/2023 00:16:00', '', '0', '0', '0', '0', 'Client ', '699590312', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-06 15:31:15', 9.76787, 4.05106, 9.74253, 4.08079, 'Alpha Bio ', '674115319', 1000, 0, 2, 4),
(81, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'ndogbong', '06/10/2023 16:00:00', '', 'Cameroun', 'Grand moulin de Deïdo', '06/10/2023 00:19:00', '', '0', '0', '0', '0', 'Client ', '690449865', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-06 15:33:58', 9.76787, 4.05106, 9.71633, 4.06726, 'Alpha Bio ', '674115319', 1000, 0, 2, 4),
(82, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Denver, Douala, Cameroun', '06/10/2023 16:30:00', '', 'Cameroun', 'Lendi', '06/10/2023 00:35:00', '', '0', '0', '0', '0', 'Client ', '676316974', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-06 15:42:05', 9.73144, 4.08319, 9.7846, 4.11643, 'CiKa ', '697567246', 1500, 0, 2, 4),
(83, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter : 10500F', '', 'Cameroun', 'Marché bonamoussadi', '07/10/2023 12:50:00', '', 'Cameroun', 'École Publique de la Cité-sic, Douala', '07/10/2023 00:19:00', '', '0', '0', '0', '0', 'Client', '699773026', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-07 12:43:07', 9.7428, 4.08899, 9.7304, 4.05111, 'KINKY NATURE ', '679739705', 1000, 0, 2, 4),
(84, 'Vêtements', '', '', ' ', '', 0, '', 'Moto', 'recouvrement 12000 F', '16966978891.jpeg', 'Cameroun', 'Santa Lucia Bonamoussadi', '07/10/2023 18:00:00', '', 'Cameroun', 'Akwa', '07/10/2023 00:18:00', '', '0', '0', '0', '0', 'jovelle', '691194990', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-07 17:58:09', 9.74641, 4.09223, 9.69958, 4.05314, 'yannick', '690465196', 1400, 0, 2, 2),
(85, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter : 28.000F', '', 'Cameroun', 'Yassa', '09/10/2023 09:20:00', '', 'Cameroun', 'Makepe', '09/10/2023 00:00:00', '', '0', '0', '0', '0', 'Client ', '696550258', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-09 08:57:42', 9.81015, 3.99787, 9.73654, 4.05199, 'Glam\'s Chic ', '676067275', 2000, 0, 2, 4),
(86, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Deux colis à prendre. Dépôt de 51 mille à Glam\'s Chic ', '', 'Cameroun', 'Bessengue', '09/10/2023 09:20:00', '', 'Cameroun', 'Orange Makepe Douala', '09/10/2023 00:20:00', '', '0', '0', '0', '0', 'Client ', '699949686', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-09 09:02:10', 9.71142, 4.04733, 9.74743, 4.07544, 'Glam\'s Chic ', '676067275', 1000, 0, 2, 4),
(87, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '01 parfum rouge belge. Montant à collecter 26.000F', '', 'Cameroun', 'Bessengue', '09/10/2023 09:20:00', '', 'Cameroun', 'Akwa', '09/10/2023 00:06:00', '', '0', '0', '0', '0', 'Client ', '696020210', '6904651 ', ' FCFA', 0, 0, 0, 'Espèce', '', '2023-10-09 09:04:51', 9.71142, 4.04733, 9.69958, 4.05314, 'Glam\'s Chic ', '676067275', 1000, 0, 2, 4),
(88, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter : 16.000F', '', 'Cameroun', 'Marché bonamoussadi', '09/10/2023 09:30:00', '', 'Cameroun', 'Orange Makepe Douala', '09/10/2023 00:07:00', '', '0', '0', '0', '0', 'Client ', '696740810', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-09 09:16:55', 9.7428, 4.08899, 9.74743, 4.07544, 'KINKY NATURE ', '691813243', 1000, 0, 2, 4),
(89, 'repas', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Pizza dorée', '09/10/2023 16:30:00', '', 'Cameroun', 'Bonapriso', '09/10/2023 00:25:00', '', '0', '0', '0', '0', 'Client. ', '694523888', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-09 16:24:31', 9.74391, 4.09154, 9.70028, 4.02478, 'PIZZA DORÉE ', '690748357', 2000, 0, 2, 4),
(90, 'repas', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Pizza dorée', '09/10/2023 16:30:00', '', 'Cameroun', 'Akwa', '09/10/2023 00:17:00', '', '0', '0', '0', '0', 'Client ', '654335619', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-09 16:26:19', 9.74391, 4.09154, 9.69958, 4.05314, 'PIZZA DORÉE ', '690748357', 1500, 0, 2, 4),
(91, 'repas', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Pizza dorée', '10/10/2023 13:45:00', '', 'Cameroun', 'Hôtel Mboa', '10/10/2023 00:09:00', '', '0', '0', '0', '0', 'Client ', '696776295', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-10 13:47:42', 9.74391, 4.09154, 9.7249, 4.08575, 'PIZZA DORÉE ', '690748357', 1000, 0, 2, 4),
(92, 'Vêtements', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter :7500F', '', 'Cameroun', 'Station Total Bessengue', '10/10/2023 15:10:00', '', 'Cameroun', 'Bonamoussadi', '10/10/2023 00:13:00', '', '0', '0', '0', '0', 'Client ', '694482411', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-10 15:07:02', 9.71138, 4.05951, 9.74278, 4.08919, 'Best Office ', '699171002', 1000, 0, 2, 4),
(93, 'repas', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Pizza dorée', '10/10/2023 15:30:00', '', 'Cameroun', 'Résidences Mbangue', '10/10/2023 00:12:00', '', '0', '0', '0', '0', 'Client', '696925798', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-10 15:28:22', 9.74391, 4.09154, 9.71122, 4.06494, 'PIZZA DORÉE ', '690748357', 500, 0, 2, 4),
(124, 'repas', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', '', '14/10/2023 11:50:00', '', 'Cameroun', 'Hôtel Pentagone', '14/10/2023 00:11:00', '', '0', '0', '0', '0', 'Client', '699536194', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-14 11:50:18', 9.74284, 4.08918, 9.75277, 4.06179, 'Kirikou ', '674510241', 1000, 0, 2, 4),
(95, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Ngangue', '10/10/2023 15:39:00', '', 'Cameroun', 'Bonanjo', '10/10/2023 00:12:00', '', '0', '0', '0', '0', 'Client ', '698980768', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-10 15:42:18', 9.71073, 4.02276, 9.68705, 4.03943, 'Cika', '697567246', 1000, 0, 2, 4),
(96, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Ngangue', '10/10/2023 15:49:00', '', 'Cameroun', 'Makepe', '10/10/2023 00:17:00', '', '0', '0', '0', '0', 'Client ', '696063328', '6904651 ', ' FCFA', 0, 0, 0, 'Espèce', '', '2023-10-10 15:45:06', 9.71073, 4.02276, 9.73654, 4.05199, 'Cika', '697567246', 1000, 0, 2, 4),
(97, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter : 13000F  +1000F', '', 'Cameroun', 'Ngangue', '10/10/2023 15:50:00', '', 'Cameroun', 'PK 12', '10/10/2023 00:25:00', '', '0', '0', '0', '0', 'Client', '697165111', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-10 15:49:09', 9.71073, 4.02276, 9.76787, 4.05106, 'Cika', '697567246', 1000, 0, 2, 4),
(98, 'repas', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Pizza dorée', '10/10/2023 17:40:00', '', 'Cameroun', 'Carrefour Andem', '10/10/2023 00:08:00', '', '0', '0', '0', '0', 'Client ', '690558320', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-10 17:37:36', 9.74391, 4.09154, 9.76544, 4.08692, 'PIZZA DORÉE ', '690748357', 1000, 0, 2, 4),
(99, 'repas', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Pizza dorée', '10/10/2023 18:00:00', '', 'Cameroun', 'Yoro Jos', '10/10/2023 00:02:00', '', '0', '0', '0', '0', 'Client ', '698535665', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-10 17:57:49', 9.74391, 4.09154, 9.74567, 4.08903, 'Pizza dorée ', '690748357', 500, 0, 2, 4),
(132, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Bonamoussadi', '16/10/2023 13:00:00', '', 'Cameroun', 'Makepe BM au niveau du stade', '16/10/2023 00:10:00', '', '0', '0', '0', '0', 'Client ', '696192655', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-16 12:49:07', 9.74278, 4.08919, 9.75637, 4.07832, 'cika', '695303379', 1000, 0, 2, 5),
(101, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter :76.000F', '', 'Cameroun', 'Gare de Bessengue', '11/10/2023 13:30:00', '', 'Cameroun', 'Orange Makepe Saint Tropez', '11/10/2023 00:19:00', '', '0', '0', '0', '0', 'Client ', '699949686', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-11 09:33:51', 9.7116, 4.05379, 9.74852, 4.07316, 'Glam\'s Chic ', '676067275', 1000, 0, 2, 4),
(102, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter : 13000F', '', 'Cameroun', 'Marché bonamoussadi', '11/10/2023 10:30:00', '', 'Cameroun', 'Bali', '11/10/2023 00:20:00', '', '0', '0', '0', '0', 'Client', '656832095', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-11 09:37:32', 9.7428, 4.08899, 9.69401, 4.03808, 'KINKY NATURE ', '679739705', 1000, 0, 2, 4),
(131, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Denver, Douala, Cameroun', '16/10/2023 13:00:00', '', 'Cameroun', 'BEK\'S Entreprise', '16/10/2023 00:03:00', '', '0', '0', '0', '0', 'Client ', '696967329', '6904651 ', ' FCFA', 0, 0, 0, 'Espèce', '', '2023-10-16 12:44:35', 9.73149, 4.08309, 9.71816, 4.0717, 'cika', '695303379', 500, 2.112, 2, 4),
(103, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter : 7000F', '', 'Cameroun', 'Marché bonamoussadi', '11/10/2023 14:00:00', '', 'Cameroun', 'Cité De La Paix', '11/10/2023 00:13:00', '', '0', '0', '0', '0', 'Client', '693617575', '6904651 ', ' FCFA', 0, 0, 0, 'Espèce', '', '2023-10-11 13:39:22', 9.7428, 4.08899, 9.78079, 4.08137, 'KINKY NATURE ', '679739705', 1000, 5.898, 2, 4),
(104, 'Chaussures ', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'B\'SSADI GALERIES', '11/10/2023 15:30:00', '', 'Cameroun', 'Noblesse Voyage', '11/10/2023 00:31:00', '', '0', '0', '0', '0', 'Client', '691269469', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-11 15:07:15', 9.74037, 4.09111, 9.73402, 4.02536, 'KESSY COSMETICS ', '653296081', 1500, 0, 2, 4),
(105, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'ndogbong', '11/10/2023 15:30:00', '', 'Cameroun', 'Marché Cité-sic', '11/10/2023 00:13:00', '', '0', '0', '0', '0', 'Client ', '696529065', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-11 15:30:04', 9.76787, 4.05106, 9.73032, 4.04905, 'Alpha Bio ', '674115319', 1000, 0, 2, 4),
(106, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'ndogbong', '11/10/2023 15:40:00', '', 'Cameroun', 'Cite des Palmiers', '11/10/2023 00:03:00', '', '0', '0', '0', '0', 'Client ', '697755870', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-11 15:36:29', 9.76787, 4.05106, 9.76369, 4.05237, 'Alpha Bio ', '674115319', 1000, 0, 2, 4),
(107, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Bijoux\r\n\r\nMontant à collecter : 15500F frais de livraison inclus (1500F)', '', 'Cameroun', 'Makepe Missoke', '12/10/2023 08:45:00', '', 'Cameroun', 'Borne 10, Nylon', '12/10/2023 00:43:00', '', '0', '0', '0', '0', 'Client', '699909605', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-12 08:45:29', 9.73825, 4.06055, 9.76575, 4.00026, 'Mab Shop', '696495798', 1500, 0, 2, 4),
(108, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter 30500fcfa livraison inclus ', '', 'Cameroun', 'SOCAVER, Douala', '12/10/2023 09:00:00', '', 'Cameroun', 'Polyclinique De Poitiers, Douala', '12/10/2023 00:14:00', '', '0', '0', '0', '0', 'Mme Rita', '677537185', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-12 08:58:04', 9.74687, 4.04833, 9.70987, 4.06023, 'Miry', '675974247', 1000, 0, 2, 4),
(109, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter 15500 frais de livraison inclus ', '', 'Cameroun', 'SOCAVER, Douala', '12/10/2023 09:00:00', '', 'Cameroun', 'Centre linguistique de Bonanjo, Douala', '12/10/2023 00:00:00', '', '0', '0', '0', '0', 'Mme Eligenie', '653971798', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-12 09:05:37', 9.74687, 4.04833, 9.68856, 4.0305, 'Miry', '675974247', 1000, 0, 2, 4),
(110, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter 10500 FCFA frais de livraison inclus ', '', 'Cameroun', 'SOCAVER, Douala', '12/10/2023 09:30:00', '', 'Cameroun', 'Fret aéroport de Douala', '12/10/2023 00:15:00', '', '0', '0', '0', '0', 'Mme D', '679501511', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-12 09:09:45', 9.74687, 4.04833, 9.72127, 4.01146, 'Miry ', '675974247', 1500, 0, 2, 4),
(111, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter 8000 FCFA frais de livraison inclus ', '', 'Cameroun', 'SOCAVER, Douala', '12/10/2023 09:30:00', '', 'Cameroun', 'PK 12', '12/10/2023 00:09:00', '', '0', '0', '0', '0', 'Mme Philomène ', '693042236', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-12 09:13:15', 9.74687, 4.04833, 9.76787, 4.05106, 'Miry', '675974247', 1000, 0, 2, 4),
(112, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter 8500 FCFA frais de livraison inclus ', '', 'Cameroun', 'SOCAVER, Douala', '12/10/2023 09:30:00', '', 'Cameroun', 'Bonanjo', '12/10/2023 00:20:00', '', '0', '0', '0', '0', 'Mme Hélène ', '679461679', '6904651 ', ' FCFA', 0, 0, 0, 'Espèce', '', '2023-10-12 09:17:25', 9.74687, 4.04833, 9.68705, 4.03943, 'Miry', '675974247', 1500, 11.138, 2, 4),
(113, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Bois de Singes', '12/10/2023 12:55:00', '', 'Cameroun', 'Akwa', '12/10/2023 00:52:00', '', '0', '0', '0', '0', 'Client ', '699606574', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-12 12:51:04', 9.75, 3.98333, 9.69958, 4.05314, 'CiKa ', '697567246', 1500, 0, 2, 4),
(114, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'ndogbong', '13/10/2023 14:00:00', '', 'Cameroun', 'Ndogpassi village', '13/10/2023 00:00:00', '', '0', '0', '0', '0', 'Client ', '672381208', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-13 13:39:02', 9.76787, 4.05106, 9.76826, 4.05122, 'Alpha bio', '674115319', 1000, 0, 2, 4),
(115, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Bessengue', '13/10/2023 15:00:00', '', 'Cameroun', 'Akwa', '13/10/2023 00:06:00', '', '0', '0', '0', '0', 'Client ', '696020210', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-13 13:43:17', 9.71142, 4.04733, 9.69958, 4.05314, 'Expéditeur ', '676067275', 1000, 0, 2, 4),
(116, 'Médicaments', '', '', ' ', '', 0, '', 'Moto', 'Montant a collecté 6500f frais de livraison inclus', '', 'Cameroun', 'Marché bonamoussadi', '13/10/2023 15:00:00', '', 'Cameroun', 'Bali', '13/10/2023 00:20:00', '', '0', '0', '0', '0', 'Client ', '697391256', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-13 13:47:08', 9.7428, 4.08899, 9.69401, 4.03808, 'Kinky nature ', '679739705', 1000, 0, 2, 0),
(125, 'repas', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Ndogbong, Carrefour Play-boy', '14/10/2023 12:00:00', '', 'Cameroun', 'Carrefour Combi', '14/10/2023 00:12:00', '', '0', '0', '0', '0', 'Client', '695820218', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-14 11:55:20', 9.74832, 4.05304, 9.73592, 4.01648, 'Alpha Bio ', '674115319', 1000, 0, 2, 4),
(118, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'montant à collecter (si oui) frais de livraison elle paie', '', 'Cameroun', 'Makepe', '13/10/2023 15:00:00', '', 'Cameroun', 'Bonapriso', '13/10/2023 00:18:00', '', '0', '0', '0', '0', 'Client ', '699858027', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-13 14:21:15', 9.73654, 4.05199, 9.70028, 4.02478, 'MAB SHOP', '696495798', 1500, 0, 2, 4),
(119, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'montant à collecter 6500 plus frais de livraison 1000', '', 'Cameroun', 'Makepe', '13/10/2023 16:00:00', '', 'Cameroun', 'Bonamousadi', '13/10/2023 00:17:00', '', '0', '0', '0', '0', 'Client ', '697337530', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-13 14:24:25', 9.73654, 4.05199, 9.7328, 4.08967, 'MAB SHOP', '696495798', 1000, 0, 2, 4),
(120, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'montant à collecter (si oui) livraison 1000', '', 'Cameroun', 'Makepe', '13/10/2023 16:00:00', '', 'Cameroun', 'Bépanda', '13/10/2023 00:11:00', '', '0', '0', '0', '0', 'Client ', '655073588', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-13 14:27:52', 9.73654, 4.05199, 9.72605, 4.05408, 'MAB SHOP', '696495798', 1000, 0, 2, 4),
(121, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Bonapriso', '13/10/2023 16:00:00', '', 'Cameroun', 'Logbaba', '13/10/2023 00:27:00', '', '0', '0', '0', '0', 'Client ', '695303379', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-13 14:34:14', 9.70028, 4.02478, 9.76787, 4.05106, 'katoucha', '697567246', 1500, 0, 2, 4),
(122, 'fleurs', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Bonapriso', '13/10/2023 16:45:00', '', 'Cameroun', 'Makepe', '13/10/2023 00:17:00', '', '0', '0', '0', '0', 'Client ', '696469418', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-13 16:57:17', 9.70028, 4.02478, 9.73654, 4.05199, 'QUICK DELICES', '696469418', 1500, 0, 2, 4),
(123, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'montant à collecter (si oui) livraison 1500', '', 'Cameroun', 'Makepe', '13/10/2023 15:00:00', '', 'Cameroun', 'Borne 10, Nylon', '13/10/2023 00:39:00', '', '0', '0', '0', '0', 'Client ', '699909605', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-13 17:35:47', 9.73654, 4.05199, 9.76575, 4.00026, 'MAB SHOP', '696495798', 1500, 0, 2, 4),
(126, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'ndogbong', '14/10/2023 13:00:00', '', 'Cameroun', 'Akwa', '14/10/2023 00:23:00', '', '0', '0', '0', '0', 'Client', '655889890', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-14 12:21:44', 9.76787, 4.05106, 9.69958, 4.05314, 'Alpha Bio ', '674115319', 1000, 0, 2, 4),
(127, 'Vêtements', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Bessengue', '14/10/2023 12:30:00', '', 'Cameroun', 'Bonamoussadi', '14/10/2023 00:17:00', '', '0', '0', '0', '0', 'Client ', '676016371', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-14 12:25:42', 9.71142, 4.04733, 9.74278, 4.08919, 'Best Office ', '699171002', 1000, 0, 2, 4),
(128, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'lycee de makepe', '14/10/2023 13:50:00', '', 'Cameroun', 'Résidences Mbangue', '14/10/2023 00:15:00', '', '0', '0', '0', '0', 'Client ', '696129683', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-14 13:39:19', 9.75767, 4.08213, 9.71122, 4.06494, 'Camille beauty', '692376196', 1000, 0, 2, 4),
(129, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Marché bonamoussadi', '14/10/2023 15:20:00', '', 'Cameroun', 'Yassa', '14/10/2023 00:41:00', '', '0', '0', '0', '0', 'Client ', '696919610', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-14 15:16:58', 9.7428, 4.08899, 9.81015, 3.99787, 'KINKY NATURE ', '679739705', 2000, 0, 2, 4),
(130, 'Produits cosmétiques ', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'B\'SSADI GALERIES', '14/10/2023 17:00:00', '', 'Cameroun', 'Collège IAES nyalla', '14/10/2023 00:32:00', '', '0', '0', '0', '0', 'Client ', '699859771', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-14 16:32:11', 9.74037, 4.09111, 9.78901, 4.03209, 'KESSY COSMETICS', '653310130', 1500, 0, 2, 4),
(133, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', 'montant à collecter 13000 FCFA+1000 FCFA frais de livraison ', '', 'Cameroun', 'Bonamoussadi', '16/10/2023 16:00:00', '', 'Cameroun', 'COLLÈGE LA CONQUÊTE', '16/10/2023 00:09:00', '', '0', '0', '0', '0', 'Client ', '652557460', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-16 12:55:54', 9.74278, 4.08919, 9.75569, 4.06843, 'cika', '695303379', 1000, 0, 2, 4),
(134, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', 'montant  à collecter 22000 FCFA + 1000 FCFA frais de livraison', '', 'Cameroun', 'Bonamoussadi', '16/10/2023 14:00:00', '', 'Cameroun', 'Marché PK 12 Bassa', '16/10/2023 00:24:00', '', '0', '0', '0', '0', 'Client ', '697165111', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-16 12:59:43', 9.74278, 4.08919, 9.7862, 4.06272, 'cika', '695303379', 1000, 0, 2, 4),
(135, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Denver, Douala, Cameroun', '16/10/2023 13:30:00', '', 'Cameroun', 'Bonamoussadi', '16/10/2023 00:04:00', '', '0', '0', '0', '0', 'Client ', '698783385', '6904651 ', ' FCFA', 0, 0, 0, 'Espèce', '', '2023-10-16 13:08:49', 9.73149, 4.08309, 9.74278, 4.08919, 'cika', '695303379', 1000, 1.705, 2, 5),
(136, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'ndogbong', '16/10/2023 15:00:00', '', 'Cameroun', 'Cite des Palmiers', '16/10/2023 00:03:00', '', '0', '0', '0', '0', 'Client ', '671326625', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-16 13:35:51', 9.76787, 4.05106, 9.76369, 4.05237, 'Alpha bio', '674115319', 1000, 0, 2, 4),
(137, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'ndogbong', '16/10/2023 15:00:00', '', 'Cameroun', 'Gendarmerie PK14', '16/10/2023 00:16:00', '', '0', '0', '0', '0', 'Client ', '694483035', '6904651 ', ' FCFA', 0, 0, 0, 'Espèce', '', '2023-10-16 14:29:44', 9.76787, 4.05106, 9.79408, 4.07764, 'Alpha bio', '674115319', 1500, 4.782, 2, 1),
(138, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', 'expédition', '', 'Cameroun', 'Denver, Douala, Cameroun', '16/10/2023 16:30:00', '', 'Cameroun', 'Garanti Express Voyages, deux Eglises', '16/10/2023 00:12:00', '', '0', '0', '0', '0', 'NTSAMA ABOUI Christe', '697200757', '6904651 ', ' FCFA', 0, 0, 0, 'Espèce', '', '2023-10-16 16:15:09', 9.7315, 4.08309, 9.70597, 4.04294, 'cika', '697567246', 1000, 0, 2, 4),
(139, 'petit colis', '', '', ' ', '', 0, '', 'Moto', 'expédition', '', 'Cameroun', 'Bonamoussadi', '16/10/2023 16:30:00', '', 'Cameroun', 'United Express', '16/10/2023 00:18:00', '', '0', '0', '0', '0', 'ASSOMO BELINGA Lucie', '699697249', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-16 16:21:32', 9.74278, 4.08919, 9.69507, 4.05036, 'La TERMA', '698792389', 1000, 0, 2, 4),
(140, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Denver, Douala, Cameroun', '16/10/2023 16:30:00', '', 'Cameroun', 'Logbaba', '16/10/2023 00:18:00', '', '0', '0', '0', '0', 'Client ', '657110108', '6904651 ', ' FCFA', 0, 0, 0, 'Espèce', '', '2023-10-16 16:24:37', 9.73149, 4.08309, 9.76787, 4.05106, 'cika', '697567246', 1000, 0, 2, 4),
(141, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Denver, Douala, Cameroun', '16/10/2023 16:30:00', '', 'Cameroun', 'Laboratoire Meka', '16/10/2023 00:02:00', '', '0', '0', '0', '0', 'Client ', '656443856', '6904651 ', ' FCFA', 0, 0, 0, 'Espèce', '', '2023-10-16 16:29:49', 9.73149, 4.08309, 9.73802, 4.08689, 'cika', '697567246', 500, 0, 2, 4),
(142, 'petit colis', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Bessengue', '16/10/2023 17:00:00', '', 'Cameroun', 'Marché Cité-sic', '16/10/2023 00:05:00', '', '0', '0', '0', '0', 'Client ', '240555626662', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-16 17:24:31', 9.71142, 4.04733, 9.73032, 4.04905, 'BES OFFICE', '699171002', 1000, 0, 1, NULL);
INSERT INTO `chargement` (`id_charg`, `marchandise`, `emballage`, `mode_t`, `valeurm`, `poid`, `nb_colis`, `volume`, `type_vehicule`, `details_march`, `img_march`, `pays_charg`, `ville_charg`, `date_charg`, `adresse_charg`, `pays_liv`, `ville_liv`, `date_liv`, `adresse_liv`, `tol_charg`, `jr_retard2`, `tol_liv`, `jr_retard`, `contact_name`, `contact_phone`, `telephone`, `prix_prop`, `nb_vehicules`, `status`, `avance`, `methodepayement`, `autre_info`, `created_at`, `longitude`, `latitude`, `longitude1`, `latitude1`, `name_expediteur`, `telephone_expediteur`, `priceestimated`, `distance`, `statutenvoi`, `rate`) VALUES
(143, 'Intrants cosmétiques ', '', '', ' ', '', 0, '', 'Moto', 'Montant à collecter 11000F', '', 'Cameroun', 'lycee de makepe', '16/10/2023 18:15:00', '', 'Cameroun', 'Akwa Nord', '16/10/2023 00:12:00', '', '0', '0', '0', '0', 'Client ', '694312632', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-16 18:04:30', 9.75767, 4.08213, 9.72605, 4.0793, 'Carmilla Beauty', '692376196', 1000, 0, 2, 4),
(144, 'Sac à main', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'Denver, Douala, Cameroun', '17/10/2023 09:30:00', '', 'Cameroun', 'Nyalla', '17/10/2023 00:34:00', '', '0', '0', '0', '0', 'Client ', '655598440', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-17 09:19:43', 9.73149, 4.08309, 9.78093, 4.02191, 'cika', '697567246', 1500, 0, 2, 4),
(145, 'Intrants cosmétiques ', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'lycee de makepe', '17/10/2023 10:28:00', '', 'Cameroun', 'Akwa Nord', '17/10/2023 00:12:00', '', '0', '0', '0', '0', 'Client ', '694312632', '6904651 ', ' ', 0, 0, 0, 'Espèce', '', '2023-10-17 10:29:42', 9.75767, 4.08213, 9.72605, 4.0793, 'Carmilla Beauty ', '692376196', 850, 0, 2, 4),
(146, 'Produits cosmétiques ', '', '', ' ', '', 0, '', 'Moto', '', '', 'Cameroun', 'ndogbong', '17/10/2023 15:00:00', '', 'Cameroun', 'Dakar', '17/10/2023 00:25:00', '', '0', '0', '0', '0', 'Client ', '651264031', '6904651 ', ' FCFA', 0, 0, 0, 'Espèce', '', '2023-10-17 14:47:34', 9.76787, 4.05106, 9.70864, 4.0272, 'Alpha Bio ', '674115319', 1500, 0, 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `chargement_vehicules`
--

CREATE TABLE `chargement_vehicules` (
  `id` int NOT NULL,
  `id_abonnement` int NOT NULL,
  `id_chargement` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `chargement_vehicules`
--

INSERT INTO `chargement_vehicules` (`id`, `id_abonnement`, `id_chargement`) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 4, 3),
(4, 2, 4),
(5, 4, 6),
(6, 2, 7),
(7, 2, 8),
(8, 4, 10),
(9, 4, 11),
(10, 4, 12),
(11, 2, 16),
(12, 2, 15),
(13, 2, 14),
(14, 2, 13),
(15, 4, 17),
(16, 4, 18),
(17, 4, 23),
(18, 4, 22),
(19, 4, 20),
(20, 4, 24),
(23, 2, 21),
(24, 2, 9),
(25, 2, 19),
(26, 2, 26),
(27, 2, 27),
(28, 2, 29),
(29, 2, 28),
(30, 4, 30),
(31, 2, 31),
(32, 3, 33),
(33, 2, 33),
(34, 4, 32),
(35, 2, 34),
(36, 4, 35),
(37, 4, 36),
(38, 2, 37),
(39, 2, 38),
(40, 4, 39),
(42, 2, 40),
(43, 4, 41),
(44, 4, 43),
(45, 2, 44),
(46, 2, 45),
(47, 2, 46),
(48, 2, 49),
(49, 2, 48),
(50, 2, 47),
(51, 2, 50),
(52, 2, 51),
(53, 2, 53),
(54, 6, 54),
(55, 6, 55),
(56, 6, 56),
(57, 6, 57),
(58, 2, 58),
(59, 2, 59),
(60, 6, 60),
(61, 4, 64),
(62, 6, 65),
(63, 4, 66),
(64, 2, 67),
(65, 4, 68),
(66, 6, 61),
(67, 6, 69),
(68, 2, 62),
(69, 4, 63),
(70, 2, 71),
(71, 4, 70),
(72, 4, 72),
(73, 3, 74),
(74, 4, 73),
(75, 2, 75),
(76, 6, 77),
(77, 3, 78),
(78, 4, 81),
(79, 4, 80),
(80, 4, 79),
(81, 4, 76),
(82, 4, 82),
(83, 4, 83),
(84, 5, 84),
(85, 2, 85),
(86, 4, 86),
(87, 4, 87),
(88, 4, 88),
(89, 2, 89),
(90, 2, 90),
(91, 2, 91),
(92, 3, 92),
(93, 2, 93),
(94, 4, 97),
(95, 4, 95),
(96, 4, 94),
(97, 4, 96),
(98, 2, 98),
(99, 2, 99),
(100, 6, 100),
(101, 6, 102),
(102, 2, 101),
(103, 4, 103),
(104, 2, 104),
(105, 4, 105),
(106, 6, 106),
(107, 2, 107),
(108, 2, 108),
(109, 2, 112),
(110, 2, 111),
(111, 2, 110),
(112, 2, 109),
(113, 2, 113),
(114, 3, 114),
(115, 3, 116),
(116, 2, 115),
(117, 2, 121),
(118, 3, 118),
(119, 4, 122),
(120, 2, 120),
(121, 2, 119),
(122, 2, 117),
(123, 2, 123),
(124, 2, 124),
(126, 3, 125),
(127, 3, 126),
(128, 4, 127),
(129, 4, 128),
(130, 4, 129),
(131, 6, 130),
(132, 2, 135),
(133, 3, 132),
(134, 3, 134),
(135, 3, 136),
(136, 3, 137),
(137, 2, 131),
(138, 2, 133),
(139, 2, 140),
(140, 2, 141),
(141, 4, 142),
(142, 4, 139),
(143, 4, 138),
(144, 2, 143),
(145, 2, 144),
(146, 4, 145),
(147, 4, 146);

-- --------------------------------------------------------

--
-- Structure de la table `disponibilite`
--

CREATE TABLE `disponibilite` (
  `id_disp` int NOT NULL,
  `poid_disp` int NOT NULL,
  `pays_dep` varchar(30) NOT NULL,
  `ville_dep` text NOT NULL,
  `date_dep` varchar(10) NOT NULL,
  `adresse_dep` varchar(100) NOT NULL,
  `pays_arr` varchar(30) NOT NULL,
  `ville_arr` text NOT NULL,
  `date_arr` varchar(10) NOT NULL,
  `adresse_arr` text NOT NULL,
  `contact_name` varchar(20) NOT NULL,
  `contact_phone` varchar(20) NOT NULL,
  `id_abonnement` int NOT NULL,
  `id_chargement` int NOT NULL,
  `longitude` float DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude1` float DEFAULT NULL,
  `latitude1` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `disponibilite`
--

INSERT INTO `disponibilite` (`id_disp`, `poid_disp`, `pays_dep`, `ville_dep`, `date_dep`, `adresse_dep`, `pays_arr`, `ville_arr`, `date_arr`, `adresse_arr`, `contact_name`, `contact_phone`, `id_abonnement`, `id_chargement`, `longitude`, `latitude`, `longitude1`, `latitude1`) VALUES
(1, 1, 'Cameroun', 'Bonamoussadi Sable 695519804/653078623, Douala, Ca', '25/09/2023', '', 'Cameroun', 'Bonanjo', '25/09/2023', '', 'Yannick ', '690465196', 2, 1, NULL, NULL, NULL, NULL),
(2, 1, 'Cameroun', '', '25/09/2023', '', 'Cameroun', 'Le Glacier Moderne Bonamoussadi', '25/09/2023', '', 'Client ', '696770483', 2, 2, NULL, NULL, NULL, NULL),
(3, 1, 'Cameroun', 'Bernabé Cameroun', '25/09/2023', '', 'Cameroun', 'ndogbong', '25/09/2023', '', 'Alpha Bio', '674115319', 4, 3, NULL, NULL, NULL, NULL),
(4, 1, 'Cameroun', 'Makepe Missoke', '25/09/2023', '', 'Cameroun', 'United Express', '25/09/2023', '', 'United ', '1', 2, 4, NULL, NULL, NULL, NULL),
(5, 1, 'Cameroun', 'Bessengue', '25/09/2023', '', 'Cameroun', 'ACEP Bonamoussadi', '25/09/2023', '', 'Client', '695903995', 4, 6, NULL, NULL, NULL, NULL),
(6, 1, 'Cameroun', 'Makepe Missoke', '25/09/2023', '', 'Cameroun', 'LA CAVE PK13', '25/09/2023', '', 'Client', '696641100', 2, 7, NULL, NULL, NULL, NULL),
(7, 1, 'Cameroun', 'Makepe Missoke', '25/09/2023', '', 'Cameroun', 'Hopital General de Douala', '25/09/2023', '', 'Client ', '693335617', 2, 8, NULL, NULL, NULL, NULL),
(8, 1, 'Cameroun', 'Denver, Douala, Cameroun', '26/09/2023', '', 'Cameroun', 'Kotto immeuble', '26/09/2023', '', 'Client ', '672090907', 4, 10, NULL, NULL, NULL, NULL),
(9, 1, 'Cameroun', 'Denver, Douala, Cameroun', '26/09/2023', '', 'Cameroun', 'Makèpe bloc L', '26/09/2023', '', 'Client ', '696438518', 4, 11, NULL, NULL, NULL, NULL),
(10, 1, 'Cameroun', 'Denver, Douala, Cameroun', '26/09/2023', '', 'Cameroun', 'ndogbong', '26/09/2023', '', 'Client ', '676060643', 4, 12, NULL, NULL, NULL, NULL),
(11, 1, 'Cameroun', 'Institut Universitaire de la Côte - IUC', '26/09/2023', '', 'Cameroun', 'College De La Salle', '26/09/2023', '', 'Client ', '696819080', 2, 16, NULL, NULL, NULL, NULL),
(12, 1, 'Cameroun', 'Denver, Douala, Cameroun', '26/09/2023', '', 'Cameroun', 'Poste Centrale de Bonanjo', '26/09/2023', '', 'Client ', '697602493', 2, 15, NULL, NULL, NULL, NULL),
(13, 1, 'Cameroun', 'Denver, Douala, Cameroun', '26/09/2023', '', 'Cameroun', 'Boulangerie Coaf', '26/09/2023', '', 'Client ', '698980768', 2, 14, NULL, NULL, NULL, NULL),
(14, 1, 'Cameroun', 'Denver, Douala, Cameroun', '26/09/2023', '', 'Cameroun', 'Rond-Point Deido', '26/09/2023', '', 'Client ', '675453941', 2, 13, NULL, NULL, NULL, NULL),
(15, 1, 'Cameroun', 'ndogbong', '26/09/2023', '', 'Cameroun', 'Touristique Voyage VIP (Ancien Centrale voyage, Do', '26/09/2023', '', 'Client ', '675838720', 4, 17, NULL, NULL, NULL, NULL),
(16, 1, 'Cameroun', 'Hôtel Lewat', '26/09/2023', '', 'Cameroun', 'Ecole Publique de bonamoussadi, Douala', '26/09/2023', '', 'Mme Georgette ', '650114821', 4, 18, NULL, NULL, NULL, NULL),
(17, 1, 'Cameroun', 'B004 Immeuble St Eli Rond point Maetur, Douala, Ca', '26/09/2023', '', 'Cameroun', 'PK 12', '26/09/2023', '', 'Client ', '697165111', 4, 23, NULL, NULL, NULL, NULL),
(18, 1, 'Cameroun', 'Denver, Douala, Cameroun', '26/09/2023', '', 'Cameroun', 'Ndokoti', '26/09/2023', '', 'Client ', '656003534', 4, 22, NULL, NULL, NULL, NULL),
(19, 1, 'Cameroun', 'Denver, Douala, Cameroun', '26/09/2023', '', 'Cameroun', 'Pk10', '26/09/2023', '', 'Client ', '690174481', 4, 24, NULL, NULL, NULL, NULL),
(23, 1, 'Cameroun', 'TotalEnergies MAKEPE', '26/09/2023', '', 'Cameroun', 'ARI', '26/09/2023', '', 'Client ', '691184356', 2, 9, NULL, NULL, NULL, NULL),
(24, 1, 'Cameroun', 'Makepe Missoke', '26/09/2023', '', 'Cameroun', 'Yassa', '26/09/2023', '', 'Client ', '658859930', 2, 19, NULL, NULL, NULL, NULL),
(22, 1, 'Cameroun', 'Makepe Missoke', '26/09/2023', '', 'Cameroun', 'Hopital General de Douala', '26/09/2023', '', 'Client ', '693335617', 2, 21, NULL, NULL, NULL, NULL),
(25, 1, 'Cameroun', 'Pizza dorée', '27/09/2023', '', 'Cameroun', 'IUGET (ISTTI), Douala', '27/09/2023', '', 'Client ', '693322158', 2, 26, NULL, NULL, NULL, NULL),
(26, 1, 'Cameroun', 'ndogbong', '27/09/2023', '', 'Cameroun', 'Angel raphael', '27/09/2023', '', 'Client ', '696529065', 2, 27, NULL, NULL, NULL, NULL),
(27, 1, 'Cameroun', 'ndogbong', '27/09/2023', '', 'Cameroun', 'DAUPHINE 2, Douala', '27/09/2023', '', 'Client ', '697755870', 2, 29, NULL, NULL, NULL, NULL),
(28, 1, 'Cameroun', 'ndogbong', '27/09/2023', '', 'Cameroun', 'OPIOM Lounge Bonamoussadi', '27/09/2023', '', 'Client ', '657611436', 2, 28, NULL, NULL, NULL, NULL),
(29, 1, 'Cameroun', 'Marché bonamoussadi', '27/09/2023', '', 'Cameroun', 'Logpom', '27/09/2023', '', 'Client ', '657789229', 4, 30, NULL, NULL, NULL, NULL),
(30, 1, 'Cameroun', 'Marché bonamoussadi', '27/09/2023', '', 'Cameroun', 'Clinique Saint Georgette', '27/09/2023', '', 'Client ', '699032662', 2, 31, NULL, NULL, NULL, NULL),
(31, 1, 'Cameroun', 'Denver, Douala, Cameroun', '27/09/2023', '', 'Cameroun', 'Ndokoti', '27/09/2023', '', 'YO', '651248667', 3, 33, NULL, NULL, NULL, NULL),
(32, 1, 'Cameroun', 'Denver, Douala, Cameroun', '27/09/2023', '', 'Cameroun', 'Ndokoti', '27/09/2023', '', 'YO', '651248667', 2, 33, NULL, NULL, NULL, NULL),
(33, 1, 'Cameroun', 'Denver, Douala, Cameroun', '27/09/2023', '', 'Cameroun', 'COLLÈGE LA CONQUÊTE', '27/09/2023', '', 'Client ', '652557460', 4, 32, NULL, NULL, NULL, NULL),
(34, 1, 'Cameroun', 'Makepe Missoke', '27/09/2023', '', 'Cameroun', 'Douala Yassa Maetur', '27/09/2023', '', 'Client ', '697913955', 2, 34, NULL, NULL, NULL, NULL),
(35, 1, 'Cameroun', 'ndogbong', '27/09/2023', '', 'Cameroun', 'Bonassama', '27/09/2023', '', 'Client ', '675900068', 4, 35, NULL, NULL, NULL, NULL),
(36, 1, 'Cameroun', 'ndogbong', '27/09/2023', '', 'Cameroun', 'ISTAMA Douala Sable Bonamoussadi', '27/09/2023', '', 'Client ', '694592184', 4, 36, NULL, NULL, NULL, NULL),
(37, 1, 'Cameroun', 'Makepe Missoke', '27/09/2023', '', 'Cameroun', 'Noblesse Voyage', '27/09/2023', '', 'Client ', '677666791', 2, 37, NULL, NULL, NULL, NULL),
(38, 1, 'Cameroun', 'ndogbong', '28/09/2023', '', 'Cameroun', 'Bonapriso', '28/09/2023', '', 'Client ', '696361995', 2, 38, NULL, NULL, NULL, NULL),
(39, 1, 'Cameroun', 'Bonamoussadi', '28/09/2023', '', 'Cameroun', 'PK 12', '28/09/2023', '', 'Client ', '657140938', 4, 39, NULL, NULL, NULL, NULL),
(41, 1, 'Cameroun', 'Bessengue', '28/09/2023', '', 'Cameroun', 'Rond-Point Deido', '28/09/2023', '', 'Client ', '677966780', 2, 40, NULL, NULL, NULL, NULL),
(42, 1, 'Cameroun', 'Makepe Missoke', '28/09/2023', '', 'Cameroun', 'Akwa', '28/09/2023', '', 'Client ', '656003167', 4, 41, NULL, NULL, NULL, NULL),
(43, 1, 'Cameroun', 'Makepe Missoke', '29/09/2023', '', 'Cameroun', 'United Express', '29/09/2023', '', 'Client ', '656003167', 4, 43, NULL, NULL, NULL, NULL),
(44, 1, 'Cameroun', 'Petit terrain de bonamoussadi', '29/09/2023', '', 'Cameroun', 'Bessengue', '29/09/2023', '', 'Client ', '698049003', 2, 44, NULL, NULL, NULL, NULL),
(45, 1, 'Cameroun', 'Bessengue', '29/09/2023', '', 'Cameroun', 'Makèpe bloc L', '29/09/2023', '', 'Client ', '698334879', 2, 45, NULL, NULL, NULL, NULL),
(46, 1, 'Cameroun', 'Bessengue', '30/09/2023', '', 'Cameroun', 'Centrale thermique de Yassa-Dibamba', '30/09/2023', '', 'Client ', '690885574', 2, 46, NULL, NULL, NULL, NULL),
(47, 1, 'Cameroun', 'Makepe Missoke', '30/09/2023', '', 'Cameroun', 'Bonapriso', '30/09/2023', '', 'Client ', '658859930', 2, 49, NULL, NULL, NULL, NULL),
(48, 1, 'Cameroun', 'Makèpe bloc L', '30/09/2023', '', 'Cameroun', 'HAPPY SPORT NDOGBONG', '30/09/2023', '', 'Client ', '694972967', 2, 48, NULL, NULL, NULL, NULL),
(49, 1, 'Cameroun', 'ndogbong', '30/09/2023', '', 'Cameroun', 'Nyalla Chateau', '30/09/2023', '', 'Client ', '699102487', 2, 47, NULL, NULL, NULL, NULL),
(50, 1, 'Cameroun', 'Institut Universitaire de la Côte - IUC', '30/09/2023', '', 'Cameroun', 'Eto’o Crossroad', '30/09/2023', '', 'Client ', '696541578', 2, 50, NULL, NULL, NULL, NULL),
(51, 1, 'Cameroun', 'Yassa', '30/09/2023', '', 'Cameroun', 'Bali', '30/09/2023', '', 'Client ', '693501914', 2, 51, NULL, NULL, NULL, NULL),
(52, 1, 'Cameroun', 'Carrefour elfes Douala Cameroun', '02/10/2023', '', 'Cameroun', 'Logpom Basson domicile arontiof', '02/10/2023', '', 'Client', '695930145', 2, 53, NULL, NULL, NULL, NULL),
(53, 1, 'Cameroun', 'Mahima super Marche Bonamoussadi', '02/10/2023', '', 'Cameroun', 'General Express Voyages Bepanda', '02/10/2023', '', 'Client ', '677407945', 6, 54, NULL, NULL, NULL, NULL),
(54, 1, 'Cameroun', 'À NDogbong', '02/10/2023', '', 'Cameroun', 'Eco Pressing Makepe', '02/10/2023', '', 'Client', '697776597', 6, 55, NULL, NULL, NULL, NULL),
(55, 1, 'Cameroun', 'ndogbong', '02/10/2023', '', 'Cameroun', 'KMC ANGE RAPHAËL', '02/10/2023', '', 'Client ', '696529065', 6, 56, NULL, NULL, NULL, NULL),
(56, 1, 'Cameroun', 'Marché bonamoussadi', '02/10/2023', '', 'Cameroun', 'Cite des Palmiers', '02/10/2023', '', 'Client ', '696016875', 6, 57, NULL, NULL, NULL, NULL),
(57, 1, 'Cameroun', 'ndogbong', '02/10/2023', '', 'Cameroun', 'Hôpital Laquintinie', '02/10/2023', '', 'Client ', '671325915', 2, 58, NULL, NULL, NULL, NULL),
(58, 1, 'Cameroun', 'Hôtel le Wat', '02/10/2023', '', 'Cameroun', 'Ecole BRIGUINY', '02/10/2023', '', 'Client ', '656961337', 2, 59, NULL, NULL, NULL, NULL),
(59, 1, 'Cameroun', 'ndogbong', '03/10/2023', '', 'Cameroun', 'Elf', '03/10/2023', '', 'Client ', '693327595', 6, 60, NULL, NULL, NULL, NULL),
(60, 1, 'Cameroun', 'Yassa', '03/10/2023', '', 'Cameroun', 'Rond-Point Deido', '03/10/2023', '', 'Client ', '677035671', 6, 65, NULL, NULL, NULL, NULL),
(61, 1, 'Cameroun', 'Petit terrain de bonamoussadi', '04/10/2023', '', 'Cameroun', 'Usine Tampico', '04/10/2023', '', 'Client ', '656846311', 4, 66, NULL, NULL, NULL, NULL),
(62, 1, 'Cameroun', 'Yassa', '04/10/2023', '', 'Cameroun', 'Ancienne route', '04/10/2023', '', 'Client ', '670387766', 2, 67, NULL, NULL, NULL, NULL),
(63, 1, 'Cameroun', 'Marché bonamoussadi', '04/10/2023', '', 'Cameroun', 'Cite des Palmiers', '04/10/2023', '', 'Client', '691852376', 4, 68, NULL, NULL, NULL, NULL),
(64, 1, 'Cameroun', 'ndogbong', '04/10/2023', '', 'Cameroun', 'Stade Omnisports De Bépanda, Douala', '04/10/2023', '', 'Client ', '695521442', 6, 61, NULL, NULL, NULL, NULL),
(65, 1, 'Cameroun', 'Bonapriso', '04/10/2023', '', 'Cameroun', 'Bonabéri', '04/10/2023', '', 'Client ', '681851645', 2, 62, NULL, NULL, NULL, NULL),
(66, 1, 'Cameroun', 'Denver, Douala, Cameroun', '05/10/2023', '', 'Cameroun', 'Ecole Publique de bonamoussadi, Douala', '05/10/2023', '', 'Client ', '690404112', 2, 71, NULL, NULL, NULL, NULL),
(67, 1, 'Cameroun', 'ndogbong', '05/10/2023', '', 'Cameroun', 'Parcours Vita', '05/10/2023', '', 'Client ', '676584297', 4, 70, NULL, NULL, NULL, NULL),
(68, 1, 'Cameroun', 'ndogbong', '05/10/2023', '', 'Cameroun', 'Bali', '05/10/2023', '', 'Client ', '652878801', 4, 72, NULL, NULL, NULL, NULL),
(69, 1, 'Cameroun', 'Denver, Douala, Cameroun', '05/10/2023', '', 'Cameroun', 'depot de planche', '05/10/2023', '', 'Client ', '679596969', 3, 74, NULL, NULL, NULL, NULL),
(70, 1, 'Cameroun', 'Ngangue', '05/10/2023', '', 'Cameroun', 'Hopital General de Douala', '05/10/2023', '', 'Client ', '697602493', 4, 73, NULL, NULL, NULL, NULL),
(71, 1, 'Cameroun', 'Kotto-Bloc', '06/10/2023', '', 'Cameroun', 'Bonapriso', '06/10/2023', '', 'Client ', '697168898', 2, 75, NULL, NULL, NULL, NULL),
(72, 1, 'Cameroun', 'Yassa', '06/10/2023', '', 'Cameroun', 'Kotto badem_badem', '06/10/2023', '', 'Client ', '694909276', 6, 77, NULL, NULL, NULL, NULL),
(73, 1, 'Cameroun', 'Denver, Douala, Cameroun', '06/10/2023', '', 'Cameroun', 'Bonabéri', '06/10/2023', '', 'Client ', '681851645', 3, 78, NULL, NULL, NULL, NULL),
(74, 1, 'Cameroun', 'ndogbong', '06/10/2023', '', 'Cameroun', 'Grand moulin de Deïdo', '06/10/2023', '', 'Client ', '690449865', 4, 81, NULL, NULL, NULL, NULL),
(75, 1, 'Cameroun', 'ndogbong', '06/10/2023', '', 'Cameroun', 'Parcours Vita', '06/10/2023', '', 'Client ', '699590312', 4, 80, NULL, NULL, NULL, NULL),
(76, 1, 'Cameroun', 'ndogbong', '06/10/2023', '', 'Cameroun', 'Ndokoti', '06/10/2023', '', 'Client ', '676067275', 4, 79, NULL, NULL, NULL, NULL),
(77, 1, 'Cameroun', 'ndogbong', '06/10/2023', '', 'Cameroun', 'Bonapriso', '06/10/2023', '', 'Client ', '678943644', 4, 76, NULL, NULL, NULL, NULL),
(78, 1, 'Cameroun', 'Denver, Douala, Cameroun', '06/10/2023', '', 'Cameroun', 'Lendi', '06/10/2023', '', 'Client ', '676316974', 4, 82, NULL, NULL, NULL, NULL),
(79, 1, 'Cameroun', 'Marché bonamoussadi', '07/10/2023', '', 'Cameroun', 'École Publique de la Cité-sic, Douala', '07/10/2023', '', 'Client', '699773026', 4, 83, NULL, NULL, NULL, NULL),
(80, 1, 'Cameroun', 'Santa Lucia Bonamoussadi', '07/10/2023', '', 'Cameroun', 'Akwa', '07/10/2023', '', 'jovelle', '691194990', 5, 84, NULL, NULL, NULL, NULL),
(81, 1, 'Cameroun', 'Yassa', '09/10/2023', '', 'Cameroun', 'Makepe', '09/10/2023', '', 'Client ', '696550258', 2, 85, NULL, NULL, NULL, NULL),
(82, 1, 'Cameroun', 'Bessengue', '09/10/2023', '', 'Cameroun', 'Orange Makepe Douala', '09/10/2023', '', 'Client ', '699949686', 4, 86, NULL, NULL, NULL, NULL),
(83, 1, 'Cameroun', 'Bessengue', '09/10/2023', '', 'Cameroun', 'Akwa', '09/10/2023', '', 'Client ', '696020210', 4, 87, NULL, NULL, NULL, NULL),
(84, 1, 'Cameroun', 'Marché bonamoussadi', '09/10/2023', '', 'Cameroun', 'Orange Makepe Douala', '09/10/2023', '', 'Client ', '696740810', 4, 88, NULL, NULL, NULL, NULL),
(85, 1, 'Cameroun', 'Pizza dorée', '09/10/2023', '', 'Cameroun', 'Bonapriso', '09/10/2023', '', 'Client. ', '694523888', 2, 89, NULL, NULL, NULL, NULL),
(86, 1, 'Cameroun', 'Pizza dorée', '09/10/2023', '', 'Cameroun', 'Akwa', '09/10/2023', '', 'Client ', '654335619', 2, 90, NULL, NULL, NULL, NULL),
(87, 1, 'Cameroun', 'Pizza dorée', '10/10/2023', '', 'Cameroun', 'Hôtel Mboa', '10/10/2023', '', 'Client ', '696776295', 2, 91, NULL, NULL, NULL, NULL),
(88, 1, 'Cameroun', 'Station Total Bessengue', '10/10/2023', '', 'Cameroun', 'Bonamoussadi', '10/10/2023', '', 'Client ', '694482411', 3, 92, NULL, NULL, NULL, NULL),
(89, 1, 'Cameroun', 'Pizza dorée', '10/10/2023', '', 'Cameroun', 'Résidences Mbangue', '10/10/2023', '', 'Client', '696925798', 2, 93, NULL, NULL, NULL, NULL),
(90, 1, 'Cameroun', 'Ngangue', '10/10/2023', '', 'Cameroun', 'PK 12', '10/10/2023', '', 'Client', '697165111', 4, 97, NULL, NULL, NULL, NULL),
(91, 1, 'Cameroun', 'Ngangue', '10/10/2023', '', 'Cameroun', 'Bonanjo', '10/10/2023', '', 'Client ', '698980768', 4, 95, NULL, NULL, NULL, NULL),
(92, 1, 'Cameroun', 'Ngangue', '10/10/2023', '', 'Cameroun', 'ndogbong', '10/10/2023', '', 'Client ', '670711051', 4, 94, NULL, NULL, NULL, NULL),
(93, 1, 'Cameroun', 'Ngangue', '10/10/2023', '', 'Cameroun', 'Makepe', '10/10/2023', '', 'Client ', '696063328', 4, 96, NULL, NULL, NULL, NULL),
(94, 1, 'Cameroun', 'Pizza dorée', '10/10/2023', '', 'Cameroun', 'Carrefour Andem', '10/10/2023', '', 'Client ', '690558320', 2, 98, NULL, NULL, NULL, NULL),
(95, 1, 'Cameroun', 'Pizza dorée', '10/10/2023', '', 'Cameroun', 'Yoro Jos', '10/10/2023', '', 'Client ', '698535665', 2, 99, NULL, NULL, NULL, NULL),
(96, 1, 'Cameroun', 'Marche Central Carrefour Anatole Douala', '11/10/2023', '', 'Cameroun', 'Logpom', '11/10/2023', '', 'Client ', '694858674', 6, 100, NULL, NULL, NULL, NULL),
(97, 1, 'Cameroun', 'Marché bonamoussadi', '11/10/2023', '', 'Cameroun', 'Bali', '11/10/2023', '', 'Client', '656832095', 6, 102, NULL, NULL, NULL, NULL),
(98, 1, 'Cameroun', 'Gare de Bessengue', '11/10/2023', '', 'Cameroun', 'Orange Makepe Saint Tropez', '11/10/2023', '', 'Client ', '699949686', 2, 101, NULL, NULL, NULL, NULL),
(99, 1, 'Cameroun', 'Marché bonamoussadi', '11/10/2023', '', 'Cameroun', 'Cité De La Paix', '11/10/2023', '', 'Client', '693617575', 4, 103, NULL, NULL, NULL, NULL),
(100, 1, 'Cameroun', 'ndogbong', '11/10/2023', '', 'Cameroun', 'Marché Cité-sic', '11/10/2023', '', 'Client ', '696529065', 4, 105, NULL, NULL, NULL, NULL),
(101, 1, 'Cameroun', 'ndogbong', '11/10/2023', '', 'Cameroun', 'Cite des Palmiers', '11/10/2023', '', 'Client ', '697755870', 6, 106, NULL, NULL, NULL, NULL),
(102, 1, 'Cameroun', 'Makepe Missoke', '12/10/2023', '', 'Cameroun', 'Borne 10, Nylon', '12/10/2023', '', 'Client', '699909605', 2, 107, NULL, NULL, NULL, NULL),
(103, 1, 'Cameroun', 'SOCAVER, Douala', '12/10/2023', '', 'Cameroun', 'Polyclinique De Poitiers, Douala', '12/10/2023', '', 'Mme Rita', '677537185', 2, 108, NULL, NULL, NULL, NULL),
(104, 1, 'Cameroun', 'SOCAVER, Douala', '12/10/2023', '', 'Cameroun', 'Bonanjo', '12/10/2023', '', 'Mme Hélène ', '679461679', 2, 112, NULL, NULL, NULL, NULL),
(105, 1, 'Cameroun', 'SOCAVER, Douala', '12/10/2023', '', 'Cameroun', 'PK 12', '12/10/2023', '', 'Mme Philomène ', '693042236', 2, 111, NULL, NULL, NULL, NULL),
(106, 1, 'Cameroun', 'SOCAVER, Douala', '12/10/2023', '', 'Cameroun', 'Fret aéroport de Douala', '12/10/2023', '', 'Mme D', '679501511', 2, 110, NULL, NULL, NULL, NULL),
(107, 1, 'Cameroun', 'SOCAVER, Douala', '12/10/2023', '', 'Cameroun', 'Centre linguistique de Bonanjo, Douala', '12/10/2023', '', 'Mme Eligenie', '653971798', 2, 109, NULL, NULL, NULL, NULL),
(108, 1, 'Cameroun', 'Bois de Singes', '12/10/2023', '', 'Cameroun', 'Akwa', '12/10/2023', '', 'Client ', '699606574', 2, 113, NULL, NULL, NULL, NULL),
(109, 1, 'Cameroun', 'ndogbong', '13/10/2023', '', 'Cameroun', 'Ndogpassi village', '13/10/2023', '', 'Client ', '672381208', 3, 114, NULL, NULL, NULL, NULL),
(110, 1, 'Cameroun', 'Marché bonamoussadi', '13/10/2023', '', 'Cameroun', 'Bali', '13/10/2023', '', 'Client ', '697391256', 3, 116, NULL, NULL, NULL, NULL),
(111, 1, 'Cameroun', 'Bessengue', '13/10/2023', '', 'Cameroun', 'Akwa', '13/10/2023', '', 'Client ', '696020210', 2, 115, NULL, NULL, NULL, NULL),
(112, 1, 'Cameroun', 'Bonapriso', '13/10/2023', '', 'Cameroun', 'Logbaba', '13/10/2023', '', 'Client ', '695303379', 2, 121, NULL, NULL, NULL, NULL),
(113, 1, 'Cameroun', 'Makepe', '13/10/2023', '', 'Cameroun', 'Bonapriso', '13/10/2023', '', 'Client ', '699858027', 3, 118, NULL, NULL, NULL, NULL),
(114, 1, 'Cameroun', 'Bonapriso', '13/10/2023', '', 'Cameroun', 'Makepe', '13/10/2023', '', 'Client ', '696469418', 4, 122, NULL, NULL, NULL, NULL),
(115, 1, 'Cameroun', 'Makepe', '13/10/2023', '', 'Cameroun', 'Bépanda', '13/10/2023', '', 'Client ', '655073588', 2, 120, NULL, NULL, NULL, NULL),
(116, 1, 'Cameroun', 'Makepe', '13/10/2023', '', 'Cameroun', 'Bonamousadi', '13/10/2023', '', 'Client ', '697337530', 2, 119, NULL, NULL, NULL, NULL),
(117, 1, 'Cameroun', 'Makepe Missoke', '13/10/2023', '', 'Cameroun', 'Borne 10, Nylon', '13/10/2023', '', 'Client ', '699909605', 2, 117, NULL, NULL, NULL, NULL),
(118, 1, 'Cameroun', 'Makepe', '13/10/2023', '', 'Cameroun', 'Borne 10, Nylon', '13/10/2023', '', 'Client ', '699909605', 2, 123, NULL, NULL, NULL, NULL),
(119, 1, 'Cameroun', '', '14/10/2023', '', 'Cameroun', 'Hôtel Pentagone', '14/10/2023', '', 'Client', '699536194', 2, 124, NULL, NULL, NULL, NULL),
(121, 1, 'Cameroun', 'Ndogbong, Carrefour Play-boy', '14/10/2023', '', 'Cameroun', 'Carrefour Combi', '14/10/2023', '', 'Client', '695820218', 3, 125, NULL, NULL, NULL, NULL),
(122, 1, 'Cameroun', 'ndogbong', '14/10/2023', '', 'Cameroun', 'Akwa', '14/10/2023', '', 'Client', '655889890', 3, 126, NULL, NULL, NULL, NULL),
(123, 1, 'Cameroun', 'Bessengue', '14/10/2023', '', 'Cameroun', 'Bonamoussadi', '14/10/2023', '', 'Client ', '676016371', 4, 127, NULL, NULL, NULL, NULL),
(124, 1, 'Cameroun', 'lycee de makepe', '14/10/2023', '', 'Cameroun', 'Résidences Mbangue', '14/10/2023', '', 'Client ', '696129683', 4, 128, NULL, NULL, NULL, NULL),
(125, 1, 'Cameroun', 'Marché bonamoussadi', '14/10/2023', '', 'Cameroun', 'Yassa', '14/10/2023', '', 'Client ', '696919610', 4, 129, NULL, NULL, NULL, NULL),
(126, 1, 'Cameroun', 'Denver, Douala, Cameroun', '16/10/2023', '', 'Cameroun', 'Bonamoussadi', '16/10/2023', '', 'Client ', '698783385', 2, 135, NULL, NULL, NULL, NULL),
(127, 1, 'Cameroun', 'Bonamoussadi', '16/10/2023', '', 'Cameroun', 'Makepe BM au niveau du stade', '16/10/2023', '', 'Client ', '696192655', 3, 132, NULL, NULL, NULL, NULL),
(128, 1, 'Cameroun', 'Bonamoussadi', '16/10/2023', '', 'Cameroun', 'Marché PK 12 Bassa', '16/10/2023', '', 'Client ', '697165111', 3, 134, NULL, NULL, NULL, NULL),
(129, 1, 'Cameroun', 'ndogbong', '16/10/2023', '', 'Cameroun', 'Cite des Palmiers', '16/10/2023', '', 'Client ', '671326625', 3, 136, NULL, NULL, NULL, NULL),
(130, 1, 'Cameroun', 'ndogbong', '16/10/2023', '', 'Cameroun', 'Gendarmerie PK14', '16/10/2023', '', 'Client ', '694483035', 3, 137, NULL, NULL, NULL, NULL),
(131, 1, 'Cameroun', 'Bonamoussadi', '16/10/2023', '', 'Cameroun', 'COLLÈGE LA CONQUÊTE', '16/10/2023', '', 'Client ', '652557460', 2, 133, NULL, NULL, NULL, NULL),
(132, 1, 'Cameroun', 'Denver, Douala, Cameroun', '16/10/2023', '', 'Cameroun', 'Logbaba', '16/10/2023', '', 'Client ', '657110108', 2, 140, NULL, NULL, NULL, NULL),
(133, 1, 'Cameroun', 'Denver, Douala, Cameroun', '16/10/2023', '', 'Cameroun', 'Laboratoire Meka', '16/10/2023', '', 'Client ', '656443856', 2, 141, NULL, NULL, NULL, NULL),
(134, 1, 'Cameroun', 'Bessengue', '16/10/2023', '', 'Cameroun', 'Marché Cité-sic', '16/10/2023', '', 'Client ', '240555626662', 4, 142, NULL, NULL, NULL, NULL),
(135, 1, 'Cameroun', 'Bonamoussadi', '16/10/2023', '', 'Cameroun', 'United Express', '16/10/2023', '', 'ASSOMO BELINGA Lucie', '699697249', 4, 139, NULL, NULL, NULL, NULL),
(136, 1, 'Cameroun', 'Denver, Douala, Cameroun', '16/10/2023', '', 'Cameroun', 'Garanti Express Voyages, deux Eglises', '16/10/2023', '', 'NTSAMA ABOUI Christe', '697200757', 4, 138, NULL, NULL, NULL, NULL),
(137, 1, 'Cameroun', 'lycee de makepe', '16/10/2023', '', 'Cameroun', 'Akwa Nord', '16/10/2023', '', 'Client ', '694312632', 2, 143, NULL, NULL, NULL, NULL),
(138, 1, 'Cameroun', 'Denver, Douala, Cameroun', '17/10/2023', '', 'Cameroun', 'Nyalla', '17/10/2023', '', 'Client ', '655598440', 2, 144, NULL, NULL, NULL, NULL),
(139, 1, 'Cameroun', 'lycee de makepe', '17/10/2023', '', 'Cameroun', 'Akwa Nord', '17/10/2023', '', 'Client ', '694312632', 4, 145, NULL, NULL, NULL, NULL),
(140, 1, 'Cameroun', 'ndogbong', '17/10/2023', '', 'Cameroun', 'Dakar', '17/10/2023', '', 'Client ', '651264031', 4, 146, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions`
--

CREATE TABLE `inscriptions` (
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `vehicle` varchar(100) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
-- utf8mb4_0900_ai_ci
--
-- Déchargement des données de la table `inscriptions`
--

INSERT INTO `inscriptions` (`name`, `phone`, `email`, `ville`, `vehicle`, `quantity`, `message`) VALUES
('Franck Harold NTEUKAP NJOMOU', '06 95 16 43 68', 'nnfranck78@gmail.com', 'Doula', 'moto', 5465, 'JHHJHJH'),
('TEST', 'TEST ', 'telefretcameroun@gmail.com', 'Douala', 'tricycle', 0, 'merci'),
('Franck Harold', '323433', 'nnfranck78@gmail.com', 'Doula', 'moto', 33, '3FF'),
('Franck Harold', '65676787', 'nnfranck78@gmail.com', 'Doula', 'moto', 4334, 'name = Franck Harold, phone = 65676787, email = nnfranck78@gmail.com, ville = Doula, vehicle = moto, quantity = 4334, message = JHGJGJHGH'),
('Franck Harold', '65676787', 'nnfranck78@gmail.com', 'Doula', 'moto', 4334, 'name = Franck Harold, phone = 65676787, email = nnfranck78@gmail.com, ville = Doula, vehicle = moto, quantity = 4334, message = JHGJGJHGH'),
('Franck Harold', '65676787', 'nnfranck78@gmail.com', 'Doula', 'moto', 4334, 'name = Franck Harold, phone = 65676787, email = nnfranck78@gmail.com, ville = Doula, vehicle = moto, quantity = 4334, message = JHGJGJHGH'),
('Franck Harold', '65676787', 'nnfranck78@gmail.com', 'Doula', 'moto', 4334, 'name = Franck Harold, phone = 65676787, email = nnfranck78@gmail.com, ville = Doula, vehicle = moto, quantity = 4334, message = JHGJGJHGH'),
('Franck Harold', '65676787', 'nnfranck78@gmail.com', 'Doula', 'moto', 4334, 'name = Franck Harold, phone = 65676787, email = nnfranck78@gmail.com, ville = Doula, vehicle = moto, quantity = 4334, message = JHGJGJHGH'),
('Franck Harold', '65676787', 'nnfranck78@gmail.com', 'Doula', 'moto', 4334, 'name = Franck Harold, phone = 65676787, email = nnfranck78@gmail.com, ville = Doula, vehicle = moto, quantity = 4334, message = JHGJGJHGH'),
('Franck Harold', '65676787', 'nnfranck78@gmail.com', 'Doula', 'moto', 4334, 'name = Franck Harold, phone = 65676787, email = nnfranck78@gmail.com, ville = Doula, vehicle = moto, quantity = 4334, message = JHGJGJHGH'),
('Franck Harold', '32434', 'nnfranck78@gmail.com', 'Doula', '', 354545, 'name = Franck Harold, phone = 32434, email = nnfranck78@gmail.com, ville = Doula, quantity = 354545, message = KJTRKJRTKJ'),
('Franck Harold', '455667', 'nnfranck78@gmail.com', 'Doula', '', 656776, 'name = Franck Harold, phone = 455667, email = nnfranck78@gmail.com, ville = Doula, quantity = 656776, message = HHGHJJH'),
('Franck Harold', '455667', 'nnfranck78@gmail.com', 'Doula', '', 656776, 'name = Franck Harold, phone = 455667, email = nnfranck78@gmail.com, ville = Doula, quantity = 656776, message = HHGHJJH'),
('Franck Harold', '455667', 'nnfranck78@gmail.com', 'Doula', '', 656776, 'name = Franck Harold, phone = 455667, email = nnfranck78@gmail.com, ville = Doula, quantity = 656776, message = HHGHJJH'),
('TEST', '655767535', 'telefretcameroun@gmail.com', 'Douala', 'moto', 2, 'name = TEST, phone = 655767535, email = telefretcameroun@gmail.com, ville = Douala, vehicle = moto, quantity = 2, message = Merci'),
('yannick', '690465196', 'yannicktchiente@gmail.com', 'douala', 'moto', 2, 'name = yannick, phone = 690465196, email = yannicktchiente@gmail.com, ville = douala, vehicle = moto, quantity = 2, message = je souhaite intégrer votre entreprise comme partenaire avec mes deux motos de marque macat   \r\n\r\nje reste à votre disposition pour tout information supplémentaires\r\n\r\nbien cordialement');

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id` int NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `telephone` int NOT NULL,
  `id_chargement` int NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `contenu` text COLLATE utf8mb4_general_ci NOT NULL,
  `statut` int NOT NULL DEFAULT '0',
  `id_postuler` int DEFAULT NULL,
  `to_telephone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `notifications`
--

INSERT INTO `notifications` (`id`, `date`, `telephone`, `id_chargement`, `type`, `contenu`, `statut`, `id_postuler`, `to_telephone`) VALUES
(2, '2023-09-25 09:41:13', 690465196, 1, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 1, '6904651 '),
(4, '2023-09-25 11:08:54', 690465196, 2, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 2, '6904651 '),
(7, '2023-09-25 14:23:39', 6904651, 5, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, NULL, '690465196'),
(11, '2023-09-25 14:54:31', 690465196, 6, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 5, '6904651 '),
(13, '2023-09-25 15:29:41', 690465196, 7, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 6, '6904651 '),
(15, '2023-09-25 15:41:03', 690465196, 8, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 7, '6904651 '),
(20, '2023-09-26 11:54:23', 690465196, 10, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 8, '6904651 '),
(21, '2023-09-26 11:55:18', 690465196, 11, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 9, '6904651 '),
(22, '2023-09-26 11:56:17', 690465196, 12, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 10, '6904651 '),
(27, '2023-09-26 12:11:29', 690465196, 16, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 11, '6904651 '),
(28, '2023-09-26 12:14:06', 690465196, 15, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 12, '6904651 '),
(29, '2023-09-26 12:15:29', 690465196, 14, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 13, '6904651 '),
(32, '2023-09-26 13:15:44', 690465196, 17, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 15, '6904651 '),
(34, '2023-09-26 14:50:46', 690465196, 18, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 16, '6904651 '),
(40, '2023-09-26 15:19:26', 690465196, 23, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 17, '6904651 '),
(41, '2023-09-26 15:20:14', 690465196, 22, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 18, '6904651 '),
(42, '2023-09-26 15:39:50', 690465196, 20, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 19, '6904651 '),
(44, '2023-09-26 15:51:08', 690465196, 24, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 20, '6904651 '),
(45, '2023-09-26 16:01:49', 6904651, 25, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, NULL, '690465196'),
(48, '2023-09-26 17:35:25', 690465196, 21, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 23, '6904651 '),
(50, '2023-09-26 17:57:00', 690465196, 19, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 25, '6904651 '),
(52, '2023-09-27 09:41:30', 690465196, 26, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 26, '6904651 '),
(56, '2023-09-27 10:29:21', 690465196, 27, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 27, '6904651 '),
(57, '2023-09-27 10:29:41', 690465196, 29, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 28, '6904651 '),
(58, '2023-09-27 10:29:54', 690465196, 28, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 29, '6904651 '),
(61, '2023-09-27 11:44:19', 690465196, 30, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 30, '6904651 '),
(62, '2023-09-27 11:45:45', 690465196, 31, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 31, '6904651 '),
(65, '2023-09-27 12:56:58', 690465196, 33, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 32, '6904651 '),
(66, '2023-09-27 14:10:02', 690465196, 32, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 33, '6904651 '),
(70, '2023-09-27 15:23:41', 690465196, 34, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 34, '6904651 '),
(71, '2023-09-27 16:06:36', 690465196, 35, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 35, '6904651 '),
(72, '2023-09-27 16:07:49', 690465196, 36, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 36, '6904651 '),
(74, '2023-09-27 20:55:15', 690465196, 37, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 37, '6904651 '),
(78, '2023-09-28 12:22:28', 690465196, 39, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 39, '6904651 '),
(83, '2023-09-28 16:37:57', 690465196, 41, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 42, '6904651 '),
(84, '2023-09-28 21:41:04', 657140762, 42, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, NULL, '690465196'),
(89, '2023-09-29 17:19:16', 690465196, 44, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 44, '6904651 '),
(95, '2023-09-30 20:03:42', 690465196, 46, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 46, '6904651 '),
(96, '2023-09-30 20:04:09', 690465196, 49, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 47, '6904651 '),
(97, '2023-09-30 20:04:29', 690465196, 48, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 48, '6904651 '),
(98, '2023-09-30 20:04:47', 690465196, 47, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 49, '6904651 '),
(100, '2023-09-30 20:13:53', 690465196, 50, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 50, '6904651 '),
(102, '2023-09-30 20:22:26', 690465196, 51, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 51, '6904651 '),
(103, '2023-10-02 04:07:36', 656003167, 52, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, NULL, '690465196'),
(105, '2023-10-02 10:06:01', 690465196, 53, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 52, '6904651 '),
(109, '2023-10-02 13:03:24', 690465196, 54, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 53, '6904651 '),
(110, '2023-10-02 13:04:13', 690465196, 55, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 54, '6904651 '),
(111, '2023-10-02 13:05:05', 690465196, 56, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 55, '6904651 '),
(113, '2023-10-02 15:23:32', 690465196, 57, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 56, '6904651 '),
(115, '2023-10-02 15:27:52', 690465196, 58, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 57, '6904651 '),
(117, '2023-10-02 15:56:57', 690465196, 59, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 58, '6904651 '),
(124, '2023-10-03 14:08:00', 690465196, 60, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 59, '6904651 '),
(125, '2023-10-03 18:50:41', 690465196, 64, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 60, '6904651 '),
(126, '2023-10-03 18:52:22', 690465196, 65, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 61, '6904651 '),
(128, '2023-10-04 08:58:46', 690465196, 66, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 62, '6904651 '),
(132, '2023-10-04 09:22:20', 690465196, 68, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 64, '6904651 '),
(133, '2023-10-04 10:53:18', 690465196, 61, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 65, '6904651 '),
(135, '2023-10-04 11:02:58', 690465196, 69, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 66, '6904651 '),
(136, '2023-10-04 11:52:43', 690465196, 62, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 67, '6904651 '),
(137, '2023-10-04 11:53:26', 690465196, 63, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 68, '6904651 '),
(140, '2023-10-05 09:56:00', 690465196, 71, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 69, '6904651 '),
(142, '2023-10-05 13:45:01', 690465196, 70, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 70, '6904651 '),
(143, '2023-10-05 13:45:24', 690465196, 72, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 71, '6904651 '),
(146, '2023-10-05 17:13:44', 690465196, 74, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 72, '6904651 '),
(147, '2023-10-05 17:14:06', 690465196, 73, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 73, '6904651 '),
(149, '2023-10-06 12:46:30', 690465196, 75, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 74, '6904651 '),
(152, '2023-10-06 14:17:54', 690465196, 77, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 75, '6904651 '),
(159, '2023-10-06 16:25:10', 690465196, 81, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 77, '6904651 '),
(160, '2023-10-06 16:26:05', 690465196, 80, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 78, '6904651 '),
(161, '2023-10-06 16:27:34', 690465196, 79, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 79, '6904651 '),
(162, '2023-10-06 16:29:04', 690465196, 76, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 80, '6904651 '),
(171, '2023-10-09 09:09:42', 690465196, 85, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 84, '6904651 '),
(172, '2023-10-09 09:10:00', 690465196, 86, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 85, '6904651 '),
(173, '2023-10-09 09:11:59', 690465196, 87, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 86, '6904651 '),
(178, '2023-10-09 16:29:21', 690465196, 89, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 88, '6904651 '),
(179, '2023-10-09 16:47:27', 690465196, 90, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 89, '6904651 '),
(181, '2023-10-10 13:49:42', 690465196, 91, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 90, '6904651 '),
(183, '2023-10-10 15:08:44', 690465196, 92, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 91, '6904651 '),
(185, '2023-10-10 15:29:34', 690465196, 93, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 92, '6904651 '),
(190, '2023-10-10 15:49:52', 690465196, 97, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 93, '6904651 '),
(191, '2023-10-10 15:50:47', 690465196, 95, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 94, '6904651 '),
(192, '2023-10-10 15:51:05', 690465196, 94, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 95, '6904651 '),
(193, '2023-10-10 15:53:29', 690465196, 96, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 96, '6904651 '),
(195, '2023-10-10 17:38:22', 690465196, 98, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 97, '6904651 '),
(201, '2023-10-11 10:04:52', 690465196, 100, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 99, '6904651 '),
(202, '2023-10-11 10:05:30', 690465196, 102, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 100, '6904651 '),
(203, '2023-10-11 12:33:14', 690465196, 101, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 101, '6904651 '),
(205, '2023-10-11 14:21:12', 690465196, 103, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 102, '6904651 '),
(207, '2023-10-11 15:09:50', 690465196, 104, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 103, '6904651 '),
(209, '2023-10-11 15:33:03', 690465196, 105, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 104, '6904651 '),
(219, '2023-10-12 09:21:18', 690465196, 108, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 107, '6904651 '),
(220, '2023-10-12 09:21:32', 690465196, 112, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 108, '6904651 '),
(221, '2023-10-12 09:21:48', 690465196, 111, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 109, '6904651 '),
(225, '2023-10-12 12:51:29', 690465196, 113, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 112, '6904651 '),
(248, '2023-10-14 11:56:38', 690465196, 124, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 123, '6904651 '),
(250, '2023-10-14 12:16:45', 690465196, 125, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 125, '6904651 '),
(253, '2023-10-14 12:26:51', 690465196, 126, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 126, '6904651 '),
(254, '2023-10-14 12:27:54', 690465196, 127, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 127, '6904651 '),
(256, '2023-10-14 13:52:37', 690465196, 128, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 128, '6904651 '),
(258, '2023-10-14 15:17:45', 690465196, 129, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 129, '6904651 '),
(260, '2023-10-14 16:32:54', 690465196, 130, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 130, '6904651 '),
(269, '2023-10-16 14:36:39', 690465196, 132, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 132, '6904651 '),
(270, '2023-10-16 14:38:28', 690465196, 134, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 133, '6904651 '),
(278, '2023-10-16 16:32:46', 690465196, 133, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 137, '6904651 '),
(279, '2023-10-16 16:47:34', 690465196, 140, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 138, '6904651 '),
(280, '2023-10-16 16:48:44', 690465196, 141, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 139, '6904651 '),
(282, '2023-10-16 17:25:18', 690465196, 142, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 140, '6904651 '),
(283, '2023-10-16 17:26:07', 690465196, 139, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 141, '6904651 '),
(284, '2023-10-16 17:26:42', 690465196, 138, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 142, '6904651 '),
(286, '2023-10-16 18:04:53', 690465196, 143, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 143, '6904651 '),
(288, '2023-10-17 09:21:22', 690465196, 144, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 144, '6904651 '),
(290, '2023-10-17 10:35:18', 690465196, 145, 'Soumission', 'Vous avez une nouvelle proposition de transport.', 0, 145, '6904651 ');

-- --------------------------------------------------------

--
-- Structure de la table `postuler`
--

CREATE TABLE `postuler` (
  `id` int NOT NULL,
  `vehicules` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `avance` float NOT NULL,
  `montant` float NOT NULL,
  `telephone` int NOT NULL,
  `date_soumission` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_chargement` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `message` text COLLATE utf8mb4_general_ci NOT NULL,
  `devise` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `postuler`
--

INSERT INTO `postuler` (`id`, `vehicules`, `avance`, `montant`, `telephone`, `date_soumission`, `id_chargement`, `status`, `message`, `devise`) VALUES
(1, ';2', 0, 0, 6904651, '2023-09-25 09:41:13', 1, 0, '                                             ', 'FCFA'),
(2, ';2', 0, 0, 6904651, '2023-09-25 11:08:54', 2, 0, '                                             ', 'FCFA'),
(3, ';4', 0, 0, 6904651, '2023-09-25 14:26:38', 3, 0, '                                             ', 'FCFA'),
(4, ';2', 0, 0, 6904651, '2023-09-25 14:37:11', 4, 0, '                                             ', 'FCFA'),
(5, ';4', 0, 0, 6904651, '2023-09-25 14:54:31', 6, 0, '                                             ', 'FCFA'),
(6, ';2', 0, 0, 6904651, '2023-09-25 15:29:41', 7, 0, '                                             ', 'FCFA'),
(7, ';2', 0, 0, 6904651, '2023-09-25 15:41:03', 8, 0, '                                             ', 'FCFA'),
(8, ';4', 0, 0, 6904651, '2023-09-26 11:54:23', 10, 0, '                                             ', 'FCFA'),
(9, ';4', 0, 0, 6904651, '2023-09-26 11:55:18', 11, 0, '                                             ', 'FCFA'),
(10, ';4', 0, 0, 6904651, '2023-09-26 11:56:17', 12, 0, '                                             ', 'FCFA'),
(11, ';2', 0, 0, 6904651, '2023-09-26 12:11:29', 16, 0, '                                             ', 'FCFA'),
(12, ';2', 0, 0, 6904651, '2023-09-26 12:14:06', 15, 0, '                                             ', 'FCFA'),
(13, ';2', 0, 0, 6904651, '2023-09-26 12:15:29', 14, 0, '                                             ', 'FCFA'),
(14, ';2', 0, 0, 6904651, '2023-09-26 12:16:53', 13, 0, '                                             ', 'FCFA'),
(15, ';4', 0, 0, 6904651, '2023-09-26 13:15:44', 17, 0, '                                             ', 'FCFA'),
(16, ';4', 0, 0, 6904651, '2023-09-26 14:50:46', 18, 0, '                                             ', 'FCFA'),
(17, ';4', 0, 0, 6904651, '2023-09-26 15:19:26', 23, 0, '                                             ', 'FCFA'),
(18, ';4', 0, 0, 6904651, '2023-09-26 15:20:14', 22, 0, '                                             ', 'FCFA'),
(19, ';4', 0, 0, 6904651, '2023-09-26 15:39:50', 20, 0, '                                             ', 'FCFA'),
(20, ';4', 0, 0, 6904651, '2023-09-26 15:51:08', 24, 0, '                                             ', 'FCFA'),
(21, ';4', 0, 0, 6904651, '2023-09-26 16:39:41', 9, 0, '                                             ', 'FCFA'),
(22, ';4', 0, 0, 6904651, '2023-09-26 17:04:49', 19, 0, '                                             ', 'FCFA'),
(23, ';2', 0, 0, 6904651, '2023-09-26 17:35:25', 21, 0, '                                             ', 'FCFA'),
(24, ';2', 0, 0, 6904651, '2023-09-26 17:56:27', 9, 0, '                                             ', 'FCFA'),
(25, ';2', 0, 0, 6904651, '2023-09-26 17:57:00', 19, 0, '                                             ', 'FCFA'),
(26, ';2', 0, 0, 6904651, '2023-09-27 09:41:30', 26, 0, '                                             ', 'FCFA'),
(27, ';2', 0, 0, 6904651, '2023-09-27 10:29:21', 27, 0, '                                             ', 'FCFA'),
(28, ';2', 0, 0, 6904651, '2023-09-27 10:29:41', 29, 0, '                                             ', 'FCFA'),
(29, ';2', 0, 0, 6904651, '2023-09-27 10:29:54', 28, 0, '                                             ', 'FCFA'),
(30, ';4', 0, 0, 6904651, '2023-09-27 11:44:19', 30, 0, '                                             ', 'FCFA'),
(31, ';2', 0, 0, 6904651, '2023-09-27 11:45:45', 31, 0, '                                             ', 'FCFA'),
(32, ';3;2', 0, 0, 6904651, '2023-09-27 12:56:58', 33, 0, '                                             ', 'FCFA'),
(33, ';4', 0, 0, 6904651, '2023-09-27 14:10:02', 32, 0, '                                             ', 'FCFA'),
(34, ';2', 0, 0, 6904651, '2023-09-27 15:23:41', 34, 0, '                                             ', 'FCFA'),
(35, ';4', 0, 0, 6904651, '2023-09-27 16:06:36', 35, 0, '                                             ', 'FCFA'),
(36, ';4', 0, 0, 6904651, '2023-09-27 16:07:49', 36, 0, '                                             ', 'FCFA'),
(37, ';2', 0, 0, 6904651, '2023-09-27 20:55:15', 37, 0, '                                             ', 'FCFA'),
(38, ';2', 0, 0, 6904651, '2023-09-28 12:09:47', 38, 0, '                                             ', 'FCFA'),
(39, ';4', 0, 0, 6904651, '2023-09-28 12:22:28', 39, 0, '                                             ', 'FCFA'),
(40, ';2', 0, 0, 6904651, '2023-09-28 15:31:36', 40, 0, '                                             ', 'FCFA'),
(41, ';2', 0, 0, 6904651, '2023-09-28 15:32:14', 40, 0, '                                             ', 'FCFA'),
(42, ';4', 0, 0, 6904651, '2023-09-28 16:37:57', 41, 0, '                                             ', 'FCFA'),
(43, ';4', 0, 0, 6904651, '2023-09-29 09:34:49', 43, 0, '                                             ', 'FCFA'),
(44, ';2', 0, 0, 6904651, '2023-09-29 17:19:16', 44, 0, '                                             ', 'FCFA'),
(45, ';2', 0, 0, 6904651, '2023-09-29 17:19:37', 45, 0, '                                             ', 'FCFA'),
(46, ';2', 0, 0, 6904651, '2023-09-30 20:03:42', 46, 0, '                                             ', 'FCFA'),
(47, ';2', 0, 0, 6904651, '2023-09-30 20:04:09', 49, 0, '                                             ', 'FCFA'),
(48, ';2', 0, 0, 6904651, '2023-09-30 20:04:29', 48, 0, '                                             ', 'FCFA'),
(49, ';2', 0, 0, 6904651, '2023-09-30 20:04:47', 47, 0, '                                             ', 'FCFA'),
(50, ';2', 0, 0, 6904651, '2023-09-30 20:13:53', 50, 0, '                                             ', 'FCFA'),
(51, ';2', 0, 0, 6904651, '2023-09-30 20:22:26', 51, 0, '                                             ', 'FCFA'),
(52, ';2', 0, 0, 6904651, '2023-10-02 10:06:01', 53, 0, '                                             ', 'FCFA'),
(53, ';6', 0, 0, 6904651, '2023-10-02 13:03:24', 54, 0, '                                             ', 'FCFA'),
(54, ';6', 0, 0, 6904651, '2023-10-02 13:04:13', 55, 0, '                                             ', 'FCFA'),
(55, ';6', 0, 0, 6904651, '2023-10-02 13:05:05', 56, 0, '                                             ', 'FCFA'),
(56, ';6', 0, 0, 6904651, '2023-10-02 15:23:32', 57, 0, '                                             ', 'FCFA'),
(57, ';2', 0, 0, 6904651, '2023-10-02 15:27:52', 58, 0, '                                             ', 'FCFA'),
(58, ';2', 0, 0, 6904651, '2023-10-02 15:56:57', 59, 0, '                                             ', 'FCFA'),
(59, ';6', 0, 0, 6904651, '2023-10-03 14:08:00', 60, 0, '                                             ', 'FCFA'),
(60, ';4', 0, 0, 6904651, '2023-10-03 18:50:41', 64, 0, '                                             ', 'FCFA'),
(61, ';6', 0, 0, 6904651, '2023-10-03 18:52:22', 65, 0, '                                             ', 'FCFA'),
(62, ';4', 0, 0, 6904651, '2023-10-04 08:58:46', 66, 0, '                                             ', 'FCFA'),
(63, ';2', 0, 0, 6904651, '2023-10-04 09:18:41', 67, 0, '                                             ', 'FCFA'),
(64, ';4', 0, 0, 6904651, '2023-10-04 09:22:20', 68, 0, '                                             ', 'FCFA'),
(65, ';6', 0, 0, 6904651, '2023-10-04 10:53:18', 61, 0, '                                             ', 'FCFA'),
(66, ';6', 0, 0, 6904651, '2023-10-04 11:02:58', 69, 0, '                                             ', 'FCFA'),
(67, ';2', 0, 0, 6904651, '2023-10-04 11:52:43', 62, 0, '                                             ', 'FCFA'),
(68, ';4', 0, 0, 6904651, '2023-10-04 11:53:26', 63, 0, '                                             ', 'FCFA'),
(69, ';2', 0, 0, 6904651, '2023-10-05 09:56:00', 71, 0, '                                             ', 'FCFA'),
(70, ';4', 0, 0, 6904651, '2023-10-05 13:45:01', 70, 0, '                                             ', 'FCFA'),
(71, ';4', 0, 0, 6904651, '2023-10-05 13:45:24', 72, 0, '                                             ', 'FCFA'),
(72, ';3', 0, 0, 6904651, '2023-10-05 17:13:44', 74, 0, '                                             ', 'FCFA'),
(73, ';4', 0, 0, 6904651, '2023-10-05 17:14:06', 73, 0, '                                             ', 'FCFA'),
(74, ';2', 0, 0, 6904651, '2023-10-06 12:46:30', 75, 0, '                                             ', 'FCFA'),
(75, ';6', 0, 0, 6904651, '2023-10-06 14:17:54', 77, 0, '                                             ', 'FCFA'),
(76, ';3', 0, 0, 6904651, '2023-10-06 14:47:04', 78, 0, '                                             ', 'FCFA'),
(77, ';4', 0, 0, 6904651, '2023-10-06 16:25:10', 81, 0, '                                             ', 'FCFA'),
(78, ';4', 0, 0, 6904651, '2023-10-06 16:26:05', 80, 0, '                                             ', 'FCFA'),
(79, ';4', 0, 0, 6904651, '2023-10-06 16:27:34', 79, 0, '                                             ', 'FCFA'),
(80, ';4', 0, 0, 6904651, '2023-10-06 16:29:04', 76, 0, '                                             ', 'FCFA'),
(81, ';4', 0, 0, 6904651, '2023-10-06 18:09:30', 82, 0, '                                             ', 'FCFA'),
(82, ';4', 0, 0, 6904651, '2023-10-07 12:43:38', 83, 0, '                                             ', 'FCFA'),
(83, ';5', 0, 0, 6904651, '2023-10-07 18:03:04', 84, 0, '                                             ', 'FCFA'),
(84, ';2', 0, 0, 6904651, '2023-10-09 09:09:42', 85, 0, '                                             ', 'FCFA'),
(85, ';4', 0, 0, 6904651, '2023-10-09 09:10:00', 86, 0, '                                             ', 'FCFA'),
(86, ';4', 0, 0, 6904651, '2023-10-09 09:11:59', 87, 0, '                                             ', 'FCFA'),
(87, ';4', 0, 0, 6904651, '2023-10-09 10:34:18', 88, 0, '                                             ', 'FCFA'),
(88, ';2', 0, 0, 6904651, '2023-10-09 16:29:21', 89, 0, '                                             ', 'FCFA'),
(89, ';2', 0, 0, 6904651, '2023-10-09 16:47:27', 90, 0, '                                             ', 'FCFA'),
(90, ';2', 0, 0, 6904651, '2023-10-10 13:49:42', 91, 0, '                                             ', 'FCFA'),
(91, ';3', 0, 0, 6904651, '2023-10-10 15:08:44', 92, 0, '                                             ', 'FCFA'),
(92, ';2', 0, 0, 6904651, '2023-10-10 15:29:34', 93, 0, '                                             ', 'FCFA'),
(93, ';4', 0, 0, 6904651, '2023-10-10 15:49:52', 97, 0, '                                             ', 'FCFA'),
(94, ';4', 0, 0, 6904651, '2023-10-10 15:50:47', 95, 0, '                                             ', 'FCFA'),
(95, ';4', 0, 0, 6904651, '2023-10-10 15:51:05', 94, 0, '                                             ', 'FCFA'),
(96, ';4', 0, 0, 6904651, '2023-10-10 15:53:29', 96, 0, '                                             ', 'FCFA'),
(97, ';2', 0, 0, 6904651, '2023-10-10 17:38:22', 98, 0, '                                             ', 'FCFA'),
(98, ';2', 0, 0, 6904651, '2023-10-10 17:58:32', 99, 0, '                                             ', 'FCFA'),
(99, ';6', 0, 0, 6904651, '2023-10-11 10:04:52', 100, 0, '                                             ', 'FCFA'),
(100, ';6', 0, 0, 6904651, '2023-10-11 10:05:30', 102, 0, '                                             ', 'FCFA'),
(101, ';2', 0, 0, 6904651, '2023-10-11 12:33:14', 101, 0, '                                             ', 'FCFA'),
(102, ';4', 0, 0, 6904651, '2023-10-11 14:21:12', 103, 0, '                                             ', 'FCFA'),
(103, ';2', 0, 0, 6904651, '2023-10-11 15:09:50', 104, 0, '                                             ', 'FCFA'),
(104, ';4', 0, 0, 6904651, '2023-10-11 15:33:03', 105, 0, '                                             ', 'FCFA'),
(105, ';6', 0, 0, 6904651, '2023-10-11 16:46:04', 106, 0, '                                             ', 'FCFA'),
(106, ';2', 0, 0, 6904651, '2023-10-12 08:46:18', 107, 0, '                                             ', 'FCFA'),
(107, ';2', 0, 0, 6904651, '2023-10-12 09:21:18', 108, 0, '                                             ', 'FCFA'),
(108, ';2', 0, 0, 6904651, '2023-10-12 09:21:32', 112, 0, '                                             ', 'FCFA'),
(109, ';2', 0, 0, 6904651, '2023-10-12 09:21:48', 111, 0, '                                             ', 'FCFA'),
(110, ';2', 0, 0, 6904651, '2023-10-12 09:23:13', 110, 0, '                                             ', 'FCFA'),
(111, ';2', 0, 0, 6904651, '2023-10-12 09:23:51', 109, 0, '                                             ', 'FCFA'),
(112, ';2', 0, 0, 6904651, '2023-10-12 12:51:29', 113, 0, '                                             ', 'FCFA'),
(113, ';3', 0, 0, 6904651, '2023-10-13 14:07:19', 114, 0, '                                             ', 'FCFA'),
(114, ';3', 0, 0, 6904651, '2023-10-13 14:07:55', 116, 0, '                                             ', 'FCFA'),
(115, ';2', 0, 0, 6904651, '2023-10-13 14:35:24', 115, 0, '                                             ', 'FCFA'),
(116, ';2', 0, 0, 6904651, '2023-10-13 15:23:13', 121, 0, '                                             ', 'FCFA'),
(117, ';3', 0, 0, 6904651, '2023-10-13 15:43:01', 118, 0, '                                             ', 'FCFA'),
(118, ';4', 0, 0, 6904651, '2023-10-13 16:59:48', 122, 0, '                                             ', 'FCFA'),
(119, ';2', 0, 0, 6904651, '2023-10-13 17:02:11', 120, 0, '                                             ', 'FCFA'),
(120, ';2', 0, 0, 6904651, '2023-10-13 17:02:40', 119, 0, '                                             ', 'FCFA'),
(121, ';2', 0, 0, 6904651, '2023-10-13 17:03:02', 117, 0, '                                             ', 'FCFA'),
(122, ';2', 0, 0, 6904651, '2023-10-13 17:48:36', 123, 0, '                                             ', 'FCFA'),
(123, ';2', 0, 0, 6904651, '2023-10-14 11:56:38', 124, 0, '                                             ', 'FCFA'),
(124, ';4', 0, 0, 6904651, '2023-10-14 11:57:18', 125, 0, '                                             ', 'FCFA'),
(125, ';3', 0, 0, 6904651, '2023-10-14 12:16:45', 125, 0, '                                             ', 'FCFA'),
(126, ';3', 0, 0, 6904651, '2023-10-14 12:26:51', 126, 0, '                                             ', 'FCFA'),
(127, ';4', 0, 0, 6904651, '2023-10-14 12:27:54', 127, 0, '                                             ', 'FCFA'),
(128, ';4', 0, 0, 6904651, '2023-10-14 13:52:37', 128, 0, '                                             ', 'FCFA'),
(129, ';4', 0, 0, 6904651, '2023-10-14 15:17:45', 129, 0, '                                             ', 'FCFA'),
(130, ';6', 0, 0, 6904651, '2023-10-14 16:32:54', 130, 0, '                                             ', 'FCFA'),
(131, ';2', 0, 0, 6904651, '2023-10-16 13:19:39', 135, 0, '                                             ', 'FCFA'),
(132, ';3', 0, 0, 6904651, '2023-10-16 14:36:39', 132, 0, '                                             ', 'FCFA'),
(133, ';3', 0, 0, 6904651, '2023-10-16 14:38:28', 134, 0, '                                             ', 'FCFA'),
(134, ';3', 0, 0, 6904651, '2023-10-16 15:07:27', 136, 0, '                                             ', 'FCFA'),
(135, ';3', 0, 0, 6904651, '2023-10-16 15:08:27', 137, 0, '                                             ', 'FCFA'),
(136, ';2', 0, 0, 6904651, '2023-10-16 15:13:37', 131, 0, '                                             ', 'FCFA'),
(137, ';2', 0, 0, 6904651, '2023-10-16 16:32:46', 133, 0, '                                             ', 'FCFA'),
(138, ';2', 0, 0, 6904651, '2023-10-16 16:47:34', 140, 0, '                                             ', 'FCFA'),
(139, ';2', 0, 0, 6904651, '2023-10-16 16:48:44', 141, 0, '                                             ', 'FCFA'),
(140, ';4', 0, 0, 6904651, '2023-10-16 17:25:18', 142, 0, '                                             ', 'FCFA'),
(141, ';4', 0, 0, 6904651, '2023-10-16 17:26:07', 139, 0, '                                             ', 'FCFA'),
(142, ';4', 0, 0, 6904651, '2023-10-16 17:26:42', 138, 0, '                                             ', 'FCFA'),
(143, ';2', 0, 0, 6904651, '2023-10-16 18:04:53', 143, 0, '                                             ', 'FCFA'),
(144, ';2', 0, 0, 6904651, '2023-10-17 09:21:22', 144, 0, '                                             ', 'FCFA'),
(145, ';4', 0, 0, 6904651, '2023-10-17 10:35:18', 145, 0, '                                             ', 'FCFA'),
(146, ';4', 0, 0, 6904651, '2023-10-17 18:06:59', 146, 0, '                                             ', 'FCFA');

-- --------------------------------------------------------

--
-- Structure de la table `pub`
--

CREATE TABLE `pub` (
  `id` int NOT NULL,
  `image1` varchar(20) DEFAULT NULL,
  `image2` varchar(20) DEFAULT NULL,
  `image3` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `status_gps`
--

CREATE TABLE `status_gps` (
  `Id_status` int NOT NULL,
  `ID_gps` varchar(20) NOT NULL,
  `Date_D` varchar(255) NOT NULL,
  `Date_F` varchar(255) NOT NULL,
  `Etat` int NOT NULL,
  `Id_abonnement` varchar(20) NOT NULL,
  `Id_dispo` int NOT NULL,
  `id_chargement` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `status_gps`
--

INSERT INTO `status_gps` (`Id_status`, `ID_gps`, `Date_D`, `Date_F`, `Etat`, `Id_abonnement`, `Id_dispo`, `id_chargement`) VALUES
(1, '859707', '1970-01-01', '1970-01-01', 0, '2', 1, 1),
(2, '859707', '1970-01-01', '1970-01-01', 0, '2', 2, 2),
(3, '859704', '1970-01-01', '1970-01-01', 0, '4', 3, 3),
(4, '859707', '1970-01-01', '1970-01-01', 0, '2', 4, 4),
(5, '859704', '1970-01-01', '1970-01-01', 0, '4', 5, 6),
(6, '859707', '1970-01-01', '1970-01-01', 0, '2', 6, 7),
(7, '859707', '1970-01-01', '1970-01-01', 0, '2', 7, 8),
(8, '859704', '1970-01-01', '1970-01-01', 0, '4', 8, 10),
(9, '859704', '1970-01-01', '1970-01-01', 0, '4', 9, 11),
(10, '859704', '1970-01-01', '1970-01-01', 0, '4', 10, 12),
(11, '859707', '1970-01-01', '1970-01-01', 0, '2', 11, 16),
(12, '859707', '1970-01-01', '1970-01-01', 0, '2', 12, 15),
(13, '859707', '1970-01-01', '1970-01-01', 0, '2', 13, 14),
(14, '859707', '1970-01-01', '1970-01-01', 0, '2', 14, 13),
(15, '859704', '1970-01-01', '1970-01-01', 0, '4', 15, 17),
(16, '859704', '1970-01-01', '1970-01-01', 0, '4', 16, 18),
(17, '859704', '1970-01-01', '1970-01-01', 0, '4', 17, 23),
(18, '859704', '1970-01-01', '1970-01-01', 0, '4', 18, 22),
(19, '859704', '1970-01-01', '1970-01-01', 0, '4', 0, 20),
(20, '859704', '1970-01-01', '1970-01-01', 0, '4', 19, 24),
(23, '859707', '1970-01-01', '1970-01-01', 0, '2', 22, 21),
(24, '859707', '1970-01-01', '1970-01-01', 0, '2', 23, 9),
(25, '859707', '1970-01-01', '1970-01-01', 0, '2', 24, 19),
(26, '859707', '1970-01-01', '1970-01-01', 0, '2', 25, 26),
(27, '859707', '1970-01-01', '1970-01-01', 0, '2', 26, 27),
(28, '859707', '1970-01-01', '1970-01-01', 0, '2', 27, 29),
(29, '859707', '1970-01-01', '1970-01-01', 0, '2', 28, 28),
(30, '859704', '1970-01-01', '1970-01-01', 0, '4', 29, 30),
(31, '859707', '1970-01-01', '1970-01-01', 0, '2', 30, 31),
(32, '859706', '1970-01-01', '1970-01-01', 0, '3', 31, 33),
(33, '859707', '1970-01-01', '1970-01-01', 0, '2', 32, 33),
(34, '859704', '1970-01-01', '1970-01-01', 0, '4', 33, 32),
(35, '859707', '1970-01-01', '1970-01-01', 0, '2', 34, 34),
(36, '859704', '1970-01-01', '1970-01-01', 0, '4', 35, 35),
(37, '859704', '1970-01-01', '1970-01-01', 0, '4', 36, 36),
(38, '859707', '1970-01-01', '1970-01-01', 0, '2', 37, 37),
(39, '859707', '1970-01-01', '1970-01-01', 0, '2', 38, 38),
(40, '859704', '1970-01-01', '1970-01-01', 0, '4', 39, 39),
(42, '859707', '1970-01-01', '1970-01-01', 0, '2', 41, 40),
(43, '859704', '1970-01-01', '1970-01-01', 0, '4', 42, 41),
(44, '859704', '1970-01-01', '1970-01-01', 0, '4', 43, 43),
(45, '859707', '1970-01-01', '1970-01-01', 0, '2', 44, 44),
(46, '859707', '1970-01-01', '1970-01-01', 0, '2', 45, 45),
(47, '859707', '1970-01-01', '1970-01-01', 0, '2', 46, 46),
(48, '859707', '1970-01-01', '1970-01-01', 0, '2', 47, 49),
(49, '859707', '1970-01-01', '1970-01-01', 0, '2', 48, 48),
(50, '859707', '1970-01-01', '1970-01-01', 0, '2', 49, 47),
(51, '859707', '1970-01-01', '1970-01-01', 0, '2', 50, 50),
(52, '859707', '1970-01-01', '1970-01-01', 0, '2', 51, 51),
(53, '859707', '2023-02-10', '2023-02-10', 0, '2', 52, 53),
(54, '859705', '2023-02-10', '2023-02-10', 0, '6', 53, 54),
(55, '859705', '2023-02-10', '2023-02-10', 0, '6', 54, 55),
(56, '859705', '2023-02-10', '2023-02-10', 0, '6', 55, 56),
(57, '859705', '2023-02-10', '2023-02-10', 0, '6', 56, 57),
(58, '859707', '2023-02-10', '2023-02-10', 0, '2', 57, 58),
(59, '859707', '2023-02-10', '2023-02-10', 0, '2', 58, 59),
(60, '859705', '2023-03-10', '2023-03-10', 0, '6', 59, 60),
(61, '859704', '2023-03-10', '2023-03-10', 0, '4', 0, 64),
(62, '859705', '2023-03-10', '2023-03-10', 0, '6', 60, 65),
(63, '859704', '2023-04-10', '2023-04-10', 0, '4', 61, 66),
(64, '859707', '2023-04-10', '2023-04-10', 0, '2', 62, 67),
(65, '859704', '2023-04-10', '2023-04-10', 0, '4', 63, 68),
(66, '859705', '2023-04-10', '2023-04-10', 0, '6', 64, 61),
(67, '859705', '2023-04-10', '2023-04-10', 0, '6', 0, 69),
(68, '859707', '2023-04-10', '2023-04-10', 0, '2', 65, 62),
(69, '859704', '2023-04-10', '2023-04-10', 0, '4', 0, 63),
(70, '859707', '2023-05-10', '2023-05-10', 0, '2', 66, 71),
(71, '859704', '2023-05-10', '2023-05-10', 0, '4', 67, 70),
(72, '859704', '2023-05-10', '2023-05-10', 0, '4', 68, 72),
(73, '859706', '2023-05-10', '2023-05-10', 0, '3', 69, 74),
(74, '859704', '2023-05-10', '2023-05-10', 0, '4', 70, 73),
(75, '859707', '2023-06-10', '2023-06-10', 0, '2', 71, 75),
(76, '859705', '2023-06-10', '2023-06-10', 0, '6', 72, 77),
(77, '859706', '2023-06-10', '2023-06-10', 0, '3', 73, 78),
(78, '859704', '2023-06-10', '2023-06-10', 0, '4', 74, 81),
(79, '859704', '2023-06-10', '2023-06-10', 0, '4', 75, 80),
(80, '859704', '2023-06-10', '2023-06-10', 0, '4', 76, 79),
(81, '859704', '2023-06-10', '2023-06-10', 0, '4', 77, 76),
(82, '859704', '2023-06-10', '2023-06-10', 0, '4', 78, 82),
(83, '859704', '2023-07-10', '2023-07-10', 0, '4', 79, 83),
(84, '859703', '2023-07-10', '2023-07-10', 0, '5', 80, 84),
(85, '859707', '2023-09-10', '2023-09-10', 0, '2', 81, 85),
(86, '859704', '2023-09-10', '2023-09-10', 0, '4', 82, 86),
(87, '859704', '2023-09-10', '2023-09-10', 0, '4', 83, 87),
(88, '859704', '2023-09-10', '2023-09-10', 0, '4', 84, 88),
(89, '859707', '2023-09-10', '2023-09-10', 0, '2', 85, 89),
(90, '859707', '2023-09-10', '2023-09-10', 0, '2', 86, 90),
(91, '859707', '2023-10-10', '2023-10-10', 0, '2', 87, 91),
(92, '859706', '2023-10-10', '2023-10-10', 0, '3', 88, 92),
(93, '859707', '2023-10-10', '2023-10-10', 0, '2', 89, 93),
(94, '859704', '2023-10-10', '2023-10-10', 0, '4', 90, 97),
(95, '859704', '2023-10-10', '2023-10-10', 0, '4', 91, 95),
(96, '859704', '2023-10-10', '2023-10-10', 0, '4', 92, 94),
(97, '859704', '2023-10-10', '2023-10-10', 0, '4', 93, 96),
(98, '859707', '2023-10-10', '2023-10-10', 0, '2', 94, 98),
(99, '859707', '2023-10-10', '2023-10-10', 0, '2', 95, 99),
(100, '859705', '2023-11-10', '2023-11-10', 0, '6', 96, 100),
(101, '859705', '2023-11-10', '2023-11-10', 0, '6', 97, 102),
(102, '859707', '2023-11-10', '2023-11-10', 0, '2', 98, 101),
(103, '859704', '2023-11-10', '2023-11-10', 0, '4', 99, 103),
(104, '859707', '2023-11-10', '2023-11-10', 0, '2', 0, 104),
(105, '859704', '2023-11-10', '2023-11-10', 0, '4', 100, 105),
(106, '859705', '2023-11-10', '2023-11-10', 0, '6', 101, 106),
(107, '859707', '2023-12-10', '2023-12-10', 0, '2', 102, 107),
(108, '859707', '2023-12-10', '2023-12-10', 0, '2', 103, 108),
(109, '859707', '2023-12-10', '2023-12-10', 0, '2', 104, 112),
(110, '859707', '2023-12-10', '2023-12-10', 0, '2', 105, 111),
(111, '859707', '2023-12-10', '2023-12-10', 0, '2', 106, 110),
(112, '859707', '2023-12-10', '2023-12-10', 0, '2', 107, 109),
(113, '859707', '2023-12-10', '2023-12-10', 0, '2', 108, 113),
(114, '859706', '1970-01-01', '1970-01-01', 0, '3', 109, 114),
(115, '859706', '1970-01-01', '1970-01-01', 0, '3', 110, 116),
(116, '859707', '1970-01-01', '1970-01-01', 0, '2', 111, 115),
(117, '859707', '1970-01-01', '1970-01-01', 0, '2', 112, 121),
(118, '859706', '1970-01-01', '1970-01-01', 0, '3', 113, 118),
(119, '859704', '1970-01-01', '1970-01-01', 0, '4', 114, 122),
(120, '859707', '1970-01-01', '1970-01-01', 0, '2', 115, 120),
(121, '859707', '1970-01-01', '1970-01-01', 0, '2', 116, 119),
(122, '859707', '1970-01-01', '1970-01-01', 0, '2', 117, 117),
(123, '859707', '1970-01-01', '1970-01-01', 0, '2', 118, 123),
(124, '859707', '1970-01-01', '1970-01-01', 0, '2', 119, 124),
(126, '859706', '1970-01-01', '1970-01-01', 0, '3', 121, 125),
(127, '859706', '1970-01-01', '1970-01-01', 0, '3', 122, 126),
(128, '859704', '1970-01-01', '1970-01-01', 0, '4', 123, 127),
(129, '859704', '1970-01-01', '1970-01-01', 0, '4', 124, 128),
(130, '859704', '1970-01-01', '1970-01-01', 0, '4', 125, 129),
(131, '859705', '1970-01-01', '1970-01-01', 0, '6', 0, 130),
(132, '859707', '1970-01-01', '1970-01-01', 0, '2', 126, 135),
(133, '859706', '1970-01-01', '1970-01-01', 0, '3', 127, 132),
(134, '859706', '1970-01-01', '1970-01-01', 0, '3', 128, 134),
(135, '859706', '1970-01-01', '1970-01-01', 0, '3', 129, 136),
(136, '859706', '1970-01-01', '1970-01-01', 0, '3', 130, 137),
(137, '859707', '1970-01-01', '1970-01-01', 0, '2', 0, 131),
(138, '859707', '1970-01-01', '1970-01-01', 0, '2', 131, 133),
(139, '859707', '1970-01-01', '1970-01-01', 0, '2', 132, 140),
(140, '859707', '1970-01-01', '1970-01-01', 0, '2', 133, 141),
(141, '859704', '1970-01-01', '1970-01-01', 0, '4', 134, 142),
(142, '859704', '1970-01-01', '1970-01-01', 0, '4', 135, 139),
(143, '859704', '1970-01-01', '1970-01-01', 0, '4', 136, 138),
(144, '859707', '1970-01-01', '1970-01-01', 0, '2', 137, 143),
(145, '859707', '1970-01-01', '1970-01-01', 0, '2', 138, 144),
(146, '859704', '1970-01-01', '1970-01-01', 0, '4', 139, 145),
(147, '859704', '1970-01-01', '1970-01-01', 0, '4', 140, 146);

-- --------------------------------------------------------

--
-- Structure de la table `transporteur`
--

CREATE TABLE `transporteur` (
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `r_s` mediumtext NOT NULL,
  `pays` varchar(30) NOT NULL,
  `adresse` varchar(80) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `date_limite` varchar(10) NOT NULL,
  `note` double NOT NULL,
  `nb_note` int NOT NULL,
  `total_note` int NOT NULL,
  `verif` int NOT NULL,
  `code` varchar(11) NOT NULL,
  `indicatif` varchar(11) NOT NULL,
  `Date_inscri` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `transporteur`
--

INSERT INTO `transporteur` (`nom`, `prenom`, `r_s`, `pays`, `adresse`, `telephone`, `email`, `password`, `type`, `genre`, `date_limite`, `note`, `nb_note`, `total_note`, `verif`, `code`, `indicatif`, `Date_inscri`) VALUES
('admin', 'TELEFRET', 'Telefret', 'Cameroun', 'Cameroun', '6904651 ', 'contact@telefret.com', 'telefretadmin01', 'admin', 'entreprise', '00/00/0000', 0, 0, 0, 1, '', '00237', ''),
('TELEMEX', 'TELEMEX', '', 'Cameroun', 'logpom, douala', '690465196', 'commercial@telemex.cm', 'telemexadmin@01', 'transporteur', 'particulier', '03/04/2021', 0, 0, 0, 1, '0211', '00237', ''),
('tegue deffo', 'stephane jospin', ' ', '', 'douala', '659976149', 'jospintegue@gmail.com', 'jospin237', 'client', '', '04/06/2023', 0, 0, 0, 1, '7132', '00237', '04/05/2023'),
('NTEUKAP NJOMOU', 'Franck Harold', ' ', '', 'Logbaba, Apartment', '06 95 16 43 68', 'nnfranck78@gmail.com', 'nnfhzb', 'client', '', '10/05/2023', 0, 0, 0, 1, '4590', '00237', '10/04/2023'),
('FUNGA ', 'Gautier', ' ', '', 'Douala', '656003167', 'gautierfunga18@gmail.com', 'gautier7', 'client', '', '10/05/2023', 0, 0, 0, 1, '5189', '00237', '10/04/2023'),
('CiKa', 'Collection', ' ', '', 'Douala', '697567246', 'katouchafoben54@gmail.com', 'katou54', 'client', '', '12/05/2023', 0, 0, 0, 1, '4173', '00237', '12/04/2023'),
('Moumbe', 'Steve Christian', ' ', '', 'douala', '670133880', 'technochris25@gmail.com', 'chris25', 'client', '', '13/05/2023', 0, 0, 0, 1, '8959', '00237', '13/04/2023'),
('TSAPI', 'Martin', ' ', '', 'bertoua', '672239562', 'yannicktchiente@gmail.com', 'tsapi2023', 'client', '', '15/05/2023', 0, 0, 0, 1, '7121', '00237', '15/04/2023'),
('prince', 'yaya', ' ', '', 'dschang', '455666776', 'admin@gmail.com', '12345678', 'client', '', '04/06/2023', 0, 0, 0, 1, '8931', '00237', '04/05/2023'),
('DONTSOP', 'CYRILLE', ' ', '', 'DOUALA', '691619599', 'cyrille.dontsop1@gmail.com', 'esther93', 'client', '', '21/05/2023', 0, 0, 0, 1, '9959', '00237', '21/04/2023'),
('Tchiogoua Tchinda ', 'Landry', ' ', '', 'Yaoundé ', ' 690979261', 'mistertchinda@gmail.com', 'zintex12', 'client', '', '04/06/2023', 0, 0, 0, 1, '2296', '00237', '04/05/2023'),
('ASSONNA TSAFACK', 'Richel Loveline', ' ', '', 'DOUALA', '691998941', 'lovelinetsafack087@gmail.com', 'rich@015', 'client', '', '25/05/2023', 0, 0, 0, 1, '0871', '00237', '25/04/2023'),
('Mbaya', 'Mexes', ' ', '', 'Douala', '+237695176090', '+237695176090@gmail.com', 'm0x0s123', 'client', '', '08/07/2023', 0, 0, 0, 1, '1733', '00237', '08/06/2023'),
('Moumbe', 'Steve', ' ', '', 'douala', '694080267', 'technochris25@gmail.com', 'tecnocamon', 'client', '', '26/05/2023', 0, 0, 0, 1, '2773', '00237', '26/04/2023'),
('Soppi Mbella ', 'Michelle ', ' ', '', 'Douala ', '690089267', 'soppimbella@gmail.com', '10031992', 'client', '', '28/05/2023', 0, 0, 0, 1, '2810', '00237', '28/04/2023'),
('val', 'val', ' ', '', 'Yaounde', '620569986', 'feuwofranck@gmail.com', 'telemex', 'client', '', '29/05/2023', 0, 0, 0, 1, '9198', '00237', '29/04/2023'),
('Mietchop', 'Zidane', ' ', '', 'Douala', '654789111', 'zidanenkevek0@gmail.com', 'Zidanenkevek0@', 'client', '', '03/06/2023', 0, 0, 0, 1, '1567', '00237', '03/05/2023'),
('nguidjol nlend ', 'frand vivien', ' ', '', 'douala', '697346872', 'franckvivien504@gmail.com', 'tresor10', 'client', '', '03/06/2023', 0, 0, 0, 1, '9823', '00237', '03/05/2023'),
('Balogog nolba ', 'Bonaventure aimé ', ' ', '', 'Douala ', '656481709', 'bonaventureaimebalogognolba@gmail', '280120', 'client', '', '03/06/2023', 0, 0, 0, 1, '7961', '00237', '03/05/2023'),
('Anzouer', 'Village', ' ', '', 'Douala', '699896731', 'anzouervillage@gmail.com', 'Telemex.2023', 'client', '', '03/06/2023', 0, 0, 0, 1, '3462', '00237', '03/05/2023'),
('DEMANO', 'Patrick', ' ', '', 'douala', '656003131', 'support@tchycotrack.com', 'merci23', 'client', '', '08/06/2023', 0, 0, 0, 1, '8736', '00237', '08/05/2023'),
('KINKY NATURE', 'Kasenga', ' ', '', 'Douala', '679739705', 'boutiquekinky2015@gmail.com', 'kasenga', 'client', '', '13/06/2023', 0, 0, 0, 1, '0432', '00237', '13/05/2023'),
('PIZZA', 'Dorée', ' ', '', 'Douala', '690748357', 'yveskamdem90@yahoo.fr', '123456', 'client', '', '15/06/2023', 0, 0, 0, 1, '4714', '00237', '15/05/2023'),
('KOTNA ', 'Jolie', ' ', '', 'Douala', '690353552', 'joliekotna@yahoo.com', 'Nguimine03', 'client', '', '15/06/2023', 0, 0, 0, 1, '9039', '00237', '15/05/2023'),
('Z', 'Immense ', ' ', '', 'Dla', '620934505', '', 'popopo', 'client', '', '15/06/2023', 0, 0, 0, 1, '9576', '00237', '15/05/2023'),
('NDZOYEM ', 'Pachibelle ', ' ', '', 'Douala', '658814863', 'pachibelle15@gmail.com', 'pachibelle12', 'client', '', '24/06/2023', 0, 0, 0, 1, '5779', '00237', '24/05/2023'),
('Tchoupou ', 'Apolinaire ', ' ', '', 'Douala ', '670826303', 'apolinairetchoupou34@gmail.com', 'socopat', 'client', '', '26/06/2023', 0, 0, 0, 1, '6121', '00237', '26/05/2023'),
('DEFFO COYOUE ', 'YVES landry', ' ', '', 'Douala', '693 17 80 27 ', 'deffolandry@gmail.com', 'Licencemmo', 'client', '', '02/07/2023', 0, 0, 0, 1, '0428', '00237', '02/06/2023'),
('BETTER', 'BETTER', '', 'Cameroun', 'Douala', '693815793', 'gautierfunga18@gmail.com', '$2y$10$rDiKbYeTt5.VGAB79r777.f', '', '', '', 0, 0, 0, 0, '', '', '2023-09-18'),
('test11111', 'test11111', '', 'Cameroun', 'Doula', '11111111111111111', 'test11111@gmail.com', 'nnfhzb', '', '', '', 0, 0, 0, 0, '', '', '2023-09-18'),
('BETTER', 'BETTER', '', 'Cameroun', 'Douala', '655767535', 'telefretcameroun@gmail.com', 'alpha1234', '', '', '', 0, 0, 0, 0, '', '', '2023-09-18'),
('CEDRIC ARNOLD', 'CEDRIC ARNOLD', '', 'Cameroun', 'Douala', '657140762', 'ngahtanga12345@gmail.com', 'nketanga124', '', '', '', 0, 0, 0, 0, '', '', '2023-09-28'),
('Louisdin ', 'Louisdin ', '', 'Cameroun', 'Douala', '654547111', 'louisparkeur@gmail.com', 'adebayor', '', '', '', 0, 0, 0, 0, '', '', '2023-10-07');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnements`
--
ALTER TABLE `abonnements`
  ADD PRIMARY KEY (`id_abonnement`);

--
-- Index pour la table `chargement`
--
ALTER TABLE `chargement`
  ADD PRIMARY KEY (`id_charg`);

--
-- Index pour la table `chargement_vehicules`
--
ALTER TABLE `chargement_vehicules`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `disponibilite`
--
ALTER TABLE `disponibilite`
  ADD PRIMARY KEY (`id_disp`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `postuler`
--
ALTER TABLE `postuler`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pub`
--
ALTER TABLE `pub`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `status_gps`
--
ALTER TABLE `status_gps`
  ADD PRIMARY KEY (`Id_status`);

--
-- Index pour la table `transporteur`
--
ALTER TABLE `transporteur`
  ADD PRIMARY KEY (`telephone`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnements`
--
ALTER TABLE `abonnements`
  MODIFY `id_abonnement` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `chargement`
--
ALTER TABLE `chargement`
  MODIFY `id_charg` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT pour la table `chargement_vehicules`
--
ALTER TABLE `chargement_vehicules`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT pour la table `disponibilite`
--
ALTER TABLE `disponibilite`
  MODIFY `id_disp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT pour la table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=293;

--
-- AUTO_INCREMENT pour la table `postuler`
--
ALTER TABLE `postuler`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT pour la table `status_gps`
--
ALTER TABLE `status_gps`
  MODIFY `Id_status` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
