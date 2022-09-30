-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2022 at 11:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multimedia_prueba_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `noticia`
--

CREATE TABLE `noticia` (
  `titulo` char(30) NOT NULL,
  `cuerpo` text NOT NULL,
  `categoria` char(20) NOT NULL,
  `imagen` char(200) NOT NULL,
  `autor` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `noticia`
--

INSERT INTO `noticia` (`titulo`, `cuerpo`, `categoria`, `imagen`, `autor`) VALUES
('wer', 'wer', '0', '0', '0'),
('wer', 'wer', '0', '0', '0'),
('wer', 'wer', '0', '0', '0'),
('wer', 'wer', '0', '0', '0'),
('wer', 'wer', '0', '0', '0'),
('wer', 'wer', '0', '0', '0'),
('wer', 'wer', '0', '0', '0'),
('wer', 'wer', '0', '0', '0'),
('wer', 'wer', 'wqr', 'img/imagen.jpg', 'wqr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
