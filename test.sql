-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 02:47 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(6) UNSIGNED NOT NULL,
  `registrationnumber` text NOT NULL,
  `surname` text NOT NULL,
  `email` text,
  `regdetails` text NOT NULL,
  `perdetails` text NOT NULL,
  `resdetails` text NOT NULL,
  `utmdetails` text NOT NULL,
  `department` text NOT NULL,
  `validated` text NOT NULL,
  `course` text NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `registrationnumber`, `surname`, `email`, `regdetails`, `perdetails`, `resdetails`, `utmdetails`, `department`, `validated`, `course`, `reg_date`) VALUES
(8, 'Administrator', 'Administrator', 'Admin', 'Admin***Creator***administrator***Admin', 'Admin***Admin***Admin*********************************', '***A1******A1******A1******A1******A1******A1******A1******A1******A1******A1******A1***', 'Administrator***', 'Adult Education', '1', 'Computer Science', '2018-12-03 01:31:07'),
(10, '65/685945je', 'Temisan', 'Gadwentod@gmail.com', 'George***Bush***Temisan***gadwentod@gmail.com', 'Godwin***Chichi***Imo State***Ijebu North***9b, Oduguwa Ayanfe Street, Agaguda Estate, Lagos State.***9b, Oduguwa Ayanfe Street, Agaguda Estate, Lagos State.***07089781385***Engaged***Adeoti Damilola***09089786756***9b, Oduguwa Ayanfe Street, Agaguda Estate, Lagos State.***http.//www.gfdyuyerufid.com***http.//yueifujekjdfkc.com***http.//rejhjrfidopwasildk.com', 'Mathematics***A1***Physics***A1***Geography***A1***Chemistry***A1***Biology***A1***Economics***A1***Futher Mathematics***A1***English Language***A1***Commerce***A1***Government***A1***Histroy***A1***80493436533', '65/685945je***399', 'Comparative Religious Studies', '', '', '2018-12-03 00:06:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
