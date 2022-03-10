-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 16 juil. 2021 à 21:04
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dataphone`
--

-- --------------------------------------------------------

--
-- Structure de la table `avantachat`
--

CREATE TABLE `avantachat` (
  `cle` int(11) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `avantachat`
--

INSERT INTO `avantachat` (`cle`, `mobile`, `price`) VALUES
(256024346, 8585858512, 1500),
(256024346, 4949494912, 1200),
(1084040281, 9423942312, 2400),
(1084040281, 8585858512, 1500),
(1084040281, 5623562312, 5000);

-- --------------------------------------------------------

--
-- Structure de la table `phones`
--

CREATE TABLE `phones` (
  `id` int(11) NOT NULL,
  `number` bigint(20) NOT NULL,
  `ftNumber` text NOT NULL,
  `indice1` int(11) NOT NULL,
  `indice2` int(11) NOT NULL,
  `indice3` int(11) NOT NULL,
  `typeText1` text NOT NULL,
  `typeText2` text NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `phones`
--

INSERT INTO `phones` (`id`, `number`, `ftNumber`, `indice1`, `indice2`, `indice3`, `typeText1`, `typeText2`, `type`) VALUES
(0, 4545, '000000 4545', 55, 10, 1, '000000 NUMBERS', '', 1),
(0, 40045458, '004 0045 458', 55, 10, 1, '3 DIGIT NUMBER', '', 3),
(0, 10045456, '001 0045 456', 55, 10, 1, '3 DIGIT NUMBER', '', 3),
(0, 80045457, '008 0045 457', 55, 10, 1, '3 DIGIT NUMBER', '', 3),
(0, 90012125, '009 0012 125', 55, 10, 1, '3 DIGIT NUMBER', '', 3),
(0, 9856985623, '9856 9856 23', 55, 10, 1, 'SIMPLE', '', 0),
(0, 5489652356, '548 9652 356', 55, 10, 1, '3 DIGIT NUMBER', '', 4),
(0, 5454568912, '545 4568 912', 55, 10, 1, '3 DIGIT NUMBER', '', 4),
(0, 7869875463, '786 9875463', 55, 10, 1, '786 SPECIAL', '', 5),
(0, 5486987654, '548 6987 654', 55, 10, 1, '3 DIGIT NUMBER', '', 4),
(0, 7869999888, '786 9999 888', 55, 10, 1, '3 DIGIT NUMBER', '', 4);

-- --------------------------------------------------------

--
-- Structure de la table `prices`
--

CREATE TABLE `prices` (
  `id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `number` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `prices`
--

INSERT INTO `prices` (`id`, `price`, `number`) VALUES
(0, 2400, 9423942312),
(0, 2400, 9423942312),
(0, 2400, 9423942312),
(0, 2400, 9423942312),
(0, 2400, 9423942312),
(0, 1500, 8585858512),
(0, 5000, 5623562312),
(0, 4000, 7845784512),
(0, 2000, 7878787812),
(0, 4500, 5656565612),
(0, 2300, 1212121212),
(0, 5200, 6666666612),
(0, 4600, 2255225512),
(0, 1200, 4949494912),
(0, 4000, 4646464612),
(0, 4000, 7777777712),
(0, 3000, 9999999912),
(0, 2400, 7171717112),
(0, 1200, 5),
(0, 1400, 1313131312),
(0, 1500, 1717171712),
(0, 1200, 9191919112),
(0, 1400, 4545),
(0, 1400, 40045458),
(0, 1400, 10045456),
(0, 1200, 80045457),
(0, 4500, 90012125),
(0, 1400, 9856985623),
(0, 1400, 9856985623),
(0, 1400, 5489652356),
(0, 1200, 5454568912),
(0, 1400, 7869875463),
(0, 4500, 5486987654),
(0, 1400, 7869999888);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `mobile` bigint(20) NOT NULL,
  `password` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `userdetails`
--

CREATE TABLE `userdetails` (
  `mobile` bigint(20) NOT NULL,
  `fullName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `vipnum`
--

CREATE TABLE `vipnum` (
  `number` bigint(20) NOT NULL,
  `typeText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vipnum`
--

INSERT INTO `vipnum` (`number`, `typeText`) VALUES
(4545, 'VIP'),
(40045458, 'VIP'),
(10045456, 'VIP'),
(80045457, 'VIP');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`mobile`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
