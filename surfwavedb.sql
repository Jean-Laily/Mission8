-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 01, 2021 at 04:56 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surfwavedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoprod`
--

CREATE TABLE `categoprod` (
  `categoProd` varchar(2) NOT NULL,
  `libCategoProd` varchar(20) DEFAULT NULL,
  `ordreCat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categoprod`
--

INSERT INTO `categoprod` (`categoProd`, `libCategoProd`, `ordreCat`) VALUES
('BB', 'BODYBOARD', 20),
('CO', 'COMBINAISON', 30),
('PS', 'PLANCHE DE SURF', 10);

-- --------------------------------------------------------

--
-- Table structure for table `duree`
--

CREATE TABLE `duree` (
  `codeDuree` varchar(2) NOT NULL,
  `libDuree` varchar(15) DEFAULT NULL,
  `ordreDuree` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `duree`
--

INSERT INTO `duree` (`codeDuree`, `libDuree`, `ordreDuree`) VALUES
('1H', '1 heure', 1),
('1J', '1 jour', 5),
('2H', '2 heures', 2),
('2J', '2 jours', 6),
('3H', '3 heures', 3),
('3J', '3 jours', 7),
('4H', '4 heures', 4),
('4J', '4 jours', 8),
('5J', '5 jours', 8),
('6J', '6 jours', 10);

-- --------------------------------------------------------

--
-- Table structure for table `equipier`
--

CREATE TABLE `equipier` (
  `codeEq` varchar(5) NOT NULL,
  `surnomEq` varchar(15) NOT NULL,
  `nomEq` varchar(50) DEFAULT NULL,
  `fonctionEq` varchar(15) NOT NULL,
  `ordreEquip` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `equipier`
--

INSERT INTO `equipier` (`codeEq`, `surnomEq`, `nomEq`, `fonctionEq`, `ordreEquip`) VALUES
('ADJ', 'Isa', 'FONFEC Sophie', 'e-commerce', 80),
('BOSS', 'Gourou', 'MARCON Emmanuel', 'Directeur', 10),
('DAN', 'Dantel', 'CASTOR Jean', 'Commercial', 20),
('DID', 'Didi', 'LAMBROUY Didier', 'Commercial', 30),
('FAN', 'Fany', NULL, 'e-commerce', 90),
('FRED', 'Fredo', NULL, 'Moniteur', 50),
('KIM', 'Kimi', 'GAGA Géralde', 'e-commerce', 70),
('PAT', 'Patou', NULL, 'Moniteur', 40),
('WIL', 'Will', 'SOVÉ Willy', 'Moniteur', 60);

-- --------------------------------------------------------

--
-- Table structure for table `qdp`
--

CREATE TABLE `qdp` (
  `codeEq` varchar(5) NOT NULL,
  `idQuest` int(11) NOT NULL,
  `reponse` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qdp`
--

INSERT INTO `qdp` (`codeEq`, `idQuest`, `reponse`) VALUES
('BOSS', 1, 'Présider et décider'),
('BOSS', 2, 'Etre roi de ce pays'),
('BOSS', 3, 'Jaune sable'),
('BOSS', 4, 'La dinde de la cour'),
('BOSS', 5, 'Louis XIV');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `idQuest` int(11) NOT NULL,
  `libQuest` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`idQuest`, `libQuest`) VALUES
(1, 'Ma qualité préférée chez les autres.'),
(2, 'Mon idée du bonheur. '),
(3, 'La couleur que je préfère.'),
(4, 'Le plat que je préfère.'),
(5, 'En quoi je voudrais être réincarné.e.');

-- --------------------------------------------------------

--
-- Table structure for table `tarifer`
--

CREATE TABLE `tarifer` (
  `codeDuree` varchar(2) NOT NULL,
  `categoProd` varchar(2) NOT NULL,
  `prixLocation` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tarifer`
--

INSERT INTO `tarifer` (`codeDuree`, `categoProd`, `prixLocation`) VALUES
('1H', 'BB', '7.00'),
('1H', 'CO', '7.00'),
('1H', 'PS', '210.00'),
('1J', 'BB', '25.00'),
('1J', 'CO', '25.00'),
('1J', 'PS', '35.00'),
('2H', 'BB', '10.00'),
('2H', 'CO', '10.00'),
('2H', 'PS', '15.00'),
('2J', 'BB', '35.00'),
('2J', 'CO', '35.00'),
('2J', 'PS', '45.00'),
('3H', 'BB', '15.00'),
('3H', 'CO', '15.00'),
('3H', 'PS', '20.00'),
('3J', 'BB', '45.00'),
('3J', 'CO', '45.00'),
('3J', 'PS', '55.00'),
('4H', 'BB', '20.00'),
('4H', 'CO', '20.00'),
('4H', 'PS', '25.00'),
('4J', 'BB', '55.00'),
('4J', 'CO', '55.00'),
('4J', 'PS', '65.00'),
('5J', 'BB', '65.00'),
('5J', 'CO', '65.00'),
('5J', 'PS', '75.00'),
('6J', 'BB', '75.00'),
('6J', 'CO', '75.00'),
('6J', 'PS', '85.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoprod`
--
ALTER TABLE `categoprod`
  ADD PRIMARY KEY (`categoProd`);

--
-- Indexes for table `duree`
--
ALTER TABLE `duree`
  ADD PRIMARY KEY (`codeDuree`);

--
-- Indexes for table `equipier`
--
ALTER TABLE `equipier`
  ADD PRIMARY KEY (`codeEq`);

--
-- Indexes for table `qdp`
--
ALTER TABLE `qdp`
  ADD PRIMARY KEY (`codeEq`,`idQuest`),
  ADD KEY `idQuest` (`idQuest`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`idQuest`);

--
-- Indexes for table `tarifer`
--
ALTER TABLE `tarifer`
  ADD PRIMARY KEY (`codeDuree`,`categoProd`),
  ADD KEY `categoProd` (`categoProd`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `qdp`
--
ALTER TABLE `qdp`
  ADD CONSTRAINT `qdp_ibfk_1` FOREIGN KEY (`codeEq`) REFERENCES `equipier` (`codeEq`),
  ADD CONSTRAINT `qdp_ibfk_2` FOREIGN KEY (`idQuest`) REFERENCES `question` (`idQuest`);

--
-- Constraints for table `tarifer`
--
ALTER TABLE `tarifer`
  ADD CONSTRAINT `tarifer_ibfk_1` FOREIGN KEY (`codeDuree`) REFERENCES `duree` (`codeDuree`),
  ADD CONSTRAINT `tarifer_ibfk_2` FOREIGN KEY (`categoProd`) REFERENCES `categoprod` (`categoProd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
