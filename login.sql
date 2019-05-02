-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2019 at 09:01 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `secure` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`, `email`, `secure`) VALUES
(1, 'raj', '123', 'adi@gmail.com', '2323');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `publish` date DEFAULT NULL,
  `article` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `publish`, `article`) VALUES
(1, 'benifits of yoga', '2019-04-26', 'Weâ€™re a friendly bunch and we love to meet new people, so Email us to discuss any ideas. Alternatively you can contact either of us directly from our Contact Us page.We provide free initial consultations, so you can see if we would be a good fit for your needs.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `name`, `email`, `address`, `phone`, `class`) VALUES
(1, 'abhi', 'adi@gmail.com', 'danapur patna.', 2147483647, 'Evening'),
(2, 'rohan', 'abhi@gmail.com', 'delhi', 2147483647, 'Morning'),
(3, 'hitesh', 'hitesh@gmail.com', 'kolkata', 2147483647, 'Weeked'),
(4, 'rajesh', 'rajesh@gmail.com', 'chennai', 2147483647, 'Indivisual'),
(5, 'avinash', 'avinash@gmail.com', 'punjab', 2147483647, 'Weeked'),
(6, 'ram', 'ram@gmail.com', 'bhopal', 2147483647, 'Evening'),
(7, 'aditya', 'aditya@gmail.com', 'kerala', 2147483647, 'Morning');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
