-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2017 at 04:33 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbnegara`
--

-- --------------------------------------------------------

--
-- Table structure for table `negara`
--

CREATE TABLE IF NOT EXISTS `negara` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nama_negara` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `negara`
--

INSERT INTO `negara` (`id`, `nama_negara`) VALUES
(1, 'Afganistan'),
(2, 'Arab Saudi'),
(3, 'Azerbaijan'),
(4, 'Bahrain'),
(5, 'Bangladesh'),
(6, 'Bhutan'),
(7, 'Brunei Darussalam'),
(8, 'Filipina'),
(9, 'Finlandia'),
(10, 'Indonesia'),
(11, 'India'),
(12, 'Iran'),
(13, 'Haiti'),
(14, 'Honduras'),
(15, 'Jamaika'),
(16, 'Jepang'),
(17, 'Jerman'),
(18, 'Kamboja'),
(19, 'Kamerun'),
(20, 'Libia'),
(21, 'Lebanon'),
(22, 'Malasyia'),
(23, 'Mesir'),
(24, 'Nigeria'),
(25, 'Norwegia'),
(26, 'Pakistan'),
(27, 'Panama'),
(28, 'Perancis'),
(29, 'Rusia'),
(30, 'Rumania');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
