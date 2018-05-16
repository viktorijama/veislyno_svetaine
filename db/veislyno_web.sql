-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2018 at 11:28 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veislyno_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `suniukai`
--

CREATE TABLE `suniukai` (
  `id` int(11) NOT NULL,
  `nr` tinyint(3) DEFAULT NULL,
  `rezervuota` tinyint(1) DEFAULT NULL,
  `suniuko_vardas` varchar(50) DEFAULT NULL,
  `telefonas` varchar(16) DEFAULT NULL,
  `vardas` varchar(30) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suniukai`
--

INSERT INTO `suniukai` (`id`, `nr`, `rezervuota`, `suniuko_vardas`, `telefonas`, `vardas`) VALUES
(1, 10, 0, 'Chase', '', ''),
(2, 20, 1, 'Marshal', '', ''),
(3, 30, 0, 'Rublas', '', ''),
(4, 40, 0, 'Zuma', '', ''),
(5, 50, 0, 'Roki', '', ''),
(6, 60, 0, 'Sky', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `uzklausos`
--

CREATE TABLE `uzklausos` (
  `id` int(6) NOT NULL,
  `vardas` varchar(20) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci DEFAULT NULL,
  `telefonas` varchar(15) DEFAULT NULL,
  `emailas` varchar(50) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci DEFAULT NULL,
  `zinute` varchar(500) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci DEFAULT NULL,
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uzklausos`
--

INSERT INTO `uzklausos` (`id`, `vardas`, `telefonas`, `emailas`, `zinute`, `date_added`) VALUES
(1, '', '0', '', '', '2018-03-30 17:01:08'),
(2, '', '0', '', '', '2018-03-30 17:01:08'),
(3, '', '0', '', '', '2018-03-30 17:01:08'),
(4, 'a', '0', 'c', 'd', '2018-03-30 17:01:08'),
(5, 'dgfgsfg', 'dsfgsfdgsdfg', 'sdfgdfgdfg', 'dfgsdfgsdfgsdfdf', '2018-03-30 17:01:08'),
(6, 'Viktorija', '6666666', 'viktorija@testas.lt', 'Testas. Duomenys keliauja i DB.', '2018-04-03 10:35:39'),
(7, 'Viktorija', '666666', 'ggg', 'Testas testas testas', '2018-04-03 10:37:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `suniukai`
--
ALTER TABLE `suniukai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uzklausos`
--
ALTER TABLE `uzklausos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `suniukai`
--
ALTER TABLE `suniukai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `uzklausos`
--
ALTER TABLE `uzklausos`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
