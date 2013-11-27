-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2013 at 08:08 AM
-- Server version: 5.5.31
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `guestbook`
--
CREATE DATABASE IF NOT EXISTS `guestbook` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `guestbook`;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `message` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_posted` date NOT NULL,
  `is_approved` enum('y','n','Y','N') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `date_posted` (`date_posted`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `message`, `email`, `date_posted`, `is_approved`) VALUES
(25, 'qqww1', '67777', '88888', '2013-11-25', 'y'),
(26, 'wewesdsddsds', 'sdqq', 'qwqwq', '2013-11-25', 'y'),
(36, 'erer', 'dfdfd', 'dfdf', '2013-11-25', 'n'),
(37, 'ddeded', 'frfrf', 'frfrfrf', '2013-11-25', 'y'),
(38, 'dsds', 'sdsd', 'dwww', '2013-11-25', 'n'),
(40, 'swew', 'sdsd', 'sdsd', '2013-11-25', 'n'),
(41, 'wewesdsddsdsd', 'sdsds', 'sdsds', '2013-11-25', 'n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
