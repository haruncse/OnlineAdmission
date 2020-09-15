-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2015 at 10:00 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `data_insert`
--

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `distrect` varchar(30) NOT NULL,
  `upazila` varchar(30) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `village_name` varchar(30) NOT NULL,
  `road_no` varchar(20) NOT NULL,
  `home_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`distrect`, `upazila`, `postcode`, `village_name`, `road_no`, `home_no`) VALUES
('Bogra', 'Bogra Sader', '5800', 'MATIDALI', '04', '152/A');

-- --------------------------------------------------------

--
-- Table structure for table `shirts`
--

CREATE TABLE IF NOT EXISTS `shirts` (
  `name` varchar(40) DEFAULT NULL,
  `size` enum('x-small','small','medium','large','x-large') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shirts`
--

INSERT INTO `shirts` (`name`, `size`) VALUES
('dress shirt', 'large'),
('t-shirt', 'medium'),
('polo shirt', 'small');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
