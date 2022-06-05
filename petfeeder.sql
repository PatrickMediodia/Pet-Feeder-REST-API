-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 03:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petfeeder`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `name`) VALUES
('admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `dispense`
--

CREATE TABLE `dispense` (
  `dispenseCondition` tinyint(1) NOT NULL,
  `serving` int(11) DEFAULT NULL,
  `lastDispense` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dispense`
--

INSERT INTO `dispense` (`dispenseCondition`, `serving`, `lastDispense`) VALUES
(0, 2, '2022-06-04 16:40:45');

-- --------------------------------------------------------

--
-- Table structure for table `dispenselogs`
--

CREATE TABLE `dispenselogs` (
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `temperature` varchar(5) NOT NULL,
  `humidity` varchar(5) NOT NULL,
  `serving` int(11) NOT NULL,
  `mode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dispenselogs`
--

INSERT INTO `dispenselogs` (`time`, `temperature`, `humidity`, `serving`, `mode`) VALUES
('2022-06-05 13:28:20', '31.5', '72.4', 2, 'Manual'),
('2022-06-05 13:28:45', '29.8', '74.5', 2, 'Automatic');

-- --------------------------------------------------------

--
-- Table structure for table `dispenseslots`
--

CREATE TABLE `dispenseslots` (
  `dispenseTime` time NOT NULL,
  `serving` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dispenseslots`
--

INSERT INTO `dispenseslots` (`dispenseTime`, `serving`) VALUES
('23:25:00', 1),
('23:27:00', 1),
('23:27:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `foodwaterstatus`
--

CREATE TABLE `foodwaterstatus` (
  `foodLevel` varchar(50) DEFAULT NULL,
  `waterLevel` varchar(50) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodwaterstatus`
--

INSERT INTO `foodwaterstatus` (`foodLevel`, `waterLevel`, `timestamp`) VALUES
('Low', 'Low', '2022-06-04 16:39:52');

-- --------------------------------------------------------

--
-- Table structure for table `temperaturehumiditystatus`
--

CREATE TABLE `temperaturehumiditystatus` (
  `temperature` varchar(5) NOT NULL,
  `humidity` varchar(5) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temperaturehumiditystatus`
--

INSERT INTO `temperaturehumiditystatus` (`temperature`, `humidity`, `timestamp`) VALUES
('30.8', '78.0', '2022-06-04 16:39:51');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
