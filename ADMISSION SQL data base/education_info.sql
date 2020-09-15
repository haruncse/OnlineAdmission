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
-- Database: `education_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `hsc_info`
--

CREATE TABLE IF NOT EXISTS `hsc_info` (
  `roll_num` int(20) NOT NULL,
  `student_name` varchar(45) NOT NULL,
  `father_name` varchar(45) NOT NULL,
  `mother_name` varchar(45) NOT NULL,
  `board` varchar(30) NOT NULL,
  `passing_year` varchar(30) NOT NULL,
  `gpa` float NOT NULL,
  `english` float NOT NULL,
  `physics` float NOT NULL,
  `chemistry` float NOT NULL,
  `mathmathics` float NOT NULL,
  `biology` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hsc_info`
--

INSERT INTO `hsc_info` (`roll_num`, `student_name`, `father_name`, `mother_name`, `board`, `passing_year`, `gpa`, `english`, `physics`, `chemistry`, `mathmathics`, `biology`) VALUES
(112278, 'KARIM', 'Rahim', 'ahbd', 'DHAKA', '2015', 5, 4, 5, 5, 3, 5),
(105601, 'opfig', 'tytrd', 'retyr', 'RAJSHAHI', '2016', 5, 4, 5, 5, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `ssc`
--

CREATE TABLE IF NOT EXISTS `ssc` (
  `name` varchar(30) NOT NULL,
  `father` varchar(30) NOT NULL,
  `roll` int(11) NOT NULL,
  `school` varchar(45) NOT NULL,
  `Board` varchar(20) NOT NULL,
  `gpa` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ssc`
--

INSERT INTO `ssc` (`name`, `father`, `roll`, `school`, `Board`, `gpa`) VALUES
('uwe4ws', 'hygyug', 112530, 'pygtft', 'DHAKA', 4.45);

-- --------------------------------------------------------

--
-- Table structure for table `ssc_info`
--

CREATE TABLE IF NOT EXISTS `ssc_info` (
  `roll_num` int(20) NOT NULL,
  `student_name` varchar(45) NOT NULL,
  `father_name` varchar(45) NOT NULL,
  `mother_name` varchar(45) NOT NULL,
  `board` varchar(30) NOT NULL,
  `passing_year` int(30) NOT NULL,
  `gpa` float NOT NULL,
  `english` float NOT NULL,
  `physics` float NOT NULL,
  `chemistry` float NOT NULL,
  `mathmathics` float NOT NULL,
  `biology` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ssc_info`
--

INSERT INTO `ssc_info` (`roll_num`, `student_name`, `father_name`, `mother_name`, `board`, `passing_year`, `gpa`, `english`, `physics`, `chemistry`, `mathmathics`, `biology`) VALUES
(121922, 'Md. Rahim Hossain', 'Md. Karimul islam', 'Mst. Rokaya Begum', 'DHAKA', 2013, 5, 4, 5, 5, 3, 5),
(110001, 'opfig', 'tytrd', 'retyr', 'RAJSHAHI', 2014, 5, 4, 5, 5, 3, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
