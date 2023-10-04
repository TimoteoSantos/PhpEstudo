-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Out-2023 às 11:53
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `php7`
--
CREATE DATABASE IF NOT EXISTS `php7` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `php7`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(255) DEFAULT NULL,
  `SENHA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID`, `NOME`, `SENHA`) VALUES
(2, 'tiago', 123456),
(3, 'tiago', 123456),
(4, 'tiago', 123456),
(5, 'tiago', 123456),
(6, 'timoteo', 123),
(7, 'tiago', 123456),
(8, 'Theo', 1),
(9, 'Taiza', 31),
(10, 'tiago', 123456),
(11, 'Theo', 1),
(12, 'Taiza', 31),
(13, 'tiago', 123456),
(14, 'Theo', 1),
(15, 'Taiza', 31),
(16, 'tiago', 123456),
(17, 'Theo', 1),
(18, 'Taiza', 31),
(19, 'tiago', 123456),
(20, 'Theo', 1),
(21, 'Taiza', 31),
(22, 'tiago', 123456),
(23, 'Theo', 1),
(24, 'Taiza', 31),
(25, 'tiago', 123456),
(26, 'Theo', 1),
(27, 'Taiza', 31),
(28, 'tiago', 123456),
(29, 'Theo', 1),
(30, 'Taiza', 31),
(31, 'tiago', 123456),
(32, 'Theo', 1),
(33, 'Taiza', 31),
(34, 'tiago', 123456),
(35, 'Theo', 1),
(36, 'Taiza', 31),
(37, 'tiago', 123456),
(38, 'Theo', 1),
(39, 'Taiza', 31),
(40, 'tiago', 123456),
(41, 'Theo', 1),
(42, 'Taiza', 31),
(43, 'tiago', 123456),
(44, 'Theo', 1),
(45, 'Taiza', 31),
(46, 'tiago', 123456),
(47, 'Theo', 1),
(48, 'Taiza', 31),
(49, 'tiago', 123456),
(50, 'Theo', 1),
(51, 'Taiza', 31),
(52, 'tiago', 123456),
(53, 'Theo', 1),
(54, 'Taiza', 31),
(55, 'tiago', 123456),
(56, 'Theo', 1),
(57, 'Taiza', 31),
(58, 'tiago', 123456),
(59, 'Theo', 1),
(60, 'Taiza', 31),
(61, 'tiago', 123456),
(62, 'Theo', 1),
(63, 'Taiza', 31),
(64, 'tiago', 123456),
(65, 'Theo', 1),
(66, 'Taiza', 31),
(67, 'tiago', 123456),
(68, 'Theo', 1),
(69, 'Taiza', 31),
(70, 'tiago', 123456),
(71, 'Theo', 1),
(72, 'Taiza', 31),
(73, 'tiago', 123456),
(74, 'Theo', 1),
(75, 'Taiza', 31),
(76, 'tiago', 123456),
(77, 'Theo', 1),
(78, 'Taiza', 31),
(79, 'tiago', 123456),
(80, 'Theo', 1),
(81, 'Taiza', 31),
(82, 'tiago', 123456),
(83, 'Theo', 1),
(84, 'Taiza', 31),
(85, 'tiago', 123456),
(86, 'Theo', 1),
(87, 'Taiza', 31),
(88, 'tiago', 123456),
(89, 'Theo', 1),
(90, 'Taiza', 31),
(91, 'tiago', 123456),
(92, 'Theo', 1),
(93, 'Taiza', 31),
(94, 'tiago', 123456),
(95, 'Theo', 1),
(96, 'Taiza', 31),
(97, 'tiago', 123456),
(98, 'Theo', 1),
(99, 'Taiza', 31),
(100, 'tiago', 123456),
(101, 'Theo', 1),
(102, 'Taiza', 31),
(103, 'tiago', 123456),
(104, 'Theo', 1),
(105, 'Taiza', 31),
(106, 'tiago', 123456),
(107, 'Theo', 1),
(108, 'Taiza', 31),
(109, 'tiago', 123456),
(110, 'Theo', 1),
(111, 'Taiza', 31);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
