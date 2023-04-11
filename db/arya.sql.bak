-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2022 at 06:25 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `babysitter`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `login_id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `sts` int(5) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `username`, `password`, `type`, `sts`) VALUES
(1, 'admin@gmail.com', 'Admin@123', 'admin', 1),
(2, 'alan@gmail.com', 'Alan@123', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE IF NOT EXISTS `tbl_registration` (
  `baby_id` int(10) NOT NULL,
  `g_name` varchar(30) NOT NULL,
  `g_phno` varchar(12) NOT NULL,
  `g_aphno` varchar(12) NOT NULL,
  `g_mailid` varchar(50) NOT NULL,
  `baby_name` varchar(30) NOT NULL,
  `b_dob` date NOT NULL,
  `b_gender` varchar(10) NOT NULL,
  `h_name` varchar(30) NOT NULL,
  `s_name` varchar(30) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  PRIMARY KEY (`baby_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`baby_id`, `g_name`, `g_phno`, `g_aphno`, `g_mailid`, `baby_name`, `b_dob`, `b_gender`, `h_name`, `s_name`, `zipcode`, `city`, `state`, `country`) VALUES
(1, 'Alan', '8547764104', '8989898989', 'alan@gmail.com', 'ammu', '2016-06-16', 'female', 'Lekshmi', 'Palathara', '691020', 'Kollam', 'Kerala', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE IF NOT EXISTS `tbl_services` (
  `service_id` int(5) NOT NULL,
  `service` text NOT NULL,
  `s_sts` int(5) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`service_id`, `service`, `s_sts`) VALUES
(1, ' Vaccine Appointment', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sitterreg`
--

CREATE TABLE IF NOT EXISTS `tbl_sitterreg` (
  `sitter_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phno` varchar(12) NOT NULL,
  `aphno` varchar(12) NOT NULL,
  `mailid` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `id_proof` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `experience` varchar(5) NOT NULL,
  `category` varchar(30) NOT NULL,
  `house_name` varchar(30) NOT NULL,
  `street_name` varchar(30) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `profile_pic` varchar(50) NOT NULL,
  `s_sts` int(5) NOT NULL,
  `skill1` text NOT NULL,
  `skill2` text NOT NULL,
  `skill3` text NOT NULL,
  `skill4` text NOT NULL,
  `skill5` text NOT NULL,
  PRIMARY KEY (`sitter_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sitterreg`
--

INSERT INTO `tbl_sitterreg` (`sitter_id`, `name`, `phno`, `aphno`, `mailid`, `dob`, `id_proof`, `gender`, `experience`, `category`, `house_name`, `street_name`, `zipcode`, `city`, `state`, `country`, `profile_pic`, `s_sts`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`) VALUES
(1, 'Ananya', '8899887788', '7788990099', 'ana@gmail.com', '1997-07-11', 'idproofs/1_ana@gmail.com.jpg', 'female', '2', 'Full-Time', 'sghhdcs', 'guiods', '875436', 'kollam', 'Kerala', 'India', 'profile_pic/1_ana@gmail.com.jpg', 1, '', '', '', '', '');
