-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2017 at 07:46 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rentalmobil`
--
CREATE DATABASE IF NOT EXISTS `rentalmobil` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rentalmobil`;

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE IF NOT EXISTS `kendaraan` (
  `idKendaraan` int(11) NOT NULL AUTO_INCREMENT,
  `namaKendaraan` text NOT NULL,
  `merkKendaraan` varchar(255) NOT NULL,
  `nopolKendaraan` varchar(255) NOT NULL,
  `idPemilik` int(11) NOT NULL,
  `statusKendaraan` varchar(50) NOT NULL,
  PRIMARY KEY (`idKendaraan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `namaUser` text NOT NULL,
  `role` varchar(255) NOT NULL,
  `emailUser` varchar(255) NOT NULL,
  `passwordUser` varchar(50) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `namaUser`, `role`, `emailUser`, `passwordUser`) VALUES
(1, 'lalala', '', 'lalala', 'lalala');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
