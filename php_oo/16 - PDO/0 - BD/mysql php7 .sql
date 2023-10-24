-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Out-2023 às 11:46
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php7`
--
CREATE DATABASE IF NOT EXISTS `php7` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `php7`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estudantes`
--

DROP TABLE IF EXISTS `estudantes`;
CREATE TABLE IF NOT EXISTS `estudantes` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(255) NOT NULL,
  `IDADE` int(3) DEFAULT NULL,
  `ALTURA` float DEFAULT NULL,
  `PESO` float DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estudantes`
--

INSERT INTO `estudantes` (`ID`, `NOME`, `IDADE`, `ALTURA`, `PESO`) VALUES
(3, 'timoteo', 10, 2.2, 50.5),
(4, 'timoteo', 10, 2.2, 50.5),
(5, 'timoteo', 10, 2.2, 50.5),
(6, 'timoteo', 10, 2.2, 50.5),
(7, 'timoteo', 10, 2.2, 50.5),
(8, 'timoteo', 10, 2.5, 45.5),
(9, 'timoteo', 10, 2.5, 45.5),
(10, 'timoteo', 10, 2.5, 45.5),
(11, 'timoteo', 10, 2.5, 45.5),
(12, 'timoteo', 10, 2.5, 45.5),
(13, 'timoteo', 10, 2.5, 45.5),
(14, 'timoteo', 10, 2.5, 45.5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
