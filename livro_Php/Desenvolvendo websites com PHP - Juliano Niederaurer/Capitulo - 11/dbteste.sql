-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Mar-2024 às 12:51
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbteste`
--
CREATE DATABASE IF NOT EXISTS `dbteste` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbteste`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `COD_CATEGORIA` smallint(6) NOT NULL,
  `NOME_CATEGORIA` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `CODIGO_PRODUTO` smallint(6) NOT NULL,
  `NOME_PRODUTO` varchar(80) NOT NULL,
  `DESCRICAO_PRODUTO` text,
  `PRECO` float NOT NULL,
  `PESO` float DEFAULT NULL,
  `COD_CATEGORIA` smallint(6) NOT NULL,
  `COD_SUB_CATEGORIA` smallint(6) NOT NULL,
  `IF_ADICIONAIS` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sub_categoria`
--

DROP TABLE IF EXISTS `sub_categoria`;
CREATE TABLE IF NOT EXISTS `sub_categoria` (
  `COD_SUB_CATEGORIA` smallint(6) NOT NULL,
  `NOME_SUB_CATEGORIA` varchar(60) NOT NULL,
  `COD_CATEGORIA` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
