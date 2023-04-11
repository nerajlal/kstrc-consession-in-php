-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2022 at 08:21 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `arya`
--

-- --------------------------------------------------------

--
-- Table structure for table `applypass`
--

CREATE TABLE IF NOT EXISTS `applypass` (
  `passid` int(11) NOT NULL AUTO_INCREMENT,
  `studid` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `route_from` varchar(10) NOT NULL,
  `route_to` varchar(10) NOT NULL,
  `amount` int(7) NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`passid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `applypass`
--

INSERT INTO `applypass` (`passid`, `studid`, `city`, `route_from`, `route_to`, `amount`, `status`) VALUES
(1, 'arya123', 'kollam', 'kollam', 'kayamkulam', 180, 1),
(2, 'arya', 'tvm', 'kollam', 'tvm', 549, 1),
(3, 'alan', 'kollam', 'kottarakka', 'kollam', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `condreg`
--

CREATE TABLE IF NOT EXISTS `condreg` (
  `condid` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(10) NOT NULL,
  `address` varchar(25) NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`condid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `condreg`
--

INSERT INTO `condreg` (`condid`, `fname`, `address`, `phone`, `email`, `password`) VALUES
(1, 'manoj', 'sreelayam', '2147483647', 'manoj@gmail.com', 'manoj@123'),
(2, 'arif', 'ahygfrd', '2147483647', 'Arif@gmail.com', '321@Asdd'),
(3, 'grreshma', 'greeshannivas', '2147483647', 'greeshma@gmail.', '12@Greeshm'),
(4, 'Manu', 'Kollam', '8989898921', 'manu@gmail.com', 'Manu@123'),
(5, 'Gopan', 'kollam', '7676767543', 'gopu@gmail.com', 'Gopu@123');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(15) NOT NULL,
  `sts` int(5) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `type`, `sts`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(2, 'alan', 'alan', 'student', 1),
(3, 'raj', 'raj', 'transport', 1),
(11, 'gopu@gmail.com', 'Saje@1234', 'student', 1),
(10, 'raj@gmail.com', 'Raj@1234', 'student', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `studid` varchar(10) NOT NULL,
  `amount` int(10) NOT NULL,
  PRIMARY KEY (`studid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--


-- --------------------------------------------------------

--
-- Table structure for table `routeinfo`
--

CREATE TABLE IF NOT EXISTS `routeinfo` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `src` varchar(10) NOT NULL,
  `destination` varchar(10) NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `routeinfo`
--

INSERT INTO `routeinfo` (`id`, `src`, `destination`, `time`) VALUES
(1, 'kollam', 'kayamkulam', '07:00:00'),
(2, 'tvm', 'kollam', '00:00:00'),
(3, 'tvm', 'kollam', '00:00:09'),
(4, 'tvm', 'kollam', '00:00:09'),
(5, 'kayamkulam', 'kollam', '08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `studreg`
--

CREATE TABLE IF NOT EXISTS `studreg` (
  `studid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(18) NOT NULL,
  `email` text NOT NULL,
  `address` varchar(25) NOT NULL,
  `phone` text NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(5) NOT NULL,
  PRIMARY KEY (`studid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `studreg`
--

INSERT INTO `studreg` (`studid`, `sname`, `email`, `address`, `phone`, `password`, `status`) VALUES
(1, 'arya anil', '', 'panamtharayil', '2147483647', 'Arya@1234', '0'),
(2, 'aparna', '', 'aparnaaaa', '2147483647', 'Aparna@123', '0'),
(3, 'athul', '', 'sreeniyalam', '2147483647', 'Athul!@234', '0'),
(12, 'Saj', 'gopu@gmail.com', 'Thattamala', '9999999999', 'Saje@1234', '0'),
(11, 'rajeev', 'raj@gmail.com', 'Thattamala', '8888888888', 'Raj@1234', '0');
