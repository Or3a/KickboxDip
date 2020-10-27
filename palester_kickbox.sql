-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2020 at 08:29 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `palester_kickbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `admini`
--

CREATE TABLE `admini` (
  `ID_admin` int(11) NOT NULL,
  `Username_adm` varchar(11) NOT NULL,
  `Emer_adm` varchar(20) NOT NULL,
  `Mbiemer_adm` varchar(20) NOT NULL,
  `Email_adm` varchar(50) NOT NULL,
  `Fjalekalim_adm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admini`
--

INSERT INTO `admini` (`ID_admin`, `Username_adm`, `Emer_adm`, `Mbiemer_adm`, `Email_adm`, `Fjalekalim_adm`) VALUES
(0, 'orea', 'Orea', 'Kicaj', 'oreakicaj@gmail.com', '$2y$10$V1rh82A4kbYCV1TYP.Ep5u7n.W/jeyc1zCID4hGx7quTfwEih.iqC');

-- --------------------------------------------------------

--
-- Table structure for table `dushet`
--

CREATE TABLE `dushet` (
  `ID_dushi` int(11) NOT NULL,
  `Statusi_dush` tinyint(1) NOT NULL DEFAULT 0,
  `f_m` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dushet`
--

INSERT INTO `dushet` (`ID_dushi`, `Statusi_dush`, `f_m`) VALUES
(1, 0, 'f'),
(2, 0, 'f'),
(3, 0, 'f'),
(4, 0, 'f'),
(5, 0, 'm'),
(6, 0, 'm'),
(7, 0, 'm'),
(8, 0, 'm');

-- --------------------------------------------------------

--
-- Table structure for table `fatura`
--

CREATE TABLE `fatura` (
  `ID_fatura` int(11) NOT NULL,
  `ID_sportisti` int(11) NOT NULL,
  `Cmim_fatura` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fatura`
--

INSERT INTO `fatura` (`ID_fatura`, `ID_sportisti`, `Cmim_fatura`) VALUES
(47, 2, 78.1655),
(49, 2, 47.1385),
(52, 2, 204.125);

-- --------------------------------------------------------

--
-- Table structure for table `fatura_produkt`
--

CREATE TABLE `fatura_produkt` (
  `ID_fatura` int(11) NOT NULL,
  `ID_produkte` int(11) NOT NULL,
  `Sasia_produkt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fatura_produkt`
--

INSERT INTO `fatura_produkt` (`ID_fatura`, `ID_produkte`, `Sasia_produkt`) VALUES
(47, 2, 3),
(47, 3, 1),
(49, 2, 1),
(49, 3, 4),
(52, 3, 8),
(52, 4, 9),
(52, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `galeria`
--

CREATE TABLE `galeria` (
  `ID_foto` int(11) NOT NULL,
  `Foto` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeria`
--

INSERT INTO `galeria` (`ID_foto`, `Foto`) VALUES
(1, './images/1.jpg'),
(2, './images/2.jpg'),
(3, './images/3.jpg'),
(4, './images/4.jpeg'),
(9, './images/5.jpg'),
(15, './images/2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ndeshje`
--

CREATE TABLE `ndeshje` (
  `ID_ndeshje` int(11) NOT NULL,
  `ID_sportisti` int(11) NOT NULL,
  `Konkurrenti` varchar(50) NOT NULL,
  `Ekipi_konk` varchar(50) NOT NULL,
  `Data_ora_ndeshje` datetime NOT NULL,
  `Vendodhja` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `njoftime`
--

CREATE TABLE `njoftime` (
  `ID_njoftimi` int(11) NOT NULL,
  `Titull_njoftimi` varchar(50) NOT NULL,
  `Tekst_njoftimi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prenotim_takimi`
--

CREATE TABLE `prenotim_takimi` (
  `ID_takimi` int(11) NOT NULL,
  `ID_sportisti` int(11) NOT NULL,
  `ID_trajneri` int(11) NOT NULL,
  `Tema_tak` varchar(50) NOT NULL,
  `Data_ora_tak` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prenotim_takimi`
--

INSERT INTO `prenotim_takimi` (`ID_takimi`, `ID_sportisti`, `ID_trajneri`, `Tema_tak`, `Data_ora_tak`) VALUES
(1, 3, 2, 'ckm', '2020-06-30 10:25:00'),
(2, 2, 2, 'hahah', '2020-06-24 01:13:00'),
(3, 2, 1, ' nnk', '2020-06-17 09:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `produkte`
--

CREATE TABLE `produkte` (
  `ID_produkte` int(11) NOT NULL,
  `Emri_prod` varchar(50) DEFAULT NULL,
  `Cmimi_prod` double(4,2) DEFAULT NULL,
  `Foto_prod` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produkte`
--

INSERT INTO `produkte` (`ID_produkte`, `Emri_prod`, `Cmimi_prod`, `Foto_prod`) VALUES
(1, 'Doreza te Kuqe', 20.99, './images/glovesKuqe.png'),
(2, 'Doreza Blu', 20.99, './images/glovesBlu.png'),
(3, 'Litar kercimi', 5.00, './images/jump-rope.png'),
(4, 'Gira', 7.50, './images/weight.png'),
(5, 'Pije energjike', 1.50, './images/energy-drink.png'),
(6, 'Thes rere', 70.00, './images/boxing-bag.png');

-- --------------------------------------------------------

--
-- Table structure for table `seanca_kls`
--

CREATE TABLE `seanca_kls` (
  `ID_seanca` int(11) NOT NULL,
  `ID_trajneri` int(11) NOT NULL,
  `Titull_seanca` varchar(20) NOT NULL,
  `Ora_seanca` time NOT NULL,
  `Dita_seanca` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seanca_kls`
--

INSERT INTO `seanca_kls` (`ID_seanca`, `ID_trajneri`, `Titull_seanca`, `Ora_seanca`, `Dita_seanca`) VALUES
(1, 1, 'te rinj', '17:30:00', 'e Hene'),
(2, 1, 'te rinj', '17:30:00', 'e Merkure'),
(4, 1, 'te rinj', '16:30:00', 'e Premte'),
(5, 2, 'femije', '15:30:00', 'e Marte'),
(6, 2, 'femije', '15:30:00', 'e Enjte'),
(7, 2, 'femije', '11:00:00', 'e Shtune'),
(8, 3, 'te moshuar', '10:30:00', 'e Marte'),
(9, 3, 'te moshuar', '10:00:00', 'e Premte');

-- --------------------------------------------------------

--
-- Table structure for table `seance_sportist`
--

CREATE TABLE `seance_sportist` (
  `ID_sportisti` int(11) NOT NULL,
  `ID_seanca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seance_sportist`
--

INSERT INTO `seance_sportist` (`ID_sportisti`, `ID_seanca`) VALUES
(2, 1),
(3, 8),
(15, 5),
(17, 6);

-- --------------------------------------------------------

--
-- Table structure for table `sportisti`
--

CREATE TABLE `sportisti` (
  `ID_sportisti` int(11) NOT NULL,
  `Username_sp` varchar(20) NOT NULL,
  `Emer_sp` varchar(50) NOT NULL,
  `Mbiemer_sp` varchar(50) NOT NULL,
  `Email_sp` varchar(50) NOT NULL,
  `Fjalekalim_sp` varchar(255) NOT NULL,
  `Cel_sp` int(20) NOT NULL,
  `Adresa_sp` varchar(50) NOT NULL,
  `Qyteti_sp` varchar(20) NOT NULL,
  `ZipKodi_sp` int(5) NOT NULL,
  `Datelindja_sp` date NOT NULL,
  `Gjinia_sp` varchar(11) NOT NULL,
  `Pesha_sp` double(5,2) DEFAULT NULL,
  `Gjatesia_sp` double(3,2) DEFAULT NULL,
  `Info_sp` varchar(5000) NOT NULL DEFAULT 'Pa informacion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sportisti`
--

INSERT INTO `sportisti` (`ID_sportisti`, `Username_sp`, `Emer_sp`, `Mbiemer_sp`, `Email_sp`, `Fjalekalim_sp`, `Cel_sp`, `Adresa_sp`, `Qyteti_sp`, `ZipKodi_sp`, `Datelindja_sp`, `Gjinia_sp`, `Pesha_sp`, `Gjatesia_sp`, `Info_sp`) VALUES
(2, 'Sara', 'Sara', 'Shehu', 'sshehu@yahoo.com', '$2y$10$k879pfRrfVJRwPYkWVDMreuFhFgEMHO7wReMUqLPxxkHp7my9vdu2', 699273076, 'Rr :... L: ..', 'Vlore', 9401, '1992-07-03', 'f', 75.32, 1.68, ''),
(3, 'Samir', 'Samir', 'Lika', 'slika@outlook.com', '$2y$10$.SYGuZ2CVEKR4huukrnCx.AEaOWWOW0hOOHlmKxPsiEqmYQJbrHb6', 699331496, 'Rr :... L: ..', 'Vlore', 9402, '1968-11-06', 'm', 80.00, 1.84, ''),
(15, 'Klea', 'Klea', 'Miro', 'kmiro@gmail.com', '$2y$10$EhNCSTBSWSp58IdNUKUi5.MOgoio7M/TJxO4jZg8D3xdGiYcRspDC', 692137756, 'Rr :... L: ..', 'Vlore', 9403, '2007-11-10', 'f', 60.00, 1.70, ''),
(17, 'Aria', 'Aria', 'Kalo', 'ariakalo@gmail.com', '$2y$10$tHICu0FF5XD8KasrAjASUO1Nf3YryJxriOegxqfuBIHRaaDPmylJ.', 692093188, 'Rr :... L: ..', 'Vlore', 9401, '2011-01-19', 'f', 56.50, 1.68, '');

-- --------------------------------------------------------

--
-- Table structure for table `sportisti_muajit`
--

CREATE TABLE `sportisti_muajit` (
  `ID_sportisti` int(11) NOT NULL,
  `Foto_sp` mediumblob NOT NULL,
  `Pershkrim` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trajneri`
--

CREATE TABLE `trajneri` (
  `ID_trajneri` int(11) NOT NULL,
  `Username_tr` varchar(11) NOT NULL,
  `Emer_tr` varchar(20) NOT NULL,
  `Mbiemer_tr` varchar(20) NOT NULL,
  `Email_tr` varchar(50) NOT NULL,
  `Fjalekalim_tr` varchar(255) NOT NULL,
  `Grupmosha_tr` varchar(20) NOT NULL,
  `Info_tr` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trajneri`
--

INSERT INTO `trajneri` (`ID_trajneri`, `Username_tr`, `Emer_tr`, `Mbiemer_tr`, `Email_tr`, `Fjalekalim_tr`, `Grupmosha_tr`, `Info_tr`) VALUES
(1, 'Ilda', 'Ilda', 'Lelo', 'ildalelo@gmail.com', '$2y$10$4vgFBR49AbSq3OnBbFa09.8azAQEmFwX63wm2BxXsoDApaUSx/UTu', 'te rinj', 'I_L...trajnere...ndeshje te fitura...eksperienca....etj'),
(2, 'Alban', 'Alban', 'Alikaj', 'albanal@gmail.com', '$2y$10$PAB3lDMjfQ13NL8DBPTAOO6wPB9G.lO1rn5I/0ibPvYDJI40ORdJq', 'femije', 'A_a..febp...'),
(3, 'Ronald', 'Ronald', 'Skenderi', 'rolands@gmail.com', '$2y$10$sxL6CrB7diS3RDeErcVTvO1wlKOwemj6ZjMQYJtEcCLPNC.I/lqtm', 'te moshuar', 'Ronald Sk...kampjon ne ...vite eksperience..');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admini`
--
ALTER TABLE `admini`
  ADD PRIMARY KEY (`ID_admin`);

--
-- Indexes for table `dushet`
--
ALTER TABLE `dushet`
  ADD PRIMARY KEY (`ID_dushi`);

--
-- Indexes for table `fatura`
--
ALTER TABLE `fatura`
  ADD PRIMARY KEY (`ID_fatura`,`ID_sportisti`),
  ADD KEY `ID_sportisti` (`ID_sportisti`);

--
-- Indexes for table `fatura_produkt`
--
ALTER TABLE `fatura_produkt`
  ADD PRIMARY KEY (`ID_fatura`,`ID_produkte`),
  ADD KEY `ID_fatura` (`ID_fatura`),
  ADD KEY `ID_produkte` (`ID_produkte`);

--
-- Indexes for table `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`ID_foto`);

--
-- Indexes for table `ndeshje`
--
ALTER TABLE `ndeshje`
  ADD PRIMARY KEY (`ID_ndeshje`,`ID_sportisti`),
  ADD KEY `ID_sportisti` (`ID_sportisti`);

--
-- Indexes for table `njoftime`
--
ALTER TABLE `njoftime`
  ADD PRIMARY KEY (`ID_njoftimi`);

--
-- Indexes for table `prenotim_takimi`
--
ALTER TABLE `prenotim_takimi`
  ADD PRIMARY KEY (`ID_takimi`,`ID_sportisti`,`ID_trajneri`);

--
-- Indexes for table `produkte`
--
ALTER TABLE `produkte`
  ADD PRIMARY KEY (`ID_produkte`);

--
-- Indexes for table `seanca_kls`
--
ALTER TABLE `seanca_kls`
  ADD PRIMARY KEY (`ID_seanca`,`ID_trajneri`),
  ADD KEY `ID_trajneri` (`ID_trajneri`);

--
-- Indexes for table `seance_sportist`
--
ALTER TABLE `seance_sportist`
  ADD PRIMARY KEY (`ID_sportisti`,`ID_seanca`),
  ADD KEY `ID_sportisti` (`ID_sportisti`),
  ADD KEY `ID_seanca` (`ID_seanca`);

--
-- Indexes for table `sportisti`
--
ALTER TABLE `sportisti`
  ADD PRIMARY KEY (`ID_sportisti`);

--
-- Indexes for table `sportisti_muajit`
--
ALTER TABLE `sportisti_muajit`
  ADD PRIMARY KEY (`ID_sportisti`),
  ADD KEY `ID_sportisti` (`ID_sportisti`);

--
-- Indexes for table `trajneri`
--
ALTER TABLE `trajneri`
  ADD PRIMARY KEY (`ID_trajneri`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admini`
--
ALTER TABLE `admini`
  MODIFY `ID_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dushet`
--
ALTER TABLE `dushet`
  MODIFY `ID_dushi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fatura`
--
ALTER TABLE `fatura`
  MODIFY `ID_fatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `galeria`
--
ALTER TABLE `galeria`
  MODIFY `ID_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ndeshje`
--
ALTER TABLE `ndeshje`
  MODIFY `ID_ndeshje` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `njoftime`
--
ALTER TABLE `njoftime`
  MODIFY `ID_njoftimi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prenotim_takimi`
--
ALTER TABLE `prenotim_takimi`
  MODIFY `ID_takimi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produkte`
--
ALTER TABLE `produkte`
  MODIFY `ID_produkte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `seanca_kls`
--
ALTER TABLE `seanca_kls`
  MODIFY `ID_seanca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sportisti`
--
ALTER TABLE `sportisti`
  MODIFY `ID_sportisti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `trajneri`
--
ALTER TABLE `trajneri`
  MODIFY `ID_trajneri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fatura_produkt`
--
ALTER TABLE `fatura_produkt`
  ADD CONSTRAINT `ID_fatura` FOREIGN KEY (`ID_fatura`) REFERENCES `fatura` (`ID_fatura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ID_produkte` FOREIGN KEY (`ID_produkte`) REFERENCES `produkte` (`ID_produkte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seance_sportist`
--
ALTER TABLE `seance_sportist`
  ADD CONSTRAINT `ID_seanca` FOREIGN KEY (`ID_seanca`) REFERENCES `seanca_kls` (`ID_seanca`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ID_sportisti` FOREIGN KEY (`ID_sportisti`) REFERENCES `sportisti` (`ID_sportisti`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
