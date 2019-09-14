-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2017 at 07:31 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `generalsec`
--

CREATE TABLE `generalsec` (
  `pid` int(11) NOT NULL,
  `canditate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `generalsec`
--

INSERT INTO `generalsec` (`pid`, `canditate`) VALUES
(152051, 'kishan'),
(152067, 'mukul');

-- --------------------------------------------------------

--
-- Table structure for table `ladyrep`
--

CREATE TABLE `ladyrep` (
  `pid` int(11) NOT NULL,
  `canditate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ladyrep`
--

INSERT INTO `ladyrep` (`pid`, `canditate`) VALUES
(152028, 'masira'),
(152025, 'jessica'),
(152023, 'masira'),
(152020, 'shweta'),
(152021, 'masira'),
(152070, 'jessica'),
(152087, 'masira'),
(1520265, 'jessica');

-- --------------------------------------------------------

--
-- Table structure for table `president`
--

CREATE TABLE `president` (
  `pid` int(11) NOT NULL,
  `canditate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `president`
--

INSERT INTO `president` (`pid`, `canditate`) VALUES
(152020, 'jetso'),
(152021, 'jetso'),
(152023, 'jetso'),
(152024, 'mukul'),
(152026, 'mukul'),
(152029, 'mukul'),
(152025, 'jetso'),
(152027, 'jetso'),
(152028, 'jetso');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
