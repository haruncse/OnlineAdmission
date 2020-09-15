-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2015 at 09:58 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admissionproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `aplicant_education_info`
--

CREATE TABLE IF NOT EXISTS `aplicant_education_info` (
  `aplicant_education_info_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ssc_gpa` float NOT NULL,
  `hsc_gpa` float NOT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `unit` varchar(10) DEFAULT NULL,
  UNIQUE KEY `aplicant_education_info_id` (`aplicant_education_info_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `aplicant_education_info`
--

INSERT INTO `aplicant_education_info` (`aplicant_education_info_id`, `ssc_gpa`, `hsc_gpa`, `user_name`, `unit`) VALUES
(1, 5, 5, 'mbstu', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `aplicant_genaral_info`
--

CREATE TABLE IF NOT EXISTS `aplicant_genaral_info` (
  `aplicant_genaral_info_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aplicant_name` varchar(45) NOT NULL,
  `aplicant_father_name` varchar(45) NOT NULL,
  `aplicant_mother_name` varchar(45) NOT NULL,
  `aplicant_birth_date` varchar(30) NOT NULL,
  `aplicant_gender` varchar(30) NOT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  UNIQUE KEY `aplicant_genaral_info_id` (`aplicant_genaral_info_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `aplicant_genaral_info`
--

INSERT INTO `aplicant_genaral_info` (`aplicant_genaral_info_id`, `aplicant_name`, `aplicant_father_name`, `aplicant_mother_name`, `aplicant_birth_date`, `aplicant_gender`, `user_name`) VALUES
(1, 'Md. Rahim Hossain', 'Md. Karimul islam', 'Mst. Rokaya Begum', '2015-08-19', 'Male', 'mbstu');

-- --------------------------------------------------------

--
-- Table structure for table `aplicant_permanent_home_info`
--

CREATE TABLE IF NOT EXISTS `aplicant_permanent_home_info` (
  `aplicant_home_info_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `district_name` varchar(30) NOT NULL,
  `upazila_name` varchar(30) NOT NULL,
  `post_code` int(10) NOT NULL,
  `village_name` varchar(30) NOT NULL,
  `home_no` varchar(15) NOT NULL,
  `road_no` varchar(20) DEFAULT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  UNIQUE KEY `aplicant_home_info_id` (`aplicant_home_info_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `aplicant_permanent_home_info`
--

INSERT INTO `aplicant_permanent_home_info` (`aplicant_home_info_id`, `district_name`, `upazila_name`, `post_code`, `village_name`, `home_no`, `road_no`, `user_name`) VALUES
(1, 'Dhaka', 'Baghaichori', 5800, '', '', '', 'mbstu');

-- --------------------------------------------------------

--
-- Table structure for table `aplicant_picture_signature`
--

CREATE TABLE IF NOT EXISTS `aplicant_picture_signature` (
  `aplicant_image_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `aplicant_image` longblob NOT NULL,
  `aplicant_signature` longblob NOT NULL,
  `aplicant_image_name` varchar(50) DEFAULT NULL,
  `aplicant_signature_name` varchar(50) DEFAULT NULL,
  `user_name` varchar(30) NOT NULL,
  UNIQUE KEY `aplicant_image_info_id` (`aplicant_image_info_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `aplicant_present_home_info`
--

CREATE TABLE IF NOT EXISTS `aplicant_present_home_info` (
  `aplicant_home_info_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `district_name` varchar(30) NOT NULL,
  `upazila_name` varchar(30) NOT NULL,
  `post_code` int(10) NOT NULL,
  `village_name` varchar(30) NOT NULL,
  `home_no` varchar(15) NOT NULL,
  `road_no` varchar(20) DEFAULT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  UNIQUE KEY `aplicant_home_info_id` (`aplicant_home_info_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `aplicant_present_home_info`
--

INSERT INTO `aplicant_present_home_info` (`aplicant_home_info_id`, `district_name`, `upazila_name`, `post_code`, `village_name`, `home_no`, `road_no`, `user_name`) VALUES
(1, 'Dhaka', 'Baghaichori', 5800, '', '', '', 'mbstu');

-- --------------------------------------------------------

--
-- Table structure for table `aplicant_roll_result_info`
--

CREATE TABLE IF NOT EXISTS `aplicant_roll_result_info` (
  `aplicant_roll_result_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `aplicant_roll` varchar(20) NOT NULL,
  `aplicant_result` float DEFAULT NULL,
  `application_no` varchar(15) NOT NULL,
  `position` int(30) DEFAULT NULL,
  PRIMARY KEY (`aplicant_roll_result_info_id`),
  UNIQUE KEY `application_no` (`application_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `aplicant_roll_result_info`
--

INSERT INTO `aplicant_roll_result_info` (`aplicant_roll_result_info_id`, `aplicant_roll`, `aplicant_result`, `application_no`, `position`) VALUES
(2, 'A-1256', 169.85, '8954', 79);

-- --------------------------------------------------------

--
-- Table structure for table `applicant_home_info`
--

CREATE TABLE IF NOT EXISTS `applicant_home_info` (
  `Post_Code` varchar(20) DEFAULT NULL,
  `Village_Name` varchar(50) NOT NULL,
  `Road_No` varchar(20) NOT NULL,
  `Home_No` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `validate_user`
--

CREATE TABLE IF NOT EXISTS `validate_user` (
  `serial_no` bigint(20) unsigned NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `application_no` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_type` enum('admin','aplicant') NOT NULL,
  PRIMARY KEY (`application_no`),
  UNIQUE KEY `serial_no` (`serial_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `validate_user`
--

INSERT INTO `validate_user` (`serial_no`, `user_name`, `user_password`, `application_no`, `user_type`) VALUES
(0, 'mbstu', 'cse', '1104', 'admin'),
(2, 'mahmud', '048', '569', 'aplicant'),
(1, 'cse', '123', '8954', 'aplicant');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
