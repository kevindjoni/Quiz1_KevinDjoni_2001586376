-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 02:49 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carsharing`
--

-- --------------------------------------------------------

--
-- Table structure for table `carsharing`
--

CREATE TABLE `carsharing` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(5) NOT NULL,
  `Password` varchar(5) NOT NULL,
  `Role` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `AvgRating` int(11) NOT NULL,
  `NoRating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carsharing`
--

INSERT INTO `carsharing` (`UserID`, `Username`, `Password`, `Role`, `Status`, `AvgRating`, `NoRating`) VALUES
(1, 'user1', 'pass1', 'passenger', 'active', 5, 5),
(2, 'user2', 'pass2', 'driver', 'active', 4, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carsharing`
--
ALTER TABLE `carsharing`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carsharing`
--
ALTER TABLE `carsharing`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
