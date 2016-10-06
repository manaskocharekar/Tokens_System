-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 06, 2016 at 08:31 PM
-- Server version: 5.5.52-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tokens_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `desk_login`
--

CREATE TABLE IF NOT EXISTS `desk_login` (
  `id` varchar(6) NOT NULL,
  `desg` varchar(10) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE IF NOT EXISTS `tokens` (
  `token_no` varchar(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `taken_ts` varchar(50) NOT NULL,
  `done_ts` varchar(50) NOT NULL,
  `desk_no` varchar(6) NOT NULL,
  `status` int(2) NOT NULL,
  `emp` varchar(50) NOT NULL,
  PRIMARY KEY (`token_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`token_no`, `name`, `taken_ts`, `done_ts`, `desk_no`, `status`, `emp`) VALUES
('CUS001', 'Manas', '2016-09-25 12:41:03pm', '2016-09-25 12:42:06pm', '1', 1, 'Manas'),
('CUS002', 'manas K', '2016-09-29 12:41:11pm', '2016-09-29 12:52:23pm', '2', 2, 'Manas'),
('CUS003', 'koc', '2016-09-25 12:41:18pm', '2016-09-25 12:52:35pm', '3', 1, 'Manas'),
('CUS004', 'mangesh k', '2016-09-25 12:41:28pm', '2016-09-30 01:44:10am', '2', 2, 'Manas'),
('CUS005', 'kkmangesh k', '2016-09-29 12:41:28pm', '2016-09-29 12:55:01pm', '4', 1, 'Koch'),
('CUS006', 'madhavi', '2016-09-25 12:41:28pm', '', '2', 1, ''),
('CUS007', 'madhavi', '2016-09-25 12:41:28pm', '', '', 0, ''),
('CUS008', 'shau', '2016-09-30 01:44:20am', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` varchar(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`) VALUES
('USR001', 'Manas'),
('USR002', 'Koch');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
