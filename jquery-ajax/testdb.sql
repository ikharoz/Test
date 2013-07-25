-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 04, 2013 at 06:34 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `nombres`
--

CREATE TABLE IF NOT EXISTS `nombres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `idioma` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `nombres`
--

INSERT INTO `nombres` (`id`, `nombre`, `usuario`, `correo`, `idioma`) VALUES
(1, 'test 1', 'usuario test 1', 'test1@test1.com', 'español'),
(2, 'test 2', 'usuario test 2', 'test2@test2.com', 'ingles'),
(3, 'usuario 1', 'usuario 1', 'usuario_@usuario.com', 'español'),
(4, 'usuario 2', 'usuario usuario 2', 'usuario_@usuario.com', 'ingles');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
